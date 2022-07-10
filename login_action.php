 
       
<?php 
session_start();
require("connection.php");
$name=$_REQUEST["username"];
$pass=$_REQUEST["password"]; 
$res=$con->query("select * from tb_user_register where `USERNAME`='$name' AND BINARY  `PASSWORD`='$pass'");
$count=$res->num_rows;  
if($count>0)
{ 
  $row=$res->fetch_assoc(); 
  $_SESSION["name"]=$name;
  $_SESSION["id"]=$row['ID']; 
  $_SESSION["pass"]=$pass; 
  $_SESSION["email"]=$row['EMAIL'];
  //echo $_SESSION["id"];die();
    echo '<script> 
    alert(" Login successfully");  
     window.location.href="dashboard.php";
   </script>';   
}
else{
    echo '<script>
    alert("wrong entry"); 
    window.location.href="index.php";
   </script>';     
}
?>
 
