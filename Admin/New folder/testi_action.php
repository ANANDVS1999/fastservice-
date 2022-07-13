<?php

require('connection.php');

$pic=$_FILES['pic']['name'];

$client_name=mysqli_real_escape_string($con,$_POST['client_name']);
$contents=mysqli_real_escape_string($con,$_POST['contents']);

//$temp = explode(".", $_FILES["pic"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
	
	$res=$con->query("insert into `tb_testimonial`(`client_name`,`content`) values('$client_name','$contents')");

$count=mysqli_affected_rows($con);


if($count>0){


						

header('location:view_testi.php?result=success');



}

else{

header('location:add_testi.php?result=failed');


}
	




?>