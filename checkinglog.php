<?php
session_start(); 
if(empty($_SESSION["id"])){
	echo '<script> 
    alert(" YOU ARE NOT LOGIN ,PLEASE LOGIN FIRST");  
     window.location.href="index.php";
   </script>';

} 
else{
    header("location:servicerequest_register.php");
}
?> 