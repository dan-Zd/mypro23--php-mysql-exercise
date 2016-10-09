<?php 
require_once 'functions.php'; 
if(empty($_GET['newsid'])){
	die('newsid not define');
}
connectDb();
$newsid = intval($_GET['newsid']);
mysql_query("DELETE FROM news WHERE newsid = $newsid");
if(mysql_errno()){
	die("Fail to delete news with newsid $newsid");
}else{
	header("Location:mysql.php");
}
?>
