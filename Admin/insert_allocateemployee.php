<?php
 session_start();
require("connection.php"); 
$id=$_REQUEST["id"];
$eid=$_REQUEST["eid"];  
  
//echo $id,$eid;die();
$res=$con->query("update tb_servicerequest set  `EID`='$eid'  where `ID`='$id'");  
$count=mysqli_affected_rows($con); 
if($count>0){
   
    echo"<script>alert(' DETAILS ADDED SUCCESSFULLY');
    window.location.href='view_enquiry.php';
    </script>";
    
}
else{
    echo"<script>alert('FAIL TO ADD   DETAILS');
    window.location.href='allocateemployee.php';
    </script>";
}
?>