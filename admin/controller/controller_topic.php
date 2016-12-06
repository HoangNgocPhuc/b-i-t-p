
<?php
	/**
	* 
	*/
	ob_start();
	class controller_topic extends controller
	{
		public $data;		
		public $deal;
		function __construct()
		{
			# code...
			include "controller/PHPMailer/class.phpmailer.php";
			require 'controller/PHPMailer/PHPMailerAutoload.php';
			require 'controller/PHPMailer/class.smtp.php';
			parent::__construct();
		}
		//read file
		public function get_file($value='')
		{
			# code...
			if ($_SERVER["REQUEST_METHOD"]=="POST"){
				if (isset($_FILES["file-excel"]["name"]) && ($_FILES["file-excel"]["name"]!="")){
					$t = time();
					move_uploaded_file($_FILES['file-excel']['tmp_name'], 'public/Excel/'.$t.$_FILES["file-excel"]["name"]);
					$this->data = 'public/Excel/'.$t.$_FILES["file-excel"]["name"];
					
					$this->deal = $_POST["date"];
					$time = strtotime($_POST["date"]);
				 	
					setcookie('deadline','1', $time, "/");
					
				}
			}
		}

		//read file excel and insert to database
		public function read_excel()
		{
			include 'controller/Classes/PHPExcel/IOFactory.php';

			$inputFileName = $this->data;

			//  Read your Excel workbook
			try {
			    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
			    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
			    $objPHPExcel = $objReader->load($inputFileName);
			} catch(Exception $e) {
			    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
			}

			//  Get worksheet dimensions
			$sheet = $objPHPExcel->getSheet(0); 
			$highestRow = $sheet->getHighestRow(); 
			$highestColumn = $sheet->getHighestColumn();
			//  Loop through each row of the worksheet in turn
			for ($row = 2; $row <= $highestRow; $row++){ 
			    //  Read a row of data into an array
			    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
			                                    NULL,
			                                    TRUE,
			                                    FALSE);
			    //  Insert row data array into your database of choice here
			    if (isset($_POST["submit"])){
				   	// foreach ($rowData as $rowDataChild) {
				   	// 	# code...
				   	// 	$code = $rowDataChild[0];
				   	// 	//kiểm tra xem đã có giáo viên đó trong database chưa
				   	// 	if ($this->model->num_rows("select name from teacher where pk_code_teacher_id='$code'") == 0){
				   	// 		// chèn giáo viên đó vào database
				   	// 		$pass = md5($code);
				   	// 		$email = $rowDataChild[3];
				   	// 		$this->send_mail($code,$code,$email);
				   	// 		$this->model->execute("insert into teacher(pk_code_teacher_id,name,major,mail,password) VALUES('$rowDataChild[0]','$rowDataChild[1]','$rowDataChild[2]','$rowDataChild[3]','$pass')");
				   	// 	}
				   	// }
				   	foreach ($rowData as $rowDataChild) {
				   		# code...
				   		$code = $rowDataChild[0];
				   		//kiểm tra xem đã có sinh vien đó trong database chưa
				   		if ($this->model->num_rows("select name from topic where pk_code_student_id='$code'") == 0){
				   			// chèn sinh vien đó vào database
				   			$email = $rowDataChild[4];
				   			$this->send_mail($email);
				   			$this->model->execute("insert into topic(pk_code_student_id, name, mail) 
				   									VALUES('$rowDataChild[0]', '$rowDataChild[1]', '$rowDataChild[4]')");
				   			
				   		}
				   	}
				}
			}
		}

		//auto send mail
		public function send_mail($email)
		{
			// Khai báo tạo PHPMailer
			$mail = new PHPMailer();
			$mail->CharSet = 'UTF-8';
			//Khai báo gửi mail bằng SMTP
			$mail->IsSMTP();
			//Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
			// 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
			// 1 = Thông báo lỗi ở client
			// 2 = Thông báo lỗi cả client và lỗi ở server
			//$mail->SMTPDebug  = 2;
			 
			$mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
			$mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
			$mail->Port       = 465; // cổng để gửi mail
			$mail->SMTPSecure = "ssl"; //Phương thức mã hóa thư - ssl hoặc tls
			$mail->SMTPAuth   = true; //Xác thực SMTP
			$mail->Username   = "laylaifb36@gmail.com"; // Tên đăng nhập tài khoản Gmail
			$mail->Password   = "congnghe3695"; //Mật khẩu của gmail
			$mail->SetFrom("laylaifb36@gmail.com", "Admin"); // Thông tin người gửi
			$mail->AddReplyTo("laylaifb36@gmail.com","Admin");// Ấn định email sẽ nhận khi người dùng reply lại.
			$mail->AddAddress("$email");//Email của người nhận
			$mail->Subject = "Kích hoạt tài khoản"; //Tiêu đề của thư
			$mail->MsgHTML("Ban hãy vào đăng ký đề tài. Hạn cuối sẽ là 0h " . $this->deal); //Nội dung của bức thư.
			//$mail->MsgHTML(file_get_contents("view/form_send_mail.php"), dirname(__FILE__));
			// Gửi thư với tập tin html
			$mail->AltBody = "Bạn mở file và làm theo hướng dẫn";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
			//$mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach
			 
			//Tiến hành gửi email và kiểm tra lỗi
			if(!$mail->Send()) {
			  echo "Có lỗi khi gửi mail: " . $mail->ErrorInfo;
			}
		}
	}
	include("view/view_register_topic.php");
	$a = new controller_topic();
	$a->get_file();
	if ($a->data !="" ){
		$a->read_excel();
	}
	ob_end_flush();
?>	
