
<?php  
require("connection.php");
$x=$_REQUEST["id"];   

$r=$con->query("select * from  tb_addemployee where `E_ID`='$x' " );
$row=$r->fetch_assoc(); 
unlink("ephoto/".$row['E_PHOTO']);  


$res=$con->query("delete  from  tb_addemployee where `E_ID`='$x' " );
$count=mysqli_affected_rows($con);   
if($count>0){   
    echo"<script> 
    alert('!---SUCCESSFULLY DELETED--!'); 
    window.location.href='viewemployee.php';
    </script>" ;
}
else{
    echo"<script> 
    alert('FAIL TO DELETE');
    window.location.href='viewemployee.php';
    </script>" ;
} 
?>