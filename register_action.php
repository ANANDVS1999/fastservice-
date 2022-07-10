<?php
 
require("connection.php");
$name=$_REQUEST["username"]; 
$password=$_REQUEST["password"];
$email=$_REQUEST["email"];
$phone=$_REQUEST["phone"];


$ress=$con->query("select * from tb_user_register where `EMAIL`='$email'"); //checking is email already available in db or not
$count=mysqli_affected_rows($con); 
 
if($count>0){
    echo"<script>alert('SORRY!!--EMAIL ALREADY AVAILABLE ');
    window.location.href='dashboard.php';
    </script>";
}



else{
$res=$con->query("insert into tb_user_register (`USERNAME`, `PASSWORD`,`EMAIL`,`PHONE`) 
                  values('$name', '$password' ,'$email','$phone')"); 
$count=mysqli_affected_rows($con); 
 
if($count>0){
    
    
    echo"<script>alert('REGISTER SUCCESSFULLY');
    window.location.href='dashboard.php';
    </script>";
    
}
else{
    echo"<script>alert('FAIL TO REGISTER');
    window.location.href='index.php';
    </script>";
}
}
?>
