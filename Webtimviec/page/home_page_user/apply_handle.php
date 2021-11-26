<?php
require_once ('../db/dbhelper.php');
session_start();
if(isset($_GET['id'])){
	$id = $_GET['id'];
} 
$date = date('d/m/Y');
$sql ='select * from tai_khoan where username = "'.$_SESSION['username'].'"';
$Listcong_viec = executeSingleResult($sql);
if(!empty($Listcong_viec)){
	$sql1 = 'insert into apply_job(job_user,job_apply,job_time) values ("'.$Listcong_viec['user_id'].'","'.$id.'","'.$date.'")';
	execute($sql1);
	
}
header('Location:javascript: history.go(-1)')

?>
