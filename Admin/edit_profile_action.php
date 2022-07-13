<?php 
session_start();
$id=$_SESSION['id'];
include 'connection.php';
$img_id=$_REQUEST['img_id'];
		
		$username=$_POST['username'];
	
		$password=$_POST['password'];

	
		$updatequery= "update tb_admin set username='$username',password='$password' where admin_id='$id'";
		
		$result = mysqli_query($con,$updatequery)or die(mysqli_error());
		if($result){
		header('location:edit_profile.php?result=up_success');
		}else{
			echo "Update Error...!";
		}
		
		
		
		
	?>