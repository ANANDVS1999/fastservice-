<?php

require('connection.php'); 

session_Start(); 
$s=$_REQUEST["id"];
$v=$_SESSION["Eid"];
//echo $s,$v; die();



$ress=$con->query ("update tb_servicerequest set `PAYMENT`='1'   where `ID`='$s' AND `EID`='$v'");
$count=mysqli_affected_rows($con); 
if($count>0){ echo"<Script>alert('payment successull');</script>";
  header("Location:bill.php?id=".$s);
}
else{ 
    echo"<script>
  alert('fail toSEND'); 
  window.location.href='bill.php';
  </script>";
}
?>