
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
        <h2 class="text-center">Đăng Ký</h2>
        <form class="login-form" action="xuly.php" method="POST">
  <div class="form-group">
    <div class="form-group">
    <label for="exampleInputPassword1" class="text">Tên Doanh Nghiệp</label>
    <input type="text" class="form-control" placeholder="" name='txtFullname'>
  </div>
    <label for="exampleInputEmail1" class="text">Tên Tài Khoản</label>
    <input type="text" class="form-control" placeholder="" name='txtUsername'>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text">Mật Khẩu</label>
    <input type="password" class="form-control" placeholder="" name='txtPassword'>
  </div>
  
  
    <div class="form-check">
    <button type="submit" class="btn btn-login float-right">Đăng Ký</button>
  </div>
  
</form>
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
    
