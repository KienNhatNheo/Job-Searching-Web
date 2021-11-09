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
	    <a class="nav-link" href="../congviec/search.php">Tìm Kiếm</a>
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
<?php 
// Lấy danh sách dữ liệu từ CSDL
$sql = 'select * from cong_viec order by job_id asc';
$Listcong_viec = executeResult($sql);

$index=1;
foreach ($Listcong_viec as $item){
	echo '
	
	<div class="col-lg-3">
				<div class="card">
					<img class="card-img-left" src="https://hatgiongdalat.com/asset/upload/image/hat-giong-bap-cai-chiu-nhiet_(1).jpg?v=20190410" alt="Card image">
					<div class="card-body">
						<a href="#">'.$item['job_name'].'</a>
						<p>Ngôn ngữ:'.$item['job_language'].'</p>
						<p>Mức lương:'.$item['job_salary'].'VNĐ</p>
					</div>
				</div>			
	</div>
			
	';
}
?>	

		
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		function deleteCongviec(job_id) {
			var option = confirm('Bạn có chắc chắn muốn xoá danh mục này không?')
			if(!option) {
				return;
			}
			console.log(job_id)
			//ajax - lenh post
			$.post('ajax.php', {
				'job_id': job_id,
				'action': 'delete'
			}, function(data) {
				location.reload();
			})
		}
	</script>
</body>
</html>




