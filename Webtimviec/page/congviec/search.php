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
	    <a class="nav-link" href="../category/">Quản Lý Danh Mục</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="../congviec/">Tìm Kiếm</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../category/apply_job.php">Ứng tuyển</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Tìm Kiếm Việc Làm</h2>
			</div>
			<div class="panel-body">
				<form action="result.php" method="POST">
					<label for="search_job_name">Nhập Tên Việc</label>
					<input type="text" id = "search_job_name" name="search_job_name" >
					<label for="search_job_salary">Nhập Mức Lương</label>
					<input type="text" id = "search_job_salary" name="search_job_salary" ><br>
					<input type="submit" value="Tìm">
				</form>
			</div>
		</div>
	</div>
</body>
</html>




