<?php
session_start();
unset($_SESSION["id"]); 
echo '<script> 
alert("you are loged out successfully");
 window.location.href = "index.php";
</script>';   
?>