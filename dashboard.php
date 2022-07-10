<?php
session_start();
if(empty($_SESSION["id"])){
	header("location:index.php");
} 
?>  
 <!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>  Fast Services Packs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Fast Service a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/style_common.css" />
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

<script src="logreg.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="css_servicestatus.css">
<link rel="stylesheet" href="chat.css"> 




<!--------------------------------CSS-------------------------------------------------->

<style>
 
   
  #main{
    display:none;
    background-color:orange;
  }
  #fmain{
    display:none;
    background-color:brown;
    color:white;
    padding:2%;
  }
  #service{
    background-color:red;
    color:white; 
    text-align:center;
    padding:2%;
    box-shadow: 5px 10px 8px #red;
  }
  #job{
    background-color:blue;
    color:white; 
    text-align:center;
    padding:2%;
    
  } 
  #box{
    padding:2%;
    
  }
  #apr{
   color:black;
   background-color:white;
   padding:1%;
  }
  #aa{
    display:none;
  }
  #bb{
    display:none;
  }
#r{
  text-align:center; 
}
#s{
  background-color:purple;
  color:white;
  padding:3%;
  border-radius:2rem;
  box-shadow:10px 10px 5px black;
   
} 
#aa{
  background-color:yellow;
}
#bb{
  background-color:purple;
}
  
  </style>




  



































<!----------------------JS----------------------------------------------------->

<script>
    $(document).ready(function(){
        $("#services").click(function(){ 
            $("#main").slideToggle("slow");
        });
    });

    $(document).ready(function(){
        $("#jobs").click(function(){ 
            $("#fmain").slideToggle("slow");
        });
    });

    $(document).ready(function(){
        $(".a").click(function(){ 
            $("#bb").slideToggle("slow");
        });
    });

    $(document).ready(function(){
        $(".b").click(function(){ 
            $("#aa").slideToggle("slow");
        });
    });
</script>





</head>
<body>
<header>
	<!-- header -->
	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php">Fast Service Packs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <!--<li class="nav-item ">
        <a class="nav-link" href="dashboard.php">dashboard </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">xxxx</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">xxxx</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">xxxx</a>
      </li>-->

      <li  class="nav-item">
        <a  style="background-color:red;" class="nav-link" href="logout_action.php"  id="logout" >Logout</a>
                        </li>

    </ul>
 
</nav>
	


	<!-- //header -->

	<!-- banner -->
	<!-- banner-slider -->
	<div class="w3l_banner_info">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-img">
							<div class="slider_banner_info">
							<div class="text">
								  <h5 class="word wisteria"> We Are The Best Home Service  For Making Your Home Shine </h5> 
								</div>
								
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img-2">
							<div class="slider_banner_info">
								<div class="text">
								  <h5 class="word wisteria">Making your Home Shine and Spotless Is Our Business And Priority</h5> 
								</div>
								
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img-3">
							<div class="slider_banner_info">
								<div class="text">
								  <h5 class="word wisteria">Our Home Service Providers will Make You Proud in Society</h5> 
								</div>
								
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-slider -->
</div>
</header>
<br>


<div class="container-fluid" id="welcome" > 
<h3 style="text-align:center;padding:2%;background-color: #d7b38c;"> Hi, welcome<span style="color:red;font-weight:bold;"> <?php echo $_SESSION["name"]?><span> </h3>
</div>


<br>
<div class="container-fluid" id="box"> <div class="row"><!------------------------------------------------------------------->

  <div class="col-md-6" id="fcol"> <div class="container-fluid" id="job"> 
         <br>  <h5 id="jobs"> <img src="images/arrowgif.gif" width="100px" height="50px">&nbsp;<u> CLICK HERE TO APPLY FOR A JOB</h5> </u> <br>
  </div> </div>
  <div class="col-md-6" id="scol"> <div class="container-fluid" id="service"> 
           <br>  <h5 id="services"><img src="images/arrowgif.gif" width="100px" height="50px">&nbsp;<u>CLICK HERE TO CHOOSE YOUR SERVICES  </u><h5>     <br>
  </div></div>
   
  </div></div><!-------------------------------------------------------------------> 
  <div class="container-fluid" id="fmain"><!------------------new job users form------------------------------------->
<form action="newjobusers.php" method="POST" enctype="multipart/form-data"> 
     <center><h3>JOB APPLICATION FORM</h3></center><br>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
         <label for="name">Username:</label>
         <input type="text" name="username" id="name" class="form-control" placeholder="enter your name">
    </div>
    <div class="form-group">
       <label for="age">Age:</label>
       <input type="number" name="age" id="age" class="form-control" placeholder="enter your age">
    </div>
    <div class="form-group">
       <label for="photo">Photo:</label>
       <input type="file" name="photo" id="photo" class="form-control" placeholder="choose your photo">
    </div>
    <div class="form-group">
       <label for="profession"> Choose your Profession:</label><br>
       <select name="professions" id="professions">
       <option value="----">----</option>
    <option value="Fitter">Fitter</option>
    <option value="Plumber">Plumber</option>
    <option value="Painter">Painter</option>
    <option value="Carpenter">Carpenter</option>
    <option value="Electrician">Electrician</option>
    <option value="Welder">Welder</option>
  </select>
    </div>

  </div>
  <div class="col-md-6">
    <div class="form-group">
           <label for="phone">ADDRESS:</label>
           <textarea name="address"  id="address" class="form-control" placeholder="enter the adress"></textarea>
    </div>
    <div class="form-group">
           <label for="phone">Phone Number:</label>
           <input type="text" name="phone" id="phone" class="form-control" placeholder="enter your contact number">
    </div>
    <div class="form-group">
           <label for="resume">Upload your Resume:</label>
           <input type="file" name="resume" id="resume" class="form-control" placeholder="eupload your resume">
    </div>
    <div class="form-group" >
   <input style="background-color:red;color:white" type="submit" name="REGISTER" class="form-control" onclick=" return  reg()"><!-- script -- bottom of the page--->
   </div>

  </div> 
<div>
   
  </form>
</div> <!-----------------------------  SERVICE SELECT     -------------------------------------->
</div></div>
  

 







<div class="container-fluid" id="main">
<br> 
<section class="bannerbottom py-lg-5 py-md-4 py-md-3 py-2">

<h3 style="color:green;text-align:center;font-weight:bold">Please choose the services what you want now</h3>
<div class="bannerbottom py-lg-5 py-md-4 py-md-3 py-2">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-12 w3_ban1">
<div class="card" >
  <img class="card-img-top" src="images/bb1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><span style="color:brown">Carpenter</span></h5> 
    <!-- Trigger the modal with a button -->
    <a href="serviceform.php">  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">REQUEST NOW</button></a>
  </div>
</div>
</div>
<div class="col-md-4 col-sm-12 w3_ban1">
<div class="card" >
  <img class="card-img-top" src="images/bb2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><span style="color:brown">Plumber</span></h5> 
    <!-- Trigger the modal with a button -->
    <a href="serviceform.php">  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">REQUEST NOW</button></a>

  </div>
</div>
</div>
<div class="col-md-4 col-sm-12 w3_ban1">
<div class="card" >
  <img class="card-img-top" src="images/bb3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><span style="color:brown" >Electrician</span></h5> 
    <!-- Trigger the modal with a button -->
    <a href="serviceform.php">  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">REQUEST NOW</button></a>

  </div>
</div>
</div>
<div class="col-md-4 col-sm-12 w3_ban">
<div class="card" >
  <img class="card-img-top" src="images/bb4.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color:brown">Welder</a></h5> 
     <!-- Trigger the modal with a button -->
     <a href="serviceform.php">  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">REQUEST NOW</button></a>

  </div>
</div>
</div>
<div class="col-md-4 col-sm-12 w3_ban">
<div class="card" >
  <img class="card-img-top" src="images/bb5.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><span style="color:brown" >Painter</span></h5> 
    <!-- Trigger the modal with a button -->
    <a href="serviceform.php">  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">REQUEST NOW</button></a>

  </div>
</div>
</div>
<div class="col-md-4 col-sm-12 w3_ban">
<div class="card" >
  <img class="card-img-top" src="images/bb6.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><span style="color:brown">Fitter</span></h5> 
     <!-- Trigger the modal with a button -->
     <a href="serviceform.php">  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">REQUEST NOW</button></a>

  </div>
</div>
</div>
</div>
</div>
</div>
</section> 
 
</div>


<br><br>


 
<div class="container-fluid"> 
  <div class="row">
   <div class="col-md-6" id="r">  <span id="s" class="a" style="background-color:red">VIEW SERVICE STATUS </span>  &nbsp;&nbsp;<img src="images/clickhere2.png"></div>
    <div class="col-md-6" id="rr" ><img src="images/clickhere.png" ><span id="s" class="b" style="background-color:blue"> VIEW JOB STATUS </span> </div>
  </div> 
</div>
<br>
 
   



<!-- 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            -->



            <div class="container-fluid" id="bb">   <br><br><h4 STYLE="TEXT-ALIGN:CENTER;BACKGROUND-COLOR:WHITE;">VIEW SERVICE STATUS</h4><br><br>    
            <div class="container" style="color:white;padding:2%;background-color:brown">
              <CENTER><h5 style="color:black;background-color:yellow">EMPLOYEE  Details -who is going to visit your home  </h5><CENTER><br>
               
                <?php
              require('connection.php'); 
              $s=$_SESSION["id"];
              $res=$con->query("select * from tb_servicerequest as S JOIN tb_addemployee as E on S.EID=E.E_ID where S.STATUS=1 AND S.SID='$s' AND S.U_STATUS='' ");
              $count=$res->num_rows;
              $i=1;
              if($count>0)
              {
$i=1;
while($row=$res->fetch_assoc()){
?> 
 <div class="container"  >
<div class="row" style="background-color:#d7b38c;color:blue;">
  <div class="col-md-3"><br><br><br>SERVICE-><span style="color:black;padding:2px;"><?php echo $row["SERVICE_DETAILS"];?></span></div>
  <div class="col-md-3"> <br><br><?php echo "<center><img style=width:100px;height:150px;  src='Admin/ephoto/".$row['E_PHOTO']."' ></center>";  ?>
                          NAME -> <?php echo $row["E_NAME"];?><br>  MOBILE -> <?php echo $row['PHONE'];  ?>
                     </div>
  <div class="col-md-6">
  <?php if($row["PAYMENT"]=="1"){echo "<br><span style='background-color:orange;padding:2px;'>WORK FINISHED</span>";}?>
<?php if($row["EJ_START"]=="1"){
  echo "<span style='background-color:WHITE;padding:2px;COLOR:BLACK;'>JOB TAKEN BY HIM</span>";}?>


  <!---->

<?php
if (($row['U_STATUS'] == '') && ($row['STATUS']==1)) {?>   
   <br><div style="border:1px solid black; ">
    <div style="background-color:blue;border:1px solid black;padding:1%;text-align:center;color:White;"> <?php echo $row["SERVICE_DETAILS"];?></div>  
    <span style="color:white">our employee decide to take your work, he will visit your house very soon</span>
<?php if($row['PAYMENT_AMOUNT']>0){
echo "<center style='color:blue;background-color:white'>Amount for the work  -->".$row['PAYMENT_AMOUNT']." </center>" ;
}
else{
echo" ";
}  ?>

<div style='color:white;background-color:grey'>
<b>please confirm that </b><br><br><?php //echo $_SESSION["id"];?>
<a href="workcomplete_action.php?i=<?php echo $row['ID']?>"><button style="background-color:yellow;color:black;text-align:center;margin-left:2%">work is completed by the employee</button></a>  
<br><br>
<a href="worknotcomplete_action.php?id=<?php echo $row['ID']?>"><button style="background-color:orange;color:black;text-align:center;margin-left:2%">work is notcompleted by the employee</button></a>
<br><br>
</div>

   
  
  
  
  <?PHP   }?>
</div>






  </div>
</div>

</DIV><br>
                <?php }}?>


                
                 </DIV>
                
               <!------------------------------------------------------------------------------------>
                
                <BR><BR>
            <div class="row">
<div class="col-md-4"  style="color:green">
<div style="border:1px black;color:white; background-color:green;font-weight:bold;text-align:center">view completed service details</div>

<div class="container-fluid"> 
<?php require("connection.php");
         $id=$_SESSION['id']; 
         $res=$con->query("select * from tb_servicerequest where `SID`='$id' AND `U_STATUS`=1");   
         $count=$res->num_rows;
         if($count>0)
         {
          while($row=$res->fetch_assoc())
          {  
             if ($row['U_STATUS'] == 1){?>   
             <br> <div style="border:1px solid black;box-shadow:10px 10px 5px green">
                    <div style="text-align:center;background-color:green;color:white;font-weight:bold;padding:1%;"><?php echo $row["SERVICE_DETAILS"];?></div>  
<?php if($row['PAYMENT_AMOUNT']>0){
echo "<center style='background-color:white'>Amount for the work  -->".$row['PAYMENT_AMOUNT']."</center>" ;
}
else{
  echo" ";
} 
?>
</div> 
   <?php } } } ?>
</div> 
</div>


<div class="col-md-4" style="color:blue" >
<div style="border:1px black;color:white; background-color:blue;font-weight:bold;text-align:center">view pending service details</div>

<div class="container-fluid"> 
<?php require("connection.php");
         $id=$_SESSION['id'];  //echo $id;die()
         $res=$con->query("select * from tb_servicerequest where `SID`='$id' ");   
         $count=$res->num_rows;
         if($count>0)
         {
          while($row=$res->fetch_assoc())
          {  
            if($row['STATUS']==""){ 
              ?>
<br> <div style="border:1px solid black;box-shadow:10px 10px 5px blue;">
                    <div style="background-color:blue;border:1px solid black;padding:1%;text-align:center;color:White;"><?php echo $row["SERVICE_DETAILS"];?></div> <center style='background-color:white'> <span >please wait!!, all our employeses are right now busy </span></center></div> 
              <?php
            } 
?>
 
 
   <?php  } } ?>
</div> 

</div>

<div class="col-md-4" style="color:red;">
<div style="border:1px black;color:white; background-color:red;font-weight:bold;text-align:center">view rejected service details</div>

<div class="container-fluid"> 
<?php require("connection.php");
         $id=$_SESSION['id']; 
         $res=$con->query("select * from tb_servicerequest where `SID`='$id'");   
         $count=$res->num_rows;
         if($count>0)
         {
          while($row=$res->fetch_assoc())
          {  
             if ($row['STATUS'] == 2)
             
             {?>   
             <br> <div style="border:1px solid black">
                    <div style="background-color:#FFFBEE;border:1px solid black;padding:1%;text-align:center;box-shadow:10px 10px 5px red;"><?php echo $row["SERVICE_DETAILS"];?></div>  
 
</div> 
   <?php } } } ?>
</div> 

</div>

</div>
<br>
</div>



                
                
                </DIV>


























<!-- 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            -->













 
 
 
            <div class="contianer-fluid" id="aa"><br><br><h4 STYLE="TEXT-ALIGN:CENTER;BACKGROUND-COLOR:SILVER;">VIEW JOB APPLICATION STATUS</h4><br><br>
<div class="row">
<div class="col-md-4"  style="color:green">
<div style="border:1px black;color:white; background-color:green;font-weight:bold;text-align:center">view approved job details</div>

<div class="container-fluid"> 
<?php require("connection.php");
         $id=$_SESSION['id']; 
         $res=$con->query("select * from tb_newjobusers where `SID`='$id'");   
         $count=$res->num_rows;
         if($count>0)
         {
          while($row=$res->fetch_assoc())
          {  
             if ($row['STATUS'] == 1){?> <br><div class="container" style="background-color:#FFFBEE;border:1px solid black;padding:1%;text-align:center;box-shadow:10px 10px 5px green;">
              <h6 style="text-align:center;background-color:brown;color:white;padding:1%"><?php echo $row["PROFESSION"]?>-->SUCCESS </h6>  <br>
               WE ARE HAPPY TO SAYS THAT YOUR RESUME IS SELECTED FOR THE POST OF <b style="color:orange;text-transform: uppercase;"><?php echo $row["PROFESSION"]; ?></b>,<BR>
               YOUR INTERVEIW WILL BE GOING TO HELD WITHIN 1 WEEK FUTHER DETAILS WILL BE MAIL TO YOUR EMAIL (<b style="color:orange;text-transform: uppercase;">
               <?php echo $_SESSION["email"];?></b>)</div>
   <?php } } } ?>
</div> 
</div>


<div class="col-md-4" style="color:blue" >
<div style="border:1px black;color:white; background-color:blue;font-weight:bold;text-align:center">view pending job details</div>

<div class="container-fluid"> 
<?php require("connection.php");
         $id=$_SESSION['id']; 
         $res=$con->query("select * from tb_newjobusers where `SID`='$id'");   
         $count=$res->num_rows;
         if($count>0)
         {
          while($row=$res->fetch_assoc())
          {  
             if ($row['STATUS'] == 0){?> <br><div class="container" style="background-color:#FFFBEE;border:1px solid black;padding:1%;text-align:center;box-shadow:10px 10px 5px blue;">
              <h6 style="text-align:center;background-color:brown;color:white;padding:1%"><?php echo $row["PROFESSION"]?>-->PENDING </h6>  <br>
              PLAEASE BE PATIENT <BR> YOUR APPLICATION IS NOT REVIEW TILL NOW BY OUR AUTHORITIES</div>
   <?php } } } ?>
</div> 
</div>

<div class="col-md-4" style="color:red;">
<div style="border:1px black;color:white; background-color:red;font-weight:bold;text-align:center">view rejected job details</div>

<div class="container-fluid" > 
<?php require("connection.php");
         $id=$_SESSION['id']; 
         $res=$con->query("select * from tb_newjobusers where `SID`='$id'");   
         $count=$res->num_rows;
         if($count>0)
         {
          while($row=$res->fetch_assoc())
          {  
            if ($row['STATUS'] == 2){?> <br><div class="container" style="background-color:#FFFBEE;border:1px solid black;padding:1%;text-align:center;box-shadow:10px 10px 5px red;">
              <h6 style="text-align:center;background-color:brown;color:white;padding:1%"><?php echo $row["PROFESSION"]?>-->REJECTED </h6>  <br>
             WE ARE VERY SORRY THAT <BR> YOUR APPLICATION IS NOT FULL FILL OUR REQUIREMENTS  </div>
   <?php } } } ?>
</div> 
</div>

</div><BR><BR> 
</div>
<!--
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            -->



            
<br><br>









 
<!-- Footer------------------------------------------------------------------------------------------------------------------------------>
<br>
<section class="footer">
<div class="container">
<h3>Fast Service Packs</h3>
     <div class="wrapper">
<ul class="social-icons icon-circle icon-zoom list-unstyled list-inline"> 
<li> <a href="#"><i class="fab fa-facebook-f"></i></a></li> 
<li> <a href="#"><i class="fab fa-twitter"></i></a></li> 
<li> <a href="#"><i class="fab fa-linkedin-in"></i></a></li>
</ul>
</div>
<div class="copyright">
			<p>© 2022 Fast Service Packs</p>
			
		</div>
	</div>
</section>



 
<!-- /Footer-->

<script  src="js/jquery.min.v3.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script  src="js/SmoothScroll.min.js"></script>	

	<!-- banner Slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- //banner Slider -->


	<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
	<!--team-->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
					
<!--team-->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
<script type="text/javascript">
var words = document.getElementsByClassName('word');
var wordArray = [];
var currentWord = 0;

words[currentWord].style.opacity = 1;
for (var i = 0; i < words.length; i++) {
  splitLetters(words[i]);
}

function changeWord() {
  var cw = wordArray[currentWord];
  var nw = currentWord == words.length-1 ? wordArray[0] : wordArray[currentWord+1];
  for (var i = 0; i < cw.length; i++) {
    animateLetterOut(cw, i);
  }
  
  for (var i = 0; i < nw.length; i++) {
    nw[i].className = 'letter behind';
    nw[0].parentElement.style.opacity = 1;
    animateLetterIn(nw, i);
  }
  
  currentWord = (currentWord == wordArray.length-1) ? 0 : currentWord+1;
}

function animateLetterOut(cw, i) {
  setTimeout(function() {
        cw[i].className = 'letter out';
  }, i*80);
}

function animateLetterIn(nw, i) {
  setTimeout(function() {
        nw[i].className = 'letter in';
  }, 340+(i*80));
}

function splitLetters(word) {
  var content = word.innerHTML;
  word.innerHTML = '';
  var letters = [];
  for (var i = 0; i < content.length; i++) {
    var letter = document.createElement('span');
    letter.className = 'letter';
    letter.innerHTML = content.charAt(i);
    word.appendChild(letter);
    letters.push(letter);
  }
  
  wordArray.push(letters);
}

changeWord();
setInterval(changeWord, 4000);

</script> 

	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
<!-- skills -->
<script src="js/skill.bars.jquery.js"></script>
<script>
	$(document).ready(function(){
		
		$('.skillbar').skillBars({
			from: 0,
			speed: 4000, 
			interval: 100,
			decimals: 0,
		});
		
	});
</script>
<!-- //skills -->
   <!-- sign in and signup pop up toggle script -->
    <script>
        $('.toggle').click(function () {
            // Switches the Icon
            $(this).children('i').toggleClass('fa-pencil');
            // Switches the forms  
            $('.form').animate({
                height: "toggle",
                'padding-top': 'toggle',
                'padding-bottom': 'toggle',
                opacity: "toggle"
            }, "slow");
        });
    </script>
    <!-- sign in and signup pop up toggle script -->
	<script type="text/javascript">
	var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}	
	</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script type="text/javascript">
	$(function () {
  $('[data-toggle="popover"]').popover()
})

</script> 
<!-- //scrolling script -->
<!--//start-smoth-scrolling -->








  <script>

function reg(){
  var name=document.getElementById("name").value; 
  var age=document.getElementById("age").value;
  var address=document.getElementById("address").value;
  var pro=document.getElementById("professions").value;
  var phone=document.getElementById("phone").value;
  var photo=document.getElementById("photo").value;
  var resume=document.getElementById("resume").value; 
 

if(name==""){ alert("!!--name is empty ,please provide the name -!!"); return false;}
else if(address==""){alert("!!--address is empty ,please provide the address -!!"); return false;}
else if(age==""){alert("!!--age is empty ,please provide the age -!!"); return false;}
else if(phone==""){alert("!!--phone is empty ,please provide the phone -!!"); return false;} 
else if(photo==""){alert("!!--photo is empty ,please provide the photo -!!"); return false;}
else if(resume==""){alert("!!--resume is empty ,please provide the resume -!!"); return false;}
else if(pro==""){alert("!!--profession is empty ,please provide the profession -!!"); return false;} 
else if(pro=="----"){alert("!!-- your are choosing wrong profile please choose the valid one--!!");return false;}
else { return true;}

}




  </script>



  <Script>
  function a(){
    var n=document.getElementById("namea").value; 
  var a=document.getElementById("addressa").value;
  var p=document.getElementById("phonea").value;
  var s=document.getElementById("servicea").value;
   if(n==""){alert("!!--name is empty ,please provide the name -!!"); return false;}
else if(p==""){alert("!!--phone number is empty ,please provide the phonenumber -!!"); return false;} 
else if(a==""){alert("!!-- address is empty,please provide the valid address--!!");return false;}
else if(s==""){alert("!!-- service details is empty,please provide what service you want now--!!");return false;}
else { return true;}
  }
  </script>






 




 











 



  
</body>
</html>






































