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
	    <a class="nav-link" href="index.php">Quản Lý Danh Mục</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../congviec/search.php">Tìm Kiếm</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link  active" href="apply_job.php">Ứng tuyển</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="account_manager.php.php">Quản Lý Tài Khoản</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Ứng tuyển</h2>
			</div>
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<br>
		<thead>
			<tr style="background-color: gray;">
				<th style="color:greenyellow;">Tên người dùng</th>
				<th style="color:greenyellow;">Công việc</th>
				<th style="color:greenyellow;">Công ty ứng tuyển</th>
				<th style="color:greenyellow;">Địa chỉ</th>
				<th style="color:greenyellow;">Thời gian</th>
			</tr>
		</thead>
			<?php
			error_reporting(0);
			$sql = 'select * from apply_job';
$Listcong_viec = executeResult($sql);

$index=1;
foreach ($Listcong_viec as $item){
	$sql1 = 'select * from tai_khoan where user_id ="'.$item['job_user'].'"';
	$nameofuser = executeSingleResult($sql1);
	$sql2 = 'select * from cong_viec where job_id = "'.$item['job_apply'].'"';
	$nameofjob = executeSingleResult($sql2);
	
	echo '
	
		<tbody>
		<tr>
		<td>'.$nameofuser['user_fullname'].'</td>	
		<td>'.$nameofjob['job_name'].'</td>
		<td>'.$nameofjob['job_own'].'</td>
		<td>'.$nameofjob['job_address'].'</td>
		<td>'.$item['job_time'].'</td>
		
		</tr>
</tbody>
';
}

?>	
	

		
			</div>
		</div>
	</div>
</body>
</html>




