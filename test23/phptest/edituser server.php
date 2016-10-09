<?php  
require_once('functions.php');

if(empty($_GET['newstype'])){
	die('newstype is empty');
}
if(empty($_GET['newsid'])){
	die('newsid is empty');
}
if(empty($_GET['newstitle'])){
	die('newstitle is empty');
}
if(empty($_GET['newsimg'])){
	die('newsimg is empty');
}
if(empty($_GET['addtime'])){
	die('addtime is empty');
}

$newstype = intval($_GET['newstype']);
$newsid = intval($_GET['newsid']);
$newstitle = $_GET['newstitle'];
$newsimg = $_GET['newsimg'];
$addtime = $_GET['addtime'];
connectDb();
mysql_query("UPDATE news SET newstype = $newstype ,newstitle = '$newstitle',newsimg = '$newsimg',addtime = '$addtime' WHERE newsid = $newsid");
if(mysql_errno()){
	echo mysql_error();
}else{
	header("Location:mysql.php");
}
mysql_close();






?>