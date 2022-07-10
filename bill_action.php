<?php
session_Start();
require("connection.php");
$s=$_REQUEST["uid"];

$v=$_SESSION["Eid"]; 

$p=$_REQUEST["name"];
$q=$_REQUEST["quantity"];
$pp=$_REQUEST["price"];
$tp=$_REQUEST["pprice"];
$service=$_REQUEST["service"];
//echo $s."<br>".$v."<br>".$p."<br>".$q."<br>".$pp."<br>".$tp ;
//echo $s,$v;die(); 
//echo $s;die();
 
$res=$con->query("insert into tb_bill (`PNAME`, `PQUANTITY`,`PPRICE`,`TPRICE`,`EID`,`UID`,`SERVICE`) 
                  values('$p', '$q' ,'$pp','$tp','$v','$s','$service')"); 
$count=mysqli_affected_rows($con); 
 
if($count>0){ 
    header("Location:bill.php?id=".$s);
    
}
else{
    echo"<script>alert('FAIL TO UPDATE');
    window.location.href='bill.php';
    </script>";
} 

 
?>