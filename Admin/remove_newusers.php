
<?php  
require("connection.php");
$x=$_REQUEST["id"];   

 

$res=$con->query("delete  from  tb_user_register where `ID`='$x' " );
$count=mysqli_affected_rows($con);   
if($count>0){   
    echo"<script> 
    alert('!---SUCCESSFULLY DELETED--!');
    window.location.href='view_newusers.php';
    </script>" ;
}
else{
    echo"<script> 
    alert('FAIL TO DELETE');
    window.location.href='view_newusers.php';
    </script>" ;
} 
?>