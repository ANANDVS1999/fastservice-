<?php
$var_1 = $_GET['file'];
$f="pdf_files/".$var_1;

//$dir = "manager/video_file/"; // trailing slash is important
$file = $var_1;

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $f . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($f));
header('Accept-Ranges: bytes');
readfile($f);
?>