<?php 
include 'connection.php';
$img_id=$_REQUEST['img_id'];
		
		$caption=mysqli_real_escape_string($con,$_POST['content']);
		$client_name=$_POST['client_name'];

	
		$gal_date=date('d-m-y');

	
			$updatequery= "update `tb_testimonial` set `content`='$caption',`client_name`='$client_name' where `testimonial_id`='$img_id'";
			
			$result = mysqli_query($con,$updatequery)or die(mysqli_error());

			if($result)
			{
				header('location:view_testi.php?result=up_success');
			}
			else
			{
				echo "Update Error...!";
			}
			
		
	?>