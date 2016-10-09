<?php 
require_once 'config.php';
function connectDb(){
	$con = mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW);
	if(!$con){
		die('Can not connect db');
	}
	mysql_query("set name utf8");
	mysql_select_db("phplesson");
	return $con;
}

?>