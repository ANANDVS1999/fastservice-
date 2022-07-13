<?php 
include 'connection.php';
$img_id=$_REQUEST['img_id'];
		
		$caption=mysqli_real_escape_string($con,$_POST['caption']);
	
		$gal_date=date('d-m-y');

		if(empty($_FILES['pic']['name']))
		{
			$updatequery= "update `tb_gallery` set `caption`='$caption',`date`='$gal_date' where `img_id`='$img_id'";
			
			$result = mysqli_query($con,$updatequery)or die(mysqli_error());
			if($result)
			{
				header('location:view_gallery.php?result=up_success');
			}
			else
			{
				echo "Update Error...!";
			}
			
		}
		
		else
		{
			$pic=$_FILES['pic']['name'];
			
			$del=$con->query("select * from `tb_gallery` where `img_id`='$img_id'");
			$dels=$del->num_rows;
			if($dels>0)
			{
				$row=$del->fetch_assoc();
				$Path = 'gallery/'.$row['img_file'];
				unlink($Path);
				
					$temp = explode(".", $_FILES["pic"]["name"]);
						$newfilename = round(microtime(true)) . '.' . end($temp);
					$updatequery= "update `tb_gallery` set `img_file`='$newfilename',`caption`='$caption',`date`='$gal_date' where `img_id`='$img_id'";
		
					$result = mysqli_query($con,$updatequery)or die(mysqli_error());
					if($result)
					{
						
						
						move_uploaded_file($_FILES['pic']['tmp_name'],"gallery/".$newfilename);
						header('location:view_gallery.php?result=up_success');
					}
					else
					{
						echo "Update Error...!";
					}
				
				
			}
			
		}
	?>