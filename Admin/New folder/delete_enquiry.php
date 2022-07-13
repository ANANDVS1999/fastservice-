<?php

require( 'connection.php' );

$status = $_REQUEST['status'];

if( $status == 'del3' )
{
$ofceid = $_REQUEST['ofceid'];


	


$res1=$con->query("delete from `tb_enquiry` where `enquiry_id`='$ofceid'");

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


