 
       
<?php 
session_start();
require("connection.php");
$name=$_REQUEST["Eusername"];
$pass=$_REQUEST["Epassword"]; 
$res=$con->query("select * from tb_addemployee where `E_NAME`='$name' AND BINARY  `E_PASSWORD`='$pass'");
$count=$res->num_rows;  
if($count>0)
{ 
  $row=$res->fetch_assoc(); 
  $_SESSION["Ename"]=$name;
  $_SESSION["Eid"]=$row['E_ID']; 
  $_SESSION["Epass"]=$pass;  
  //ECHO $name;die();
    echo '<script> 
    alert(" Login successfully");  
     window.location.href="Edashboard.php";
   </script>';   
}
else{
    echo '<script>
    alert("wrong entry"); 
    window.location.href="index.php";
   </script>';     
}
?>
 
