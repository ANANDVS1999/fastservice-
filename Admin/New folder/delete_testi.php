<?php

require( 'connection.php' );

$status = $_REQUEST['status'];

if( $status == 'del3' )
{
$ofceid = $_REQUEST['ofceid'];

$result=$con->query("select * from tb_testimonial where testimonial_id='$ofceid'");
$count=$result->num_rows;


	$row=$result->fetch_assoc();
	
	$dir="testimonials/".$row['testi_img'];
	unlink($dir);
	


$res1=$con->query("delete from `tb_testimonial` where `testimonial_id`='$ofceid'");

$count=mysqli_affected_rows($con);

if($count>0)
{
	$data['status'] = 'success';
}

else{
	
$data['status'] = 'fail';
}

echo json_encode( $data );
exit;
}
?> 


