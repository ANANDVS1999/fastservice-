<?php
session_start();
if(empty($_SESSION["Eid"])){
	header("location:index.php");
} 
?> 
<?php 
	require('connection.php');
  $un=$_REQUEST["uname"];
 $ua=$_REQUEST["uaddress"];
 $up=$_REQUEST["uphone"];
 $us=$_REQUEST["uservice"];
 $uid=$_REQUEST["id"];
 $eid=$_SESSION["Eid"];
 $en= $_SESSION["Ename"];
 //echo "name-".$un."<br>"."address-".$ua."<br>"."phone-".$up."<br>"."service-".$us."<br>"."id-".$uid."<br>"."eid->".$eid."<br>"."ename->".$en;die();
function generateRow(){
	require('connection.php');
  $uid=$_REQUEST["id"];
  $eid=$_SESSION["Eid"];
		$contents = '<table border="1px"> 
    <tr style="background-color:pink;color:black">
    <th style="color:black">SI.NO</th>
    <th style="color:black">PROUDCT NAME</th>
    <th style="color:black">QUANTITY</th>
    <th style="color:black">PRICE PER PRODUCT</th>
    <th style="color:black">TOTAL PRICE </th>
    </tr>';
		$i=1;
		$res=$con->query("select * from tb_bill where `EID`=$eid AND `UID`=$uid"); 
			while($row=$res->fetch_assoc())
			{
        $A=$row['SUM(TPRICE)']; 
$p=$row["PNAME"];
$q=$row["PQUANTITY"];
$pp=$row["PPRICE"];
$tp=$row["TPRICE"];
				 
			$contents .= '
      
			<tr>
			<td>'.$i++.'</td>
				<td >'. $p.'</td>
        <td>'.  $q.'</td>
        <td>'.  $pp.'</td>
        <td>'.  $tp.'</td>
        
			</tr>
      
			';
		} 
		return $contents;
	} 

  function generateRows(){
    require('connection.php');
    $uid=$_REQUEST["id"];
    $eid=$_SESSION["Eid"];
      $contents = '';
      $i=1; 
      $res=$con->query("select SUM(TPRICE) from tb_bill  where `EID`=$eid AND `UID`=$uid");
      while($row=$res->fetch_assoc()){
        $A=$row['SUM(TPRICE)'];  
        $contents .= '
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td  > TOTAL </td>  
        <td >'.$A.'</td>
          
        </tr>
        
        ';
      } 
      return $contents;
    } 

 


	require_once('TCPDF-main/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
      
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
      	 
		 <div class="container-fluid">


     <div class="container">
<img src="Admin/gallery/logo.jpeg" width="250PX" height="100px"><h4 style="text-align:center;color:brown;background-color:orange;padding:1%"> BILL RECEIPT  </h4>
</div>



<div class="row" style="border:1px solid black;text-align:center"> 
  <div class="col-md-6" >
<span style="background-color:brown;color:white"><h4 >USER DETAILS</h4></span>
   name->'.$un.'<br>address->'.$ua.'<br>phone->'.$up.'<br>service->'.$us.'</div>
   <div class="col-md-6">
   <span style="background-color:brown;color:white"><h4 >EMPLOYEE DETAILS</h4></span>
    employee name->'.$en.'</div> 
</div>
 


      ';  
   $content .= generateRow();  
   $content.=generateRows(); 

    $content .= ' 
    </table>
    <div class="container"  >
<h6 style="text-transform:uppercase">this is an digital type of bill receipt given by our employee to our clients to know
about the service products what are all the thing he purchase for his work.<br>
<br>
if there is any mistakes means please clear that before giving payment to our employee for your work<br>else we are not going to take responsible for the fault
<br><br>

for any compalaints please call-:9090909090,9999000090</h6>
</div>
<br><br>
    </div>';  



    $pdf->writeHTML($content); 
	ob_end_clean(); 
    $pdf->Output('Report.pdf', 'I');
 













 
?>