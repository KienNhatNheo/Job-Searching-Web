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
		$job_img = $category['job_img'];
		$job_class = $category['job_class'];	
	}
}

if (!empty($_POST)) {
	if (isset($_POST["job_own"])) {
		$job_own= $_POST['job_own'];
	}
	if (isset($_POST["job_name"])) {
		$job_name= $_POST['job_name'];
	}
	if (isset($_POST["job_quantity"])) {
		$job_quantity= $_POST['job_quantity'];
	}
	if (isset($_POST["job_salary"])) {
		$job_salary= $_POST['job_salary'];
	}
	if (isset($_POST["job_language"])) {
		$job_language= $_POST['job_language'];
	}
	if (isset($_POST["job_experiment"])) {
		$job_experiment= $_POST['job_experiment'];
	}
	if (isset($_POST["job_environment"])) {
		$job_environment= $_POST['job_environment'];
	}
	if (isset($_POST["job_profit"])) {
		$job_profit= $_POST['job_profit'];
	}
	if (isset($_POST["job_address"])) {
		$job_address= $_POST['job_address'];
	}
	if (isset($_POST["job_hotline"])) {
		$job_hotline= $_POST['job_hotline'];
	}
	if (isset($_POST["job_email"])) {
		$job_email= $_POST['job_email'];
	}
	if (isset($_POST["job_start"])) {
		$job_start= $_POST['job_start'];
	}
	if (isset($_POST["job_end"])) {
		$job_end= $_POST['job_end'];
	}
	if (isset($_POST["job_img"])) {
		$job_img= $_POST['job_img'];
	}
	if (isset($_POST["job_class"])) {
		$job_class= $_POST['job_class'];
	}
	//Luu vao database
	if($job_id == ""){
		$sql = 'insert into cong_viec(job_own,job_name,job_quantity,job_salary,job_language,job_experiment,job_environment,job_profit,job_address,job_hotline,job_email,job_start,job_end,job_img,job_class) values ("'.$job_own.'","'.$job_name.'",'.$job_quantity.',"'.$job_salary.'","'.$job_language.'","'.$job_experiment.'","'.$job_environment.'","'.$job_profit.'","'.$job_address.'","'.$job_hotline.'","'.$job_email.'","'.$job_start.'","'.$job_end.'","'.$job_img.'","'.$job_class.'")';		
	} else {
		$sql= 'update cong_viec set job_own="'.$job_own.'" ,job_name="'.$job_name.'",job_quantity="'.$job_quantity.'",job_salary="'.$job_salary.'",job_language="'.$job_language.'",job_experiment="'.$job_experiment.'",job_environment="'.$job_environment.'",job_profit="'.$job_profit.'",job_address="'.$job_address.'",job_email="'.$job_email.'",job_start="'.$job_start.'",job_end="'.$job_end.'",job_img="'.$job_img.'", job_class="'.$job_class.'" where job_id='.$job_id;		
	}	
	execute($sql);
	
	//Tr??? l???i trang qu???n l??
	header('Location: index.php');
}







?>

<!DOCTYPE html>
<html>
<head>
	<title>Web T??m Vi???c L??m</title>
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
	    <a class="nav-link" href="index.php">Qu???n L?? Danh M???c</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../congviec/">T??m Ki???m</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="apply_job.php">???ng tuy???n</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="account_manager.php">Qu???n L?? T??i Kho???n</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Th??m/S???a C??ng Vi???c</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					<?php
						// Turn off all error reporting
						error_reporting(0);
					?>
					<img style="width:200px"src="<?=$job_img?>"><br>
					  <label for="job_own">T??n doanh nghi???p:</label>
					  <input required="true" type="text" class="form-control" id="job_own" name="job_own" value="<?=$job_own?>">
					</div>
					<div class="form-group">
					  <label for="job_name">T??n c??ng vi???c:</label>
					  <input required="true" type="text" class="form-control" id="job_name" name="job_name" value="<?=$job_name?>">
					</div>
					<div class="form-group">
					  <label for="job_quantity">S??? l?????ng tuy???n d???ng:</label>
					  <input type="text" class="form-control" id="job_quantity" name="job_quantity" value="<?=$job_quantity?>">
					</div>
					<div class="form-group">
					  <label for="job_salary">M???c l????ng:</label>
					  <input required="true" type="text" class="form-control" id="job_salary" name="job_salary" value="<?=$job_salary?>">
					</div>
					<div class="form-group">
					  <label for="job_language">Y??u c???u v??? ng??n ng???:</label>
					  <input required="true" type="text" class="form-control" id="job_language" name="job_language" value="<?=$job_language?>">
					</div>
					<div class="form-group">
					<label for="job_experiment">Y??u c???u v??? kinh nghi???m:</label>
					  <input required="true" type="text" class="form-control" id="job_experiment" name="job_experiment" value="<?=$job_experiment?>"
					</div>
					<div class="form-group">
					<label for="job_environment">M??i tr?????ng l??m vi???c:</label>
					  <input required="true" type="text" class="form-control" id="job_environment" name="job_environment" value="<?=$job_environment?>">
					</div> 
					<div class="form-group">
					<label for="job_profit">Ph??c l???i:</label>
					  <input required="true" type="text" class="form-control" id="job_profit" name="job_profit" value="<?=$job_profit?>">
					</div>
					<div class="form-group">
					<label for="job_address">?????a ch???:</label>
					  <input required="true" type="text" class="form-control" id="job_address" name="job_address" value="<?=$job_address?>">
					</div>
					<div class="form-group">
					<label for="job_hotline">S??? ??i???n tho???i:</label>
					  <input required="true" type="text" class="form-control" id="job_hotline" name="job_hotline" value="<?=$job_hotline?>">
					</div>
					<div class="form-group">
					<label for="job_email">?????a ch??? Email:</label>
					  <input required="true" type="text" class="form-control" id="job_email" name="job_email" value="<?=$job_email?>">
					</div>
					<div class="form-group">
					<label for="job_start">Th???i h???n b???t ?????u tuy???n:</label>
					  <input required="true" type="text" class="form-control" id="job_start" name="job_start" value="<?=$job_start?>">
					</div>
					<div class="form-group">
					<label for="job_end">Th???i h???n k???t th??c tuy???n:</label>
					  <input style="margin-bottom:40px" required="true" type="text" class="form-control" id="job_end" name="job_end" value="<?=$job_end?>">
					</div>
					<div class="form-group">
					<label for="job_img">Link ???nh:</label>
					  <input style="margin-bottom:40px" required="true" type="text" class="form-control" id="job_img" name="job_img" value="<?=$job_img?>">
					</div>
					<label for="job_class">Ph??n lo???i:</label>
					  <input style="margin-bottom:40px" required="true" type="text" class="form-control" id="job_class" name="job_class" value="<?=$job_class?>">
					</div>
					<button style="margin-bottom:70px" class="btn btn-success">C???p Nh???t</button>
				</form>	
			</div>
		</div>
	</div>
</body>
</html>




