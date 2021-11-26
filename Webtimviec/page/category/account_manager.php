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
	  <li class="nav-item">
	    <a class="nav-link" href="apply_job.php">Ứng tuyển</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản Lý Tài </h2>
			</div>
			<div class="panel-body">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>STT</th>
				<th>ID</th>
				<th>Tên Người Dùng</th>
				<th>Tên Tài Khoản</th>
				<th>Giới Tính</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
<?php 
// Lấy danh sách dữ liệu từ CSDL
$sql = 'select * from tai_khoan order by user_id asc';
$Listcong_viec = executeResult($sql);

$index=1;
foreach ($Listcong_viec as $item){
	echo '<tr>
			<td width=50px>'.($index++).'</td>
			<td width=50px>'.$item['user_id'].'</td>
			<td>'.$item['user_fullname'].'</td>
			<td>'.$item['username'].'</td>
			<td>'.$item['user_gender'].'</td>
			<td width=50px>
				<button class="btn btn-danger" onclick = "deleteAccount('.$item['user_id'].')">Xóa</button>
			</td>';
}
?>		
		
</tbody>
</table>

		
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		function deleteAccount(user_id) {
			var option = confirm('Bạn có chắc chắn muốn xoá tài khoản này không?')
			if(!option) {
				return;
			}
			console.log(user_id)
			//ajax - lenh post
			$.post('ajax1.php', {
				'user_id': user_id,
				'action': 'delete'
			}, function(data) {
				location.reload();
			})
		}
	</script>
</body>
</html>




