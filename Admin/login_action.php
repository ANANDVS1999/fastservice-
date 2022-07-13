	<?php
	session_start();

	require("connection.php");
	$email=$_REQUEST['Name'];
	$password=$_REQUEST['Password'];
	
	$select=$con->query("select * from tb_admin where `username`='$email' AND BINARY `password`='$password'"); 
	//echo $email."<br>".$password;
	//die();
	$select1=$select->num_rows;
	if($select1>0)
	{
		$row=$select->fetch_assoc();
		$email=$row['username'];
		$_SESSION['email']=$email;
		$id=$row['id'];
		$_SESSION['id']=$id;
		header("location:dashboard.php");
	}
	else
	{
		echo"<script>alert('Check Your Username and Password');location.href='index.php';</script>";
	}
?>