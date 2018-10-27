<?php
//存购物车
	$username = $_POST["username"];//用户名
	$phonename = $_POST["phonename"];//手机名
	
	
	$db = mysqli_connect("localhost","root","","nubia");
	mysqli_query($db,"set names utf-8");
	mysqli_select_db($db,'usercar');
	//查找用户名下有没有这款手机
	$setsql = "select * from usercar where username= '$username' and phonename='$phonename' ";
	$resultset = mysqli_query($db,$setsql);
	$arrset = mysqli_fetch_array($resultset);
	
	if($arrset){//如果手机存在,则把手机的数量加一
		$newnumber = $arrset[3]+1;
		$upgoods = "update usercar set number='$newnumber'  where username='$username' and phonename='$phonename' ";
		$row = mysqli_query($db,$upgoods);
		echo "$newnumber";
	}else{//手机不存在，保存手机
		$setgoods = "insert into usercar (username,phonename,number) values ('$username','$phonename','1')";
		$rowto = mysqli_query($db,$setgoods);
		echo "0";
	}
?>