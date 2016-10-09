<?php
if(!isset($_GET['newstype'])){
    die("newstype not define");
}
if(!isset($_GET['newsid'])){
    die("newsid not define");
}
if(!isset($_GET['newstitle'])){
    die("newstitle not define");
}
if(!isset($_GET['newsimg'])){
    die("newsimg not define");
}	
if(!isset($_GET['addtime'])){
    die("addtime not define");
}

$newstype = $_GET['newstype'];
if(empty($newstype)){
    die('newstype is empty');
}
$newsid = $_GET['newsid'];
$newstitle = $_GET['newstitle'];
if(empty($newstitle)){
	die('newstitle is empty');
}
$newsimg = $_GET['newsimg'];
    //if(empty($ewsimg)){
    //die('newsimg is empty');
//}
$addtime = $_GET['addtime'];
    if(empty($addtime)){
	die('addtime is empty');
}
require_once 'functions.php';

connectDb();
mysql_query("INSERT INTO news(newstype,newsid,newstitle,newsimg,addtime) VALUES('$newstype','$newsid','$newstitle','$newsimg','$addtime')");
if(mysql_errno()){
	echo mysql_error();
}else{
    header("Location:mysql.php");
}
mysql_close();
?>