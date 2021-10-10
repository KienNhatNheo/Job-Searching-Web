<?php
require_once ('../db/dbhelper.php');
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
	    <a class="nav-link active" href="#">Quản Lý Danh Mục</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../congviec/timkiem.php">Tìm Kiếm</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản Lý Danh Mục</h2>
			</div>
			<div class="panel-body">
				<a href="add.php">
					<button class="btn btn-success">Thêm Công Việc Mới</button>
				</a>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên Việc Làm</th>
				<th>Lương</th>
				<th>???</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
<?php 
// Lấy danh sách dữ liệu từ CSDL
$sql = 'select * from cong_viec';
$Listcong_viec = executeResult($sql);

$index=1;
foreach ($Listcong_viec as $item){
	echo '<tr>
			<td width=50px>'.($index++).'</td>
			<td>'.$item['job_name'].'</td>
			<td>'.$item['job_salary'].'</td>
			<td width=140px>
				<a href="../congviec/job_info.php"><button class="btn btn-warning">Xem chi tiết</button></a>
			</td>
			<td width=50px>
				<a href="add.php?job_id='.$item['job_id'].'"><button class="btn btn-warning">Sửa</button></a>
			</td>';
}
?>		
		
</tbody>';
</table>

		
			</div>
		</div>
	</div>
</body>
</html>




