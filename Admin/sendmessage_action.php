<?php 
session_start();
require("connection.php"); 
  
$msg=$_REQUEST["msg"];

 
$aname=$_SESSION['email']; 
$aid=$_SESSION['id'];

//echo $aid."<br>".$aname."<br>".$msg;die();






$res=$con->query("update tb_user_message_sent set  `A_MESSAGE`='$ename',`A_ID`='$eid' where `ID`='$id'"); 
$count=mysqli_affected_rows($con); 
 
if($count>0){
    
    
    echo"<script>alert('SEND SUCCESSFULLY');
    window.location.href='view_enquiry.php';
    </script>";
    
}
else{
    echo"<script>alert('FAIL TO SEND');
    window.location.href='view_enquiry.php';
    </script>";
}

?>
