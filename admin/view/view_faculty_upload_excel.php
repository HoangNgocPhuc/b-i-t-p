<div class="container">
	<div class="col-md-8 col-md-offset-2 infor123">  
		Bạn vui lòng tải file lên nhấn submit để thêm thông tin giảng viên.<br>
		Một email cũng sẽ được gửi tới mỗi giảng viên để kích hoạt tài khoản
	</div>
    <div class="row">    
        <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <form action="" method="post" enctype="multipart/form-data">
	            <div class="input-group image-preview">
	                <input type="text" class="form-control image-preview-filename" disabled="disabled" placeholder="File định dạng excel" > <!-- don't give a name === doesn't send on POST/GET -->
	                <span class="input-group-btn">
	                    <!-- image-preview-clear button -->
	                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
	                        <span class="glyphicon glyphicon-remove"></span> Clear
	                    </button>
	                    <!-- image-preview-input -->
	                    <div class="btn btn-default image-preview-input">
	                        <span class="glyphicon glyphicon-folder-open"></span>
	                        <span class="image-preview-input-title">Browse</span>
	                        <input type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, .csv" name="file-excel" /> <!-- rename it -->
	                    </div>
	                </span>
	            </div><!-- /input-group image-preview [TO HERE]--> 
	            <input type="submit" name="teacher" value="Send to teacher" class="btn-upload-file-excel">
	            <input type="submit" name="student" value="Send to student" class="btn-upload-file-excel">
	        </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="public/js/upload.js"></script>