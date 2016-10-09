<?php  
header("Content-type:application; charset=utf-8");
require_once 'functions.php';
if(!empty($_GET['types'])){
    connectDb();
    $types= intval($_GET['types']);
    if($types == 1){
    	$result = mysql_query("SELECT*FROM news WHERE newsTYPE = 1");
    }else if($types ==2){
    	$result = mysql_query("SELECT*FROM news WHERE newsTYPE = 2");
    }else if($types == 3){
    	$result = mysql_query("SELECT*FROM news WHERE newsTYPE = 3");
    }else if($types == 4){
    	$result = mysql_query("SELECT*FROM news WHERE newsTYPE = 4");
    }
}else{
	die('types not define');
}
$arr = array();
while($row = mysql_fetch_array($result)){
	//echo $row['newstitle']."".$row['newsimg']."".$row['addtime'];
	//echo "<br>";
	array_push($arr,array("newstitle"=>$row['newstitle'],"newsimg"=>$row['newsimg'],"addtime"=>$row['addtime']));
}
$result = array($arr);
echo json_encode($result);

?>
