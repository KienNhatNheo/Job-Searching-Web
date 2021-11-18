<?php
require_once ('../db/dbhelper.php');
session_start();
if(isset($_GET['id'])){
	$id = $_GET['id'];
} 


echo $_SESSION['username'];
	$sql ='select * from tai_khoan where username = "'.$_SESSION['username'].'"';
	$Listcong_viec = executeSingleResult($sql);
	if(!empty($Listcong_viec)){
		$sql1 = 'insert into apply_job(job_user,job_apply) values ("'.$Listcong_viec['user_id'].'","'.$id.'")';
		execute($sql1);
	
} else { echo 'rong';}

header('Location:javascript: history.go(-1)')

?>
