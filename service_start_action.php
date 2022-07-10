<?php
require ("connection.php");
$x=$_REQUEST["id"];  
$d=date("Y/m/d");
//echo $d;die();

//echo $x;die();

$res=$con->query ("update tb_servicerequest set `EJ_START`=1 ,`EJ_START_TIME`='$d'  where `ID`='$x'");
$count=mysqli_affected_rows($con); 
//echo $count;die();
if($count>0){ 
    echo"<script>
  alert('job status-->WORK STARTED successfully');
  window.location.href='Edashboard.php' ;
  </script>";
}
else{ 
    echo"<script>
  alert('fail to ENTER');
  window.location.href='Edashboard.php' ;
  </script>";
}
 
?>