<?php


require( 'connection.php' );

$status = $_REQUEST['status'];

if( $status == 'del3' )
{
$ofceid = $_REQUEST['ofceid'];

$result=$con->query("select * from tb_gallery where img_id='$ofceid'");
$count=$result->num_rows;


	$row=$result->fetch_assoc();
	
	$dir="gallery/".$row['img_file'];
	unlink($dir);
	


$res1=$con->query("delete from `tb_gallery` where `img_id`='$ofceid'");

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


