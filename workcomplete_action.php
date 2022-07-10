<?php
require ("connection.php");
session_start();

$a=$_SESSION["id"]; 
$b=$_REQUEST["i"];

 
 //echo $b;die();

$res=$con->query ("update tb_servicerequest set `U_STATUS`='1'   where `ID`='$b' AND `SID`='$a'");
$count=mysqli_affected_rows($con); 
if($count>0){ 
    echo"<script>
  alert('send->completed successfully');
  window.location.href='dashboard.php' ;
  </script>";
}
else{ 
    echo"<script>
  alert('fail  ');
  window.location.href='dashboard.php' ;
  </script>";
}
 
?>