<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>编辑表单</title>
	<link rel="stylesheet" type="text/css" href="css/news.css">
</head>
<body>
<?php
require_once 'functions.php';
if(!empty($_GET['newsid'])){
    connectDb();
    $newsid = intval($_GET['newsid']);
    $result = mysql_query("SELECT * FROM news WHERE newsid = $newsid");
    if(mysql_errno()){
    	die('can not connect db');
    }

    $arr = mysql_fetch_assoc($result);
    //print_r($arr);

}else{
	die('id not define');
}
?>
<h3>修改新闻</h3>
<form action="edituser server.php" method="get">
	<div><span>newstype</span>
	     <input type="text" name="newstype" value="<?php echo $arr['newstype'];?>">
	</div>
	<div><span>newsid</span>
	     <input type="text" name="newsid"  value="<?php echo $arr['newsid'];?>">
	</div>
	<div><span>newstitle</span>
	     <input type="text" name="newstitle" value="<?php echo $arr['newstitle'];?>">
	</div>
	<div><span>newsimg</span>
	     <input type="text" name="newsimg" value="<?php echo $arr['newsimg'];?>">
	</div>
	<div><span>addtime</span>
	     <input type="text" name="addtime" value="<?php echo $arr['addtime'];?>">
	</div>
	<input type="submit" value="提交修改" id="sub">
</form>
</body>
</html>