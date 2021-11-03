<?php 
require_once ('../db/dbhelper.php');
session_start();

if (!empty($_POST)) {
	if (isset($_POST["user_fullname"])) {
		$user_fullname= $_POST['user_fullname'];
	}
	if (isset($_POST["user_birthday"])) {
		$user_birthday= $_POST['user_birthday'];
	}
	if (isset($_POST["user_email"])) {
		$user_email= $_POST['user_email'];
	}
	if (isset($_POST["user_gender"])) {
		$user_gender= $_POST['user_gender'];
	}
} else {echo 'post k dc r';}
	//Cập nhật vào CSDL
$user_id = "";
echo $_SESSION['username'];
 $sql = 'select * from tai_khoan where username = "'.$_SESSION['username'].'"';
    $list = executeResult($sql);
    foreach($list as $item){
    $user_id = $item['user_id'];}
echo $user_id;
$sql1 = 'update tai_khoan set user_fullname="'.$user_fullname.'" ,user_birthday="'.$user_birthday.'",user_email="'.$user_email.'",user_gender="'.$user_gender.' where user_id ='.$user_id; 		
execute($sql1);
 $sql4 = 'select * from tai_khoan where username = "'.$_SESSION['username'].'"';
    $list1 = executeResult($sql);
    foreach($list1 as $item){
    	echo $item['user_gender'];
    }

//header('Location:user_info.php')
?>