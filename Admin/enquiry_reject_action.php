<?php
require ("connection.php");
$x=$_REQUEST["id"]; 
$res=$con->query ("update tb_servicerequest set `status`='2' where `ID`='$x'");
$count=mysqli_affected_rows($con); 
if($count>0){ 
  echo"<script>
  alert('Service Request status-->REJECTED successfully');
  window.location.href='view_enquiry.php';
  </script>";
}
else{ 
    echo"<script>
  alert('fail to change Service Request status');
  window.location.href='view_enquiry.php';
  </script>";
}
 
?>