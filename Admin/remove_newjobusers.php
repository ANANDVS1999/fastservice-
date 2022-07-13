
<?php  
require("connection.php");
$x=$_REQUEST["id"];   

$r=$con->query("select * from  tb_newjobusers where `ID`='$x' " );
$row=$r->fetch_assoc(); 
unlink("photo_nju/".$row['PHOTO']); 
unlink("resume_nju/".$row["RESUME"]);


$res=$con->query("delete  from  tb_newjobusers where `ID`='$x' " );
$count=mysqli_affected_rows($con);   
if($count>0){   
    echo"<script> 
    alert('!---SUCCESSFULLY DELETED--!');
    window.location.href='view_jobusers.php';
    </script>" ;
}
else{
    echo"<script> 
    alert('FAIL TO DELETE');
    window.location.href='view_jobusers.php';
    </script>" ;
} 
?>