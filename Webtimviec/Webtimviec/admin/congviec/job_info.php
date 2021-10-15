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
	<title>Web Tìm Việc Làm</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link" href="../category/index.php">Quản Lý Danh Mục</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../congviec/timkiem.php">Tìm Kiếm</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thông Tin Chi Tiết Công Việc</h2>
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover">
		<thead>
			<tr>	
				<th>Danh Mục</th>
				<th>Nội Dung</th>
				
			</tr>
		</thead>
		<tbody>
<?php 
// Lấy danh sách dữ liệu từ CSDL
$sql = 'select * from cong_viec where job_id="'.$job_id.'"';
$Listcong_viec = executeResult($sql);


foreach ($Listcong_viec as $item){
	echo '
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
			<td>'.$item['job_salary'].'VNĐ</td>
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
		</tr>';
}
?>		
		</tbody>
		</table>
			<a href="../category/"><button class="btn btn-success">Quay lại</button></a>
			</div>
		</div>
	</div>
</body>
</html>




