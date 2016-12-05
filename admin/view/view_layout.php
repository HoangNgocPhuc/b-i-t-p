<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
  <script type="text/javascript" src="public/js/jquery-3.0.0.js" ></script>
  <script type="text/javascript" src="public/js/bootstrap.min.js" ></script>
  <link rel="stylesheet" type="text/css" href="public/fonts/font-awesome/css/font-awesome.css">
</head>
<body>

      <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Danh mục đơn vị <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?controller=faculty_upload_excel">Khoa</a></li>
                <li><a href="#">Bộ môn</a></li>
                <li><a href="#">Phòng thí nghiệm</a></li>
                <li><a href="#">Văn phòng khoa</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Danh mục các lĩnh vực <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Cấu trúc cây</a></li>
                <li><a href="#">Tham khảo cách phân loại của ACM</a></li>
              </ul>
            </li>
            <li><a href="index.php?controller=lecture">Danh mục giảng viên</a></li>
            <li><a href="index.php?controller=logout">Logout</a></li>
            <li><a>Xin chào <?php echo isset($_SESSION["c_username_admin"]) ? $_SESSION["c_username_admin"]:""; ?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Theme example</h1>
        <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
      </div>


    </div> <!-- /container -->
    <div class="container">
      <?php
        if (file_exists($controller)){
          include $controller;
        }
      ?>
    </div>
</body>
</html>