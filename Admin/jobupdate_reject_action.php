<?php
require ("connection.php");
$x=$_REQUEST["id"]; 
$res=$con->query ("update tb_newjobusers set `status`='2' where `ID`='$x'");
$count=mysqli_affected_rows($con); 
if($count>0){ 
  echo"<script>
  alert('job status-->REJECTED successfully');
  window.location.href='view_jobusers.php';
  </script>";
}
else{ 
    echo"<script>
  alert('fail to change job status');
  window.location.href='view_jobusers.php';
  </script>";
}
 
?>