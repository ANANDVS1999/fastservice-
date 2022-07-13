
<?php  
require("connection.php");
$x=$_REQUEST["id"];   
//echo $x;die();

$r=$con->query("delete from  tb_servicerequest where `ID`='$x' " ); 
$count=mysqli_affected_rows($con);   
if($count>0){   
    echo"<script> 
    alert('!---SUCCESSFULLY DELETED--!');
    window.location.href='view_approve_enquiry.php';
    </script>" ;
}
else{
    echo"<script> 
    alert('FAIL TO DELETE');
    window.location.href='view_approve_enquiry.php';
    </script>" ;
} 
?>