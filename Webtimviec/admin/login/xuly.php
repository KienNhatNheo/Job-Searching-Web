



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
        <?php
require_once ('../db/dbhelper.php');
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['txtUsername'])){
        die('');
    }
     
    //Nhúng file kết nối với database

          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = $_POST['txtUsername'];
    $password   = $_POST['txtPassword'];
    $email      = $_POST['txtEmail'];
    $fullname   = $_POST['txtFullname'];
    $birthday   = $_POST['txtBirthday'];
    $gender        = $_POST['txtGender'];
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password || !$email || !$fullname || !$birthday || !$gender)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
        $password = md5($password);
    //Lưu thông tin thành viên vào bảng
    $sql ='INSERT INTO tai_khoan (
            username,
            user_password,
            user_email,
            user_fullname,
            user_birthday,
            user_gender
        )
        values (
            "'.$username.'",
            "'.$password.'",
            "'.$email.'",
            "'.$fullname.'",
            "'.$birthday.'",
           "'.$gender.'")';
    execute($sql);   
    echo 'Bạn đã đăng ký tài khoản thành công!
    <br>
    <a href="login.php"><button class="btn btn-success">Đăng nhập tại đây</button></a>'; 

?>

    </div>
        <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" style="width: 900px" src="https://dplusvn.com/wp-content/uploads/2020/06/khong-gian-mo.jpg" alt="First slide" title="vevrvrbvrstb">
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
    
