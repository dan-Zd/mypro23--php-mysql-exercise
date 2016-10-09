<?php 
require_once 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>后台管理页面</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <section id="container">
        <!-- header -->
	    <header class="col-md-12">
	        <div class="row">
		        <div class="header-lef col-md-2 col-sm-4 ">
		            <a href="#"><img src="img/logo.png" alt="logo">SPACE</a>
		        </div>
		        <div class="header-rig col-md-10 col-sm-8">
		        	<div class="rig-l toggle-navigation toggle-left">
		                <a href="#"><img src="img/header1.png"/></a>
		            </div>
		            <div class="rig-r pull-right">
		                <a href="#" class="rig-r-1"><img src="img/header2.png"/></a>
		                <img src="img/header4.png" class="rig-r-2"/>
		                <a href="#" class="rig-r-3">Mike Adams</a>
		                <a href="#" class="rig-r-4"><img src="img/header3.png"/></a>
		            </div>
		        </div> 
	        </div>
	    </header>
        <!-- aside -->
        <aside class="col-md-2 col-sm-4 visible-md-block visible-sm-block visible-lg-block">
          <div class="nano">
              <ul>  
                  <li class="active"><a href="javascript:void(0)" class="a1"><img src="img/li1.png" />推荐</a></li>
                  <li class="sub-menu"><a href="javascript:void(0)" class="a2"><img src="img/li2.png" />百家</a></li>
                  <li class="sub-menu"><a href="javascript:void(0)" class="a3"><img src="img/li3.png" />互联网</a></li>
                  <li class="sub-menu"><a href="javascript:void(0)" class="a4"><img src="img/li4.png" />图片</a></li>
                  <li class="sub-menu"><a href="javascript:void(0)" class="a5"><img src="img/li5.png" />女性</a></li>
                  <li class="sub-menu"><a href="javascript:void(0)" class="a6"><img src="img/li6.png" />教育</a></li>
                  <li class="sub-menu"><a href="javascript:void(0)" class="a7"><img src="img/li7.png" />运动</a></li>
                  <li class="sub-menu"><a href="javascript:void(0)" class="a8"><img src="img/li8.png" />影视</a></li>
                  <li class="sub-menu"><a href="javascript:void(0)" class="a9"><img src="img/li9.png" />更多</a></li>
              </ul>
          </div>
        </aside>
        <section class="main-content col-md-10 col-sm-8">
            <div class="add">
				<a href="addnews.html">添加</a>
			</div>
			<table border="1" cellspacing="0" cellpadding="0" class="col-md-12 col-sm-12" id="table1">
				<tbody>
				    <tr height="35">
				        <th scope="col" class="col-md-1 col">newstype</th>
				        <th scope="col" class="col-md-1 col">newsid</th>
				        <th scope="col" class="col-md-4 col">newstitle</th>
				        <th scope="col" class="col-md-2 col">newsimg</th>
				        <th scope="col" class="col-md-2 col">addtime</th>
				        <th scope="col" class="col-md-1 col">修改</th>
				        <th scope="col" class="col-md-1 col">删除</th>
				    </tr>
					<?php
					//header("Content-type:application/json;charset=utf-8");
					$con = connectDb();
					$result = mysql_query("SELECT*FROM news WHERE newsTYPE = 1");
					$dataCount = mysql_num_rows($result);
					//echo $dataCount;
					for($i=0;$i<$dataCount;$i++){
						$result_arr = mysql_fetch_assoc($result);
						$newstype = $result_arr['newstype'];
						$newsid = $result_arr['newsid'];
						$newstitle = $result_arr['newstitle'];
						$newsimg = $result_arr['newsimg'];
						$addtime = $result_arr['addtime'];

						echo "<tr><td>$newstype</td><td>$newsid</td><td>$newstitle </td><td>$newsimg</td><td>$addtime</td><td><a href='webedituser.php?newsid=$newsid'>修改</a></td><td><a href='deletenews.php?newsid=$newsid'>删除</a></td></tr>";
					}
					?>
				</tbody>
			</table>
			<table border="1" cellspacing="0" cellpadding="0" class="col-md-12 col-sm-12" id="table2">
				<tbody>
				    <tr height="35">
				        <th scope="col" class="col-md-1 col">newstype</th>
				        <th scope="col" class="col-md-1 col">newsid</th>
				        <th scope="col" class="col-md-4 col">newstitle</th>
				        <th scope="col" class="col-md-2 col">newsimg</th>
				        <th scope="col" class="col-md-2 col">addtime</th>
				        <th scope="col" class="col-md-1 col">修改</th>
				         <th scope="col" class="col-md-1 col">删除</th>
				    </tr>
					<?php
					//header("Content-type:application/json;charset=utf-8");
					$con = connectDb();
					$result = mysql_query("SELECT*FROM news WHERE newsTYPE = 2");
					$dataCount = mysql_num_rows($result);
					//echo $dataCount;
					for($i=0;$i<$dataCount;$i++){
						$result_arr = mysql_fetch_assoc($result);
						$newstype = $result_arr['newstype'];
						$newsid = $result_arr['newsid'];
						$newstitle = $result_arr['newstitle'];
						$newsimg = $result_arr['newsimg'];
						$addtime = $result_arr['addtime'];

						echo "<tr><td>$newstype</td><td>$newsid</td><td>$newstitle </td><td>$newsimg</td><td>$addtime</td><td><a href='webedituser.php?newsid=$newsid'>修改</a></td><td><a href='deletenews.php?newsid=$newsid'>删除</a></td></tr>";
					}
					?>
				</tbody>
			</table>
			<table border="1" cellspacing="0" cellpadding="0" class="col-md-12 col-sm-12" id="table3">
				<tbody>
				    <tr height="35">
				        <th scope="col" class="col-md-1 col">newstype</th>
				        <th scope="col" class="col-md-1 col">newsid</th>
				        <th scope="col" class="col-md-4 col">newstitle</th>
				        <th scope="col" class="col-md-2 col">newsimg</th>
				        <th scope="col" class="col-md-2 col">addtime</th>
				        <th scope="col" class="col-md-1 col">修改</th>
				        <th scope="col" class="col-md-1 col">删除</th>
				    </tr>
					<?php
					//header("Content-type:application/json;charset=utf-8");
					$con = connectDb();
					$result = mysql_query("SELECT*FROM news WHERE newsTYPE = 3");
					$dataCount = mysql_num_rows($result);
					//echo $dataCount;
					for($i=0;$i<$dataCount;$i++){
						$result_arr = mysql_fetch_assoc($result);
						$newstype = $result_arr['newstype'];
						$newsid = $result_arr['newsid'];
						$newstitle = $result_arr['newstitle'];
						$newsimg = $result_arr['newsimg'];
						$addtime = $result_arr['addtime'];

						echo "<tr><td>$newstype</td><td>$newsid</td><td>$newstitle </td><td>$newsimg</td><td>$addtime</td><td><a href='webedituser.php?newsid=$newsid'>修改</a></td><td><a href='deletenews.php?newsid=$newsid'>删除</a></td></tr>";
					}
					?>
				</tbody>
			</table>
			<table border="1" cellspacing="0" cellpadding="0" class="col-md-12 col-sm-12" id="table4">
				<tbody>
				    <tr height="35">
				        <th scope="col" class="col-md-1 col">newstype</th>
				        <th scope="col" class="col-md-1 col">newsid</th>
				        <th scope="col" class="col-md-4 col">newstitle</th>
				        <th scope="col" class="col-md-2 col">newsimg</th>
				        <th scope="col" class="col-md-2 col">addtime</th>
				        <th scope="col" class="col-md-1 col">修改</th>
				        <th scope="col" class="col-md-1 col">删除</th>
				    </tr>
					<?php
					//header("Content-type:application/json;charset=utf-8");
					$con = connectDb();
					$result = mysql_query("SELECT*FROM news WHERE newsTYPE = 4");
					$dataCount = mysql_num_rows($result);
					//echo $dataCount;
					for($i=0;$i<$dataCount;$i++){
						$result_arr = mysql_fetch_assoc($result);
						$newstype = $result_arr['newstype'];
						$newsid = $result_arr['newsid'];
						$newstitle = $result_arr['newstitle'];
						$newsimg = $result_arr['newsimg'];
						$addtime = $result_arr['addtime'];

						echo "<tr><td>$newstype</td><td>$newsid</td><td>$newstitle </td><td>$newsimg</td><td>$addtime</td><td><a href='webedituser.php?newsid=$newsid'>修改</a></td><td><a href='deletenews.php?newsid=$newsid'>删除</a></td></tr>";
					}
					?>
				</tbody>
			</table>
			<div id="div">
				抱歉，本页面暂未开通···
			</div>
        </section>
    </section>
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
            $(".a1").click(function(){
                $("#table1").show(500);
                $("#table2").hide();
                $("#table3").hide();
                $("#table4").hide();
                $("#div").hide();
            });
            $(".a2").click(function(){
                $("#table2").show(500);
                $("#table1").hide();
                $("#table3").hide();
                $("#table4").hide();
                $("#div").hide();
            });
            $(".a3").click(function(){
                $("#table3").show(500);
                $("#table2").hide();
                $("#table1").hide();
                $("#table4").hide();
                $("#div").hide();
            });
            $(".a4").click(function(){
                $("#table4").show(500);
                $("#table2").hide();
                $("#table3").hide();
                $("#table1").hide();
                $("#div").hide();
            });
             $(".a5").click(function(){
                $("#table4").hide();
                $("#table2").hide();
                $("#table3").hide();
                $("#table1").hide();
                $("#div").show(1000);
            });
             $(".a6").click(function(){
                $("#table4").hide();
                $("#table2").hide();
                $("#table3").hide();
                $("#table1").hide();
                $("#div").show(1000);
            });
             $(".a7").click(function(){
                $("#table4").hide();
                $("#table2").hide();
                $("#table3").hide();
                $("#table1").hide();
                $("#div").show(1000);
            });
             $(".a8").click(function(){
                $("#table4").hide();
                $("#table2").hide();
                $("#table3").hide();
                $("#table1").hide();
                $("#div").show(1000);
            });
             $(".a9").click(function(){
                $("#table4").hide();
                $("#table2").hide();
                $("#table3").hide();
                $("#table1").hide();
                $("#div").show(1000);
            });
    	})
    </script>
</body>
</html>

