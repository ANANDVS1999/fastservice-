<?php

require('connection.php');

$pic=$_FILES['pic']['name'];

$caption=mysqli_real_escape_string($con,$_POST['caption']);
$gal_date=date('d-m-y');

$temp = explode(".", $_FILES["pic"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);

	
	$res=$con->query("insert into `tb_gallery`(`img_file`,`caption`,`date`) values('$newfilename','$caption','$gal_date')");

$count=mysqli_affected_rows($con);


if($count>0){


						
move_uploaded_file($_FILES['pic']['tmp_name'],"gallery/".$newfilename);
header('location:view_gallery.php?result=success');



}

else{

header('location:add_gallery.php?result=failed');


}
	




?>