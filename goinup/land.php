<?php
	$uname = $_POST["uname"];
	
	$passwords = $_POST["passwords"];
	
	$db = mysqli_connect("localhost","root","","nubia");
	
	mysqli_select_db($db,'enroll');
	
	mysqli_query($db,"set names utf-8");
	
	//判断用户名是否存在
	$selSql = "select * from enroll where uname = '$uname'";
	
	$result = mysqli_query($db,$selSql);
	
	$arr = mysqli_fetch_array($result);
	
	//判断用户名存在时密码是否正确
	$sel = "select * from enroll where uname = '$uname' and passwords = '$passwords' ";
	
	$resultpass = mysqli_query($db,$sel);
	
	$row = mysqli_fetch_array($resultpass);
	
	if($arr){//先判断用户名是否存在，
		if($passwords == ""){
			echo "1";
		}else{
			if($row){//用户名存在密码是否正确
//				setcookie("username",$uname);
				echo $uname;
			}else{
				echo "1";
			}
		}
	}else{
		echo "0";
	}

?>