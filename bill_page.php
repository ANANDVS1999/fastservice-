 
<?php

require('connection.php'); 
session_Start();
$s=$_REQUEST["id"];
$v=$_SESSION["Eid"];
 //echo $s,$v; die();
    $res=$con->query("select SUM(TPRICE) from tb_bill where `EID`='$v' AND `UID`='$s'");
    $count=$res->num_rows;
    $i=1;
    if($count>0)
    { 
    while($row=$res->fetch_assoc())
    { 
    $A=$row['SUM(TPRICE)'];
      
   //echo $A;die();


    $ress=$con->query ("update tb_servicerequest set `PAYMENT_AMOUNT`='$A'   where `ID`='$s' AND `EID`='$v'");
    $count=mysqli_affected_rows($con); 
    if($count>0){  
      header("Location:bill.php?id=".$s);
    }
    else{ 
        echo"<script>
      alert('fail toSEND'); 
      window.location.href='bill.php';
      </script>";
    }



    } 
    }
	










?>


 