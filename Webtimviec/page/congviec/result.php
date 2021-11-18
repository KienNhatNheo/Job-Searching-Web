<?php
$search_job_name=$search_job_salary="";
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
	    <a class="nav-link " href="../category/index.php">Quản Lý Danh Mục</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="../congviec/search.php">Tìm Kiếm</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="../category/apply_job.php">Tìm Kiếm</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				 <h2 class="text-center">Kết Quả Tìm Kiếm</h2>
			</div>
			<div class="panel-body">
			<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>STT</th>
				<th>ID</th>
				<th>Tên Việc Làm</th>
				<th>Lương</th>
				<th>Xem chi tiết</th>
			</tr>
		</thead>
		<tbody>
<?php 

	$search_job_name = $_POST['search_job_name'];
	$search_job_salary = $_POST['search_job_salary'];
	$sql = 'select * from cong_viec where job_name ="'.$search_job_name.'" and job_salary="'.$search_job_salary.'"';
	$searching = executeResult($sql);    
	$index=1;
	foreach ($searching as $item){
		echo '<tr>
				<td width=50px>'.($index++).'</td>
				<td width=50px>'.$item['job_id'].'</td>
				<td width=600px>'.$item['job_name'].'</td>
				<td>'.$item['job_salary'].'</td>
				<td width=140px>
					<a href="../congviec/result_info.php?job_id='.$item['job_id'].'"><button class="btn btn-success">Xem chi tiết</button></a>
				</td>
			</tr>	
		';
	}

?>
	</tbody>
	</table>

		
			</div>
		</div>
	</div>
</body>
</html>
