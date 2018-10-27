<?php

	$uname = $_POST["uname"];
	
	$password = $_POST["password"];
	
	$db = mysqli_connect("localhost","root","","nubia");

	mysqli_select_db($db,'enroll');

	mysqli_query($db,"set names utf-8");
	
	$selSql = "select * from enroll where uname = '$uname'";
	
	$result = mysqli_query($db,$selSql);
	
	$arr = mysqli_fetch_array($result);//查询返回结果集合，转成数组
	if($uname ==""){
		echo "<script>alert('用户名不能为空');
					location.href = 'enroll.html';
				</script>";
	}else{
		if($arr){
			echo "<script>alert('用户名已存在');
					location.href = 'enroll.html';
				</script>";
		}else{
			//插入sql语句
			if($password == ""){
				echo "<script>alert('密码不能为空');
						location.href = 'enroll.html';
					</script>";
			}else{
				$sql = "insert into enroll (uname,passwords) values ('$uname','$password')";
				//执行sql语句
				$row = mysqli_query($db,$sql);
				if($row){
					//注册成功后跳转到显示所有信息的页面
					echo "<script>alert('注册成功');
						location.href = 'land.html';
					</script>";
				}else{
					echo "<script>alert('注册失败');
						location.href = 'enroll.html';
					</script>";
				}
			}
		}
	}
?>