<?php
require_once ('../db/dbhelper.php');
session_start();
$user_id="";
 $sql = 'select * from tai_khoan where username = "'.$_SESSION['username'].'"';
    $list = executeResult($sql);
    foreach($list as $item){
    $user_id = $item['user_id'];}
if (!empty($_POST)) {
	if (isset($_POST["user_fullname"])) {
		$user_fullname= $_POST['user_fullname'];
	}
	if (isset($_POST["user_birthday"])) {
		$user_birthday= $_POST['user_birthday'];
	}
	if (isset($_POST["user_email"])) {
		$user_email= $_POST['user_email'];
	}
	if (isset($_POST["user_gender"])) {
		$user_gender= $_POST['user_gender'];
	}
	if (isset($_POST["user_exp"])) {
		$user_exp= $_POST['user_exp'];
	}
	if (isset($_POST["user_language"])) {
		$user_language= $_POST['user_language'];
	}
}
error_reporting(0);
$sql1 = 'update tai_khoan set user_fullname="'.$user_fullname.'" ,user_birthday="'.$user_birthday.'",user_email="'.$user_email.'",user_gender="'.$user_gender.'",user_exp = "'.$user_exp.'",user_language = "'.$user_language.'" where user_id ='.$user_id; 		
execute($sql1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thông tin người dùng</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="trangchu.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="topbar header">
		<ul >
			<li>
				<i class="fas fa-mobile-alt"></i>
				Điện thoại: 096 - 9696969
			</li>
			<li style="margin-left: 3%">
				<i class="far fa-envelope"></i>
				<a style="color: white;text-decoration: none;" href="">Email: webtimviec@gmail.com</a>
			</li>
			<li style="margin-left: 48%">
				<a href="user_info.php"><img style="padding-top: 0px" src="../image/user_avt.jpg"></a>
				<?php 
       			if (isset($_SESSION['username']) && $_SESSION['username']){
           			echo '<a href="">'.$_SESSION['username'].'</a>';
           			echo' <span style="color:rgb(128,187,53)">---></span>';
           			echo '<a href="../login/logout.php"> Đăng xuất</a>';
       			}
       			?>
			</li>
		</ul>
	</div>

	<div class=" row header_2">
		<div class="col-lg-3 ">
			<img style="width: 100%" src="https://phenikaa-x.com/wp-content/uploads/2020/10/logo_vn.png">
		</div>

		<div class="col-lg-8 ">
		

			<div class="col-lg-4 ">
				<div style="width: 20%;">
					<img style="width: 100%;"  src="https://t010.gokisoft.com/themes/freshfood/img/cache/catalog/services/policy2-0x0.png">
				</div>
				<div style="width: 80%">
					<a style="color: black" href="">Hỗ trợ 24/7</a> 
					<label>Hotline: 096-9696969</label>
				</div>
			</div>

			<div class="col-lg-4 ">
				<div style="width: 20%;">
					<img style="width: 100%; "  src="https://t010.gokisoft.com/themes/freshfood/img/cache/catalog/services/policy3-0x0.png">
				</div>
				<div style="width: 80%">
					<a style="color: black;" href="">Giờ làm việc</a> 
					<label>T2 - T7 Giờ hành chính</label>
				</div>
			</div>

		</div>
	</div>

	<!-- THANH MENU -->
	<div class="menu"> <!-- THANH MENU START -->
		<nav class="navbar navbar-expand-sm">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="trangchu.php">Trang Chủ</a>
				</li>
				<li style="text-align:center" class="nav-item">
					<a style="width:100px" class="nav-link" href="Front-end.php">Front-end</a>
				</li>
				<li style="text-align:center" class="nav-item">
					<a style="width:100px" class="nav-link" href="Back-end.php">Back-end</a>
				</li>
				<li style="text-align:center" class="nav-item">
					<a style="width:100px" class="nav-link" href="Tester.php">Tester</a>
				</li>
				<li style="text-align:center" class="nav-item">
					<a style="width:100px" class="nav-link" href="AI.php">AI</a>
				</li>
				<li style="text-align:center" class="nav-item">
					<a style="width:100px" class="nav-link" href="khac.php">Khác</a>
				</li>
			</ul>
			<form class="form-inline" action="name_searching.php" method="REQUEST">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Tìm kiếm theo ngôn ngữ" name="name_searching">
					
					<button type="submit"><img style="width: 20px" src="../image/search_icon.jpg"></button>
					
				</div>
			</form>
		</nav>
	</div> <!-- THANH MENU END -->

	<!-- MAIN MENU TRÁI -->
	<div class="container row main">
		<div class="col-lg-3 left-menu">
			
		</div> <!-- MENU TRÁI END -->

		<!-- SLIDE IMG -->
		<div class="col-lg-9"> 
			

			
		</div>

		<div class="container-fluid product">
			<!-- SẢN PHẨM BÁN CHẠY -->
			<div class="row title">
				<span>SỬA THÔNG TIN NGƯỜI DÙNG</span>
				<span><a href="trangchu.php"></a></span>
			</div>

			
			
			<form action ="user_update.php" method="POST">
					<div class="form-group">
					<?php
						// Turn off all error reporting
						error_reporting(0);
						$sql = 'select * from tai_khoan where user_id ='.$user_id;
						$list_user = executeResult($sql);
						foreach($list_user as $item) {
					?>
					<img style="width:200px"src="../image/user_avt.jpg"><br>
					  <label for="user_fullname">Họ, Tên</label>
					  <input required="true" type="text" class="form-control" id="user_fullname" name="user_fullname" value="<?=$item['user_fullname']?>">
					</div>
					<div class="form-group">
					  <label for="user_birthday">Ngày sinh</label>
					  <input required="true" type="text" class="form-control" id="user_birthday" name="user_birthday" value="<?=$item['user_birthday']?>">
					</div>
					<div class="form-group">
					  <label for="user_email">Email</label>
					  <input type="text" class="form-control" id="user_email" name="user_email" value="<?=$item['user_email']?>">
					</div>
					<div class="form-group">
					  <label for="user_gender">Giới tính</label>
					  <input required="true" type="text" class="form-control" id="user_gender" name="user_gender" value="<?=$item['user_gender']?>">
					</div>
					<div class="form-group">
					  <label for="user_exp">Kinh nghiệm làm việc</label>
					  <input required="true" type="text" class="form-control" id="user_exp" name="user_exp" value="<?=$item['user_exp']?>">
					</div>
					<div class="form-group">
					  <label for="user_language">Ngôn ngữ sử dụng</label>
					  <input required="true" type="text" class="form-control" id="user_language" name="user_language" value="<?=$item['user_language']?>">
					</div>
					<button type="submit" style="margin-right: 50px;margin-bottom: 30px;width: 120px;"  class="btn btn-success">Cập Nhật</button>
					
				<?php } ?>
				</form>
				<a href="user_info.php" ><button class="btn btn-warning" style="width: 120px;">Quay lại</button></a>	
				
		</div>  <!-- SAN PHAM BAN CHAY END -->

		
	</div> <!-- MAIN -->



	<!-- FOOTER -->
	<div class="container-fluid footer">
		<div class="col-lg-5">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">LIÊN HỆ</li>
				<li class="list-group-item"><i class="fas fa-map-marker-alt"></i><a href="">Đại học Phenikaa, Yên Nghĩa, Hà Đông, Hà Nội</a></li>
				<li class="list-group-item"><i class="block_icon fa fa-phone"></i><a href="">0969696969</a></li>
				<li class="list-group-item"><i class="block_icon fa fa-envelope"></i><a href="">webtimviec@gmail.com</a></li>
			</ul>
			
		</div>

		<div class="col-lg-3">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">TIN TỨC MỚI NHẤT</li>
				<li class="list-group-item"><a href="https://genk.vn/co-gi-o-talkshow-tan-cong-mang-va-giai-phap-bao-mat-hieu-qua-trong-nganh-cctv-20211004141858541.chn"> - Có gì ở talkshow “Tấn công mạng và giải pháp bảo mật hiệu quả trong ngành CCTV”?</a></li>
				<li class="list-group-item"><a href="https://vnexpress.net/top-10-cong-viec-nganh-cntt-luong-cao-nhat-nuoc-my-4295073.html">- Top 10 công việc ngành CNTT lương cao nhất nước Mỹ</a></li>
			</ul>
		</div>

		<div class="col-lg-4">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Mạng xã hội</li>
				<li class="list-group-item"><a href="">Facebook</a></li>
				<li class="list-group-item"><a href="">Twiter</a></li>
				<li class="list-group-item"><a href="">Instagram</a></li>
				<li class="list-group-item"><a href="">Reddit</a></li>
			</ul>
		</div>
	</div> <!-- FOOTER END -->
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>