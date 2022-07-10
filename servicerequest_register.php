<?php
 session_start();
require("connection.php");
$name=$_REQUEST["name"]; 
$address=$_REQUEST["address"];
$service=$_REQUEST["service"];
$phone=$_REQUEST["phone"];
$i=$_SESSION["id"];  
//echo $i."<br>".$name ."<br>".$address ."<br>". $service."<br>".$phone ;die();


$res=$con->query("insert into tb_servicerequest (`NAME`, `ADDRESS`,`SERVICE_DETAILS`,`PHONE`,`SID`) 
                  values('$name', '$address' ,'$service','$phone','$i')"); 
$count=mysqli_affected_rows($con); 
 
if($count>0){ 
    echo"<script>alert('REQUEST SENT SUCCESSFULLY'); 

    window.location.href='dashboard.php';
    </script>";
    
}
else{
    echo"<script>alert('FAIL TO SENT REQUEST');
    window.location.href='dashboard.php';
    </script>";
}
?>