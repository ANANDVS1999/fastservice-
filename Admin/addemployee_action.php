<?php
session_Start();

require("connection.php");
$comb="abcdefghijklmnopqrstuvwxyz0123456789";
$shfl=str_shuffle($comb); 
$p=substr($shfl,0,8);
$a=$p;

$name=$_REQUEST["ename"];  
$photo=$_FILES["ephoto"]["name"]; 
$phone=$_REQUEST["ephone"];   
$profession=$_REQUEST["eprofession"]; 
//echo $name."<br>".$photo."<br>".$phone."<br>".$a; die();

$res=$con->query("insert into tb_addemployee (`E_NAME`, `E_PHOTO`,`E_PHONE`,`E_PASSWORD`,`E_PROFESSION`) 
                  values('$name','$photo','$phone','$a','$profession')"); 
$count=mysqli_affected_rows($con); 
 
if($count>0){
    
    move_uploaded_file($_FILES["ephoto"]["tmp_name"],"ephoto/".$photo); 

    echo"<script>alert('REGISTER SUCCESSFULLY'); 

    window.location.href='addemployee.php';
    </script>";
    
}
else{
    echo"<script>alert('FAIL TO REGISTER');
    window.location.href='index.php';
    </script>";
}


?>