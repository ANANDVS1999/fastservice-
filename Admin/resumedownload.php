<?php  
 $con=mysqli_connect("localhost","root","","academic_project");
 if(!$con){
     die("connection failed");
 }

if (isset($_GET['z'])) {
    $resume = $_GET['z']; 
    // fetch file to download from database
    $sql = "SELECT * FROM tb_newjobusers WHERE `RESUME`='$resume' ";
    $result = mysqli_query($con, $sql); 
    $file = mysqli_fetch_assoc($result);
    $filepath = 'resume_nju/' . $file["RESUME"] ;

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('resume_nju/' . $file['RESUME']));
        readfile('resume_nju/' . $file['RESUME']);

        // Now update downloads count
        $newCount = $file['RESUME'] + 1;
        $updateQuery = "UPDATE files SET resume=$newCount WHERE `RESUME`=$resume";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
?>