<?php
require_once ('../db/dbhelper.php');
require_once ('../db/config.php');
$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Lấy dữ liệu nhập vào
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    $password = md5($password);


    //Kiểm tra tên đăng nhập có tồn tại không
    $query = "SELECT * FROM tai_khoan WHERE username='$username'";

    $result = mysqli_query($con, $query) or die( mysqli_error($con));

    if (!$result) {
    echo "Tên đăng nhập hoặc mật khẩu không đúng!";
    } else {
    echo "Đăng nhập thành công!";
    }
      
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($result);
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['user_password']) {
    echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
    }
      
    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href='../home_page/trangchu.php'>Trở về trang chủ</a>";


    // $_SESSION['POST'] = $_POST;
    // header('Location: ../home_page_user/trangchu.php?id='.$row["user_id"].'',true,307);
    header('Location:../home_page_user/trangchu.php');

}
?>


<form></form>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--important link source from "https://bootsnipp.com/snippets/GlaW2"-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="login.css">
  <title></title>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
        <h2 class="text-center">Đăng Nhập</h2>
        <form class="login-form" action='login.php?do=login' method='POST'>
  <div class="form-group">
    <label for="exampleInputEmail1" class="text">Tên Tài Khoản</label>
    <input type="text" class="form-control" placeholder="" name='txtUsername'>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text">Mật Khẩu</label>
    <input type="password" class="form-control" placeholder="" name='txtPassword'>
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember Me</small>
    </label>
    <button type="submit" class="btn btn-login float-right"  name="dangnhap">Đăng Nhập</button>
  </div>
  
</form>
<div class="copy-text">Bạn chưa có tài khoản? <i class="fa fa-heart"></i> <a href="register.php">Đăng ký</a></div>
    </div>
    <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>  
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>  
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>  
    </div>
  </div>
            </div>     
        
    </div>
  </div>
</div>
</section>
</body>
</html>