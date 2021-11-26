<?php 
require_once ('../db/dbhelper.php');
session_start();

$njobname = $_POST['njobname'];
$njobquantity = $_POST['njobquantity'];
$njobsalary = $_POST['njobsalary'];
$njoblanguage = $_POST['njoblanguage'];
$njobexp = $_POST['njobexp'];
$njobenv = $_POST['njobenv'];
$njobpro = $_POST['njobpro'];
$njobaddr = $_POST['njobaddr'];
$njobphone = $_POST['njobphone'];
$njobemail = $_POST['njobemail'];
$njobstart = $_POST['njobstart'];
$njobend = $_POST['njobend'];
$njoblink = $_POST['njoblink'];
$njobclass = $_POST['njobclass'];

$sql = 'select fac_name from tai_khoan_cty where fac_username = "'.$_SESSION['username'].'"';
$name = executeSingleResult($sql);

$sql1 = 'insert into cong_viec (job_own,job_name,job_quantity,job_salary,job_language,job_experiment,job_environment,job_profit,job_address,job_hotline,job_email,job_start,job_end,job_img,job_class) values ("'.$name['fac_name'].'","'.$njobname.'","'.$njobquantity.'","'.$njobsalary.'","'.$njoblanguage.'","'.$njobexp.'","'.$njobenv.'","'.$njobpro.'","'.$njobaddr.'","'.$njobphone.'","'.$njobemail.'","'.$njobstart.'","'.$njobend.'","'.$njoblink.'","'.$njobclass.'")';
execute($sql1);

header('Location:javascript:history.go(-1)');


?>