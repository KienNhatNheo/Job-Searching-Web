<?php
require_once ('../db/dbhelper.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
				Điện thoại: 012 - 3456789
			</li>
			<li style="margin-left: 3%">
				<i class="far fa-envelope"></i>
				<a style="color: white;text-decoration: none;" href="mailto:KienNhatNheo@gmail.com">Email: KienNhatNheo@gmail.com</a>
			</li>
			<li style="margin-left: 48%">
				<i class="fas fa-user"></i>
				<a style="color: white" href="#">Đăng nhập</a>
			</li>
		</ul>
	</div>

	<div class=" row header_2">
		<div class="col-lg-3 ">
			<img style="width: 100%" src="https://res.cloudinary.com/gokisoft-com/image/upload/v1565325791/logo_wem2z6.png">
		</div>

		<div class="col-lg-8 ">
		

			<div class="col-lg-4 ">
				<div style="width: 20%;">
					<img style="width: 100%;"  src="https://t010.gokisoft.com/themes/freshfood/img/cache/catalog/services/policy2-0x0.png">
				</div>
				<div style="width: 80%">
					<a style="color: black" href="">Hỗ trợ 24/7</a> 
					<label>Hotline: 093 - 39 08 568</label>
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
		<div class="col-lg-1 ">
			<div><a ><i class="fa fa-shopping-bag"></i> Giỏ hàng</a></div>
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
					<a style="width:100px" class="nav-link" href="CC++.php">C/C++</a>
				</li>
				<li style="text-align:center" class="nav-item">
					<a style="width:100px" class="nav-link" href="Java.php">Java</a>
				</li>
				<li style="text-align:center" class="nav-item">
					<a style="width:100px" class="nav-link" href="PHP.php">PHP</a>
				</li>
				<li style="text-align:center" class="nav-item">
					<a style="width:100px" class="nav-link" href="JavaScript.php">JavaScript</a>
				</li>
				<li style="text-align:center" class="nav-item">
					<a style="width:100px" class="nav-link" href="HTML.php">HTML</a>
				</li>
				<li style="text-align:center" class="nav-item">
					<a style="width:100px" class="nav-link" href="#">Liên hệ</a>
				</li>
			</ul>
			<form class="form-inline" action="/action_page.php">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Tìm kiếm">
					<div class="input-group-prepend">
						<span style="background-color: white;" class="input-group-text"><a style="color:black" href=""><i style="border: none" class="fas fa-search"></i></a></span>
					</div>
				</div>
			</form>
		</nav>
	</div> <!-- THANH MENU END -->

	<!-- MAIN MENU TRÁI -->
	<div class="container row main">
		<div class="col-lg-3 left-menu">
			<div class="list-group">
				<span class="list-group-item" style="color: white; font-size: 17px; background: #80bb35; border-radius: 30px; font-weight: bolder;">DANH MỤC SẢN PHẨM</span>
				<a href="#" class="list-group-item ">Rau an toàn</a>
				<a href="#" class="list-group-item ">Thủy hản sản</a>
				<a href="#" class="list-group-item ">Thực phẩm tươi sống</a>
				<a href="#" class="list-group-item ">Thực phẩm chế biến</a>
				<a href="#" class="list-group-item ">Thực phẩm đóng hộp</a>
			</div>
		</div> <!-- MENU TRÁI END -->

		<!-- SLIDE IMG -->
		<div class="col-lg-9"> 
			<div id="demo" class="carousel slide" data-ride="carousel">
				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img style="width:900px" src="https://nghenghiep.timviecnhanh.com/wp-content/uploads/2018/01/nhung-bi-quyet-don-gian-giup-ban-thanh-cong-trong-cong-viec-hinh-anh-1.jpg"></div>
					<div class="carousel-item">
						<img style="width:900px" src="https://i.imgur.com/PRZwJ4Q.jpg">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>

			<div class="col-lg-6">
				<img src="https://res.cloudinary.com/gokisoft-com/image/upload/v1565325868/bn1-0x0_umuelv.png">
			</div>

			<div class="col-lg-6">
				<img src="https://res.cloudinary.com/gokisoft-com/image/upload/v1565325882/bn2-0x0_xjvsmb.jpg">
			</div>
		</div>

		<div class="container-fluid product">
			<!-- SẢN PHẨM BÁN CHẠY -->
			<div class="row title">
				<span>Ngôn ngữ HTML</span>
				<span><a href="">Xem tất cả</a></span>
			</div>

			
			
			<?php 
// Lấy danh sách dữ liệu từ CSDL
$sql = "select * from cong_viec where job_language like '%HTML%'";
$Listcong_viecC = executeResult($sql);

foreach ($Listcong_viecC as $item){
	echo '
	
	<div class="col-lg-3">
				<div style="width:270px" style="height:500px" class="card">
					<img class="card-img-top" src="https://hatgiongdalat.com/asset/upload/image/hat-giong-bap-cai-chiu-nhiet_(1).jpg?v=20190410" alt="Card image">
					<div class="card-body">
						<a href="#">'.$item['job_name'].'</a>
						<div>Ngôn ngữ: '.$item['job_language'].'</div>
						<div>Mức lương:'.$item['job_salary'].'VNĐ</div><br>
						<a href="../congviec/job_info.php?job_id='.$item['job_id'].'"><button class="btn btn-success">Xem chi tiết</button></a>
					</div>
				</div>			
	</div>
			
	';
}
?>	
			
			
			
		</div>  <!-- SAN PHAM BAN CHAY END -->

		<!-- TIN  TUC -->
		<div class="container new">
			<a href="">TIN TỨC</a>
		</div>
<br>
		<div class="container ">
			<div class="row food_new">
			<div class="col-lg-4">
				<div class="card">
					<img class="card-img-top" src="https://res.cloudinary.com/gokisoft-com/image/upload/v1565082912/27_srepab.jpg" alt="Card image">
					<div class="card-body">
						<a href="" style="color: black; font-weight: bold;">Mì Ý</a>
						<p class="card-text">Nước Ý không chỉ nổi tiếng với những công trình kiến trúc cổ xưa hùng vĩ...</p>
						<a href="#" class="btn">Xem thêm</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card">
					<img class="card-img-top" src="https://res.cloudinary.com/gokisoft-com/image/upload/v1565082275/20_jznnot.webp" alt="Card image">
					<div class="card-body">
						<a href="" style="color: black; font-weight: bold;">ỐC Hương Muối Ớt Thơm Lừng</a>
						<p class="card-text">Được gọi là ốc hương bởi loài ốc này tạo ra mùi hương vô cùng hấp dẫn...</p>
						<a href="#" class="btn">Xem thêm</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card">
					<img class="card-img-top" src="https://res.cloudinary.com/gokisoft-com/image/upload/v1565082220/19_ieipex.jpg" alt="Card image">
					<div class="card-body">
						<a href="" style="color: black; font-weight: bold;">Đậu xanh tăng giá mạnh, người dân Hà thành lao đao</a>
						<p class="card-text">Khoảng một tuần nay do ảnh hưởng của thời tiết mưa lũ kéo dài...</p>
						<a href="#" class="btn">Xem thêm</a>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div> <!-- MAIN -->



	<!-- FOOTER -->
	<div class="container-fluid footer">
		<div class="col-lg-5">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">LIÊN HỆ</li>
				<li class="list-group-item"><i class="fas fa-map-marker-alt"></i><a href="">HH1C Linh Đàm, Linh Đường, Hoàng Liệt, Hoàng Mai, Hà Nội, Việt Nam</a></li>
				<li class="list-group-item"><i class="block_icon fa fa-phone"></i><a href="">093 - 39 08 568</a></li>
				<li class="list-group-item"><i class="block_icon fa fa-envelope"></i><a href="">ziczacgroup@gmail.com</a></li>
			</ul>
			
		</div>

		<div class="col-lg-3">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">TIN TỨC MỚI NHẤT</li>
				<li class="list-group-item"><a href="">Mỳ Ý</a></li>
				<li class="list-group-item"><a href="">Ốc rang muối ớt thơm lừng</a></li>
				<li class="list-group-item"><a href="">Rau xanh tăng giá mạnh vì trời mưa, người dân nội thành lao đao</a></li>
			</ul>
		</div>

		<div class="col-lg-4">
			<ul class="list-group list-group-flush">
				<li class="list-group-item">SẢN PHẨM BÁN CHẠY NHẤT</li>
				<li class="list-group-item"><a href="">Bò viên CP</a></li>
				<li class="list-group-item"><a href="">Bắp cải (Rau sạch)</a></li>
				<li class="list-group-item"><a href="">Mồng tơi (Rau sạch)</a></li>
				<li class="list-group-item"><a href="">Cà rốt (Rau sạch)</a></li>
				<li class="list-group-item"><a href="">Dua chuột(Rau sạch)</a></li>
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