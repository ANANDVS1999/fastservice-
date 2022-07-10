<?php
 session_start();
require("connection.php");
$username=$_REQUEST["username"]; 
$age=$_REQUEST["age"];
$photo=$_FILES["photo"]["name"];
$resume=$_FILES["resume"]["name"];
$phone=$_REQUEST["phone"];
$address=$_REQUEST["address"];
$pro=$_REQUEST["professions"];
$i=$_SESSION["id"];  


$res=$con->query("insert into tb_newjobusers (`NAME`, `PHONE`,`PHOTO`,`RESUME`,`ADDRESS`,`AGE`,`PROFESSION`,`SID`) 
                  values('$username', '$phone' ,'$photo','$resume','$address','$age','$pro','$i')"); 
$count=mysqli_affected_rows($con); 


if($count>0){
    
    move_uploaded_file($_FILES["photo"]["tmp_name"],"Admin/photo_nju/".$photo);
    move_uploaded_file($_FILES["resume"]["tmp_name"],"Admin/resume_nju/".$resume);
    echo"<script>alert('REGISTER SUCCESSFULLY'); 
    window.location.href='dashboard.php';
    </script>";
    
}
else{
    echo"<script>alert('FAIL TO REGISTER');
    window.location.href='dashboard.php';
    </script>";
}
?>