<?php
require ("connection.php");

$x=$_REQUEST["id"];  
 
//echo $x;die();

$res=$con->query ("update tb_servicerequest set `STATUS`='1'   where `ID`='$x'");
$count=mysqli_affected_rows($con); 
if($count>0){ 
    echo"<script>
  alert('job status-->APPROVED successfully');
  window.location.href='Edashboard.php' ;
  </script>";
}
else{ 
    echo"<script>
  alert('fail to change job status');
  window.location.href='Edashboard.php' ;
  </script>";
}
 
?>