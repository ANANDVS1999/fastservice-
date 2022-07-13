<?php

require('connection.php');

$pic=$_FILES['pic']['name'];
$temp = explode(".", $_FILES["pic"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);

$res1=$con->query("select * from `tb_slider`");

$count1=$res1->num_rows;;

if($count1>0)
{
        $row1=$res1->fetch_assoc();
        $dir=$row1['slider_img'];
        unlink('slider/'.$dir);
        
		$res1=$con->query("update `tb_slider` set `slider_img`='$newfilename'");
		$count2=mysqli_affected_rows($con);

		if($count2>0)
		{
			move_uploaded_file($_FILES['pic']['tmp_name'],"slider/".$newfilename);
			header('location:view_slider.php?result=file_success');
		}
		else
		{
			header('location:add_files.php?result=failed');
		}	
}
else
{
		$res=$con->query("insert into `tb_slider`(`slider_img`) values('$newfilename')");

		$count=mysqli_affected_rows($con);


		if($count>0){
			
		move_uploaded_file($_FILES['pic']['tmp_name'],"slider/".$newfilename);
		header('location:view_slider.php?result=file_success');

		}
		else
		{
		header('location:add_files.php?result=failed');
		}		
	
}



?>