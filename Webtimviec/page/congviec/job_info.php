<?php
require_once ('../db/dbhelper.php');
if(isset($_GET['job_id'])){
	$job_id = $_GET['job_id'];
	$sql = 'select * from cong_viec where job_id ='.$job_id;
	$category = executeSingleResult($sql);
	if($category!= null){
		$job_own = $category['job_own'];
		$job_name = $category['job_name'];
		$job_quantity = $category['job_quantity'];
		$job_salary = $category['job_salary'];
		$job_language = $category['job_language'];
		$job_experiment = $category['job_experiment'];
		$job_environment = $category['job_environment'];
		$job_profit = $category['job_profit'];
		$job_address = $category['job_address'];
		$job_hotline = $category['job_hotline'];
		$job_email = $category['job_email'];
		$job_start = $category['job_start'];
		$job_end = $category['job_end'];	
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thông tin chi tiết</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../home_page/trangchu.css">
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
				<i class="fas fa-user"></i>
				<a style="color: white" href="#">Đăng nhập</a>
			</li>
		</ul>
	</div>

	<div class=" row header_2">
		<div class="col-lg-3 ">
			<a href="trangchu.php"><img style="width: 100%" src="https://phenikaa-x.com/wp-content/uploads/2020/10/logo_vn.png"></a>
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
					<a style="width:100px" class="nav-link" href="../home_page/Front-end.php">Front-end</a>
				</li>
				<li style="text-align:center" class="nav-item">
					<a style="width:100px" class="nav-link" href="../home_page/Back-end.php">Back-end</a>
				</li>
				<li style="text-align:center" class="nav-item">
					<a style="width:100px" class="nav-link" href="../home_page/Tester.php">Tester</a>
				</li>
				<li style="text-align:center" class="nav-item">
					<a style="width:100px" class="nav-link" href="../home_page/AI.php">AI</a>
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
			<div class="list-group">
				<span class="list-group-item" style="color: white; font-size: 17px; background: #80bb35; border-radius: 30px; font-weight: bolder;">Địa Điểm</span>
				<a href="../home_page/hanoi.php" class="list-group-item ">Hà Nội</a>
				<a href="../home_page/haiphong.php" class="list-group-item ">Hải Phòng</a>
				<a href="#" class="list-group-item ">Quảng Ninh</a>
			</div>
		</div> <!-- MENU TRÁI END -->

		<!-- SLIDE IMG -->
		<div class="col-lg-9"> 
			<div id="demo" class="carousel slide" data-ride="carousel">
				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img style="width:800px" src="../image/banner.png"></div>
					
				</div>

			</div>

			<div class="col-lg-6">
				<a href="https://blog.topcv.vn/ban-muon-tim-cong-viec-phu-hop-voi-tinh-cach-sau-day-la-mot-vai-tips-dang-xem/"><img style="width:450px;height:170px;" src="../image/left-img.jpg" title="Bạn muốn tìm công việc phù hợp với tính cách?"></a>
			</div>

			<div class="col-lg-6">
				<a href="https://jobsgo.vn/blog/hoc-cntt-ra-lam-gi/"><img style="width:450px;height:170px;"src="../image/img2.jpg" title="Học CNTT ra làm gì?"></a>
			</div>
		</div>

		<div class="container-fluid product">
			<!-- SẢN PHẨM BÁN CHẠY -->
			<div class="row title">
				<span>Thông tin chi tiết</span>
				<span><a href=""></a></span>
			</div>

<?php 
// Lấy danh sách dữ liệu từ CSDL
$sql = 'select * from cong_viec where job_id="'.$job_id.'"';
$Listcong_viec = executeResult($sql);


foreach ($Listcong_viec as $item){
	echo '
	<img style="width:400px" style="height:300px" src='.$item['job_img'].'>
	<hr>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>	
				<th>Danh Mục</th>
				<th>Nội Dung</th>
				
			</tr>
		</thead>
		<tbody>
		<tr>
			<td width=300px>Tên Doanh Nghiệp</td>
			<td>'.$item['job_own'].'</td>
		</tr>
		<tr>
			<td>Tên Việc Làm</td>
			<td>'.$item['job_name'].'</td>
		</tr>
		<tr>
			<td>Số lượng tuyển</td>
			<td>'.$item['job_quantity'].'</td>
		</tr>
		<tr>
			<td>Mức Lương</td>
			<td>'.$item['job_salary'].'tr VNĐ</td>
		</tr>
		<tr>
			<td>Yêu Cầu Ngôn Ngữ</td>
			<td>'.$item['job_language'].'</td>
		</tr>
		<tr>
			<td>Yêu Cầu Kinh Nghiệm</td>
			<td>'.$item['job_experiment'].'</td>
		</tr>
		<tr>
			<td>Môi Trường Làm Việc</td>
			<td>'.$item['job_environment'].'</td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td>'.$item['job_address'].'</td>
		</tr>
		<tr>
			<td>Phúc lợi</td>
			<td>'.$item['job_profit'].'</td>
		</tr>
		<tr>
			<td>SĐT Liên Hệ</td>
			<td>'.$item['job_hotline'].'</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>'.$item['job_email'].'</td>
		</tr>
		<tr>
			<td>Ngày bắt dầu tuyển</td>
			<td>'.$item['job_start'].'</td>
		</tr>
		<tr>
			<td>Ngày kết thúc tuyển</td>
			<td>'.$item['job_end'].'</td>
		</tr>
		</tbody>
		</table>';
}
?>		
			
			
	
			
			
			
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