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
 
  </style>


<Style>

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

.box {
  width: 50%;
  margin: 0 auto; 
  padding: 35px; 
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: black;
  background-color: yellow;
  border: 2px solid black;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
  box-shadow:10px 10px red;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 70%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}

  </style>
  
<!----------///////////////////////////---------------CSS-------------------------------------------------->



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
        $("#aaa").click(function(){ 
            $("#aa").slideToggle("slow");
        });
    });
    $(document).ready(function(){
        $("#bbb").click(function(){ 
            $("#bb").slideToggle("slow");
        });
    });


 

</script>


<!----------///////////////////////////---------------JS-------------------------------------------------->




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
        <a  style="background-color:brown;" class="nav-link" href="dashboard.php"    >Dashboard</a>
                        </li>
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
								  <h3 class="word wisteria">We Are The Best Home Service For Making Your Home Shine</h3>
								  <p>we gain world wide reliable customers due to our good custormers satisfications</p>
								</div>
								
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img-2">
							<div class="slider_banner_info">
								<div class="text">
								  <h3 class="word wisteria">Making your Home Shine and Spotless Is Our Business And Priority</h3>
								  <p>we will provide the best servieces related to Plumbing,Carpentering,Electric,Painting...</p>
								</div>
								
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img-3">
							<div class="slider_banner_info">
								<div class="text">
								  <h3 class="word wisteria">Our Home Service Providers will Make You Proud in Society</h3>
								  <p>We will provide highly experienced workers to fullfill your entire requirements</p>
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

 

<br>
<div class="container-fluid" id="box"> <div class="row"><!------------------------------------------------------------------->

  <div class="col-md-6" id="aaa"> <div class="container-fluid" id="job"> 
         <br>  <h5 id="jobs"> <img src="images/arrowgif.gif" width="100px" height="50px">&nbsp;<u> CLICK HERE TO SEE THE JOB HISTORY </h5> </u> <br>
  </div> </div>
  <div class="col-md-6" id="bbb"> <div class="container-fluid" id="service"> 
           <br>  <h5 id="services"><img src="images/arrowgif.gif" width="100px" height="50px">&nbsp;<u>CLICK HERE TO SEE THE SERVICE HISTORY  </u><h5>     <br>
  </div></div>
   
  </div></div><!-------------------------------------------------------------------> 
  
<div class="container-fluid" style="background-color:silver">
<br> 
<!-- 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            -->
 
 
 
<div class="contianer-fluid" id="aa">
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
            if ($row['STATUS'] == 0){?> <br><div class="container" style="background-color:#FFFBEE;border:1px solid black;padding:1%;text-align:center;box-shadow:10px 10px 5px red;">
              <h6 style="text-align:center;background-color:brown;color:white;padding:1%"><?php echo $row["PROFESSION"]?>-->PENDING </h6>  <br>
              PLAEASE BE PATIENT <BR> YOUR APPLICATION IS NOT REVIEW TILL NOW BY OUR AUTHORITIES</div>
   <?php } } } ?>
</div> 
</div>

</div><BR><BR> 
</div>
<!--
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            -->
   <div class="container-fluid" id="bb">          
            <div class="row">
<div class="col-md-4"  style="color:green">
<div style="border:1px black;color:white; background-color:green;font-weight:bold;text-align:center">view approved service details</div>

<div class="container-fluid"> 
<?php require("connection.php");
         $id=$_SESSION['id']; 
         $res=$con->query("select * from tb_servicerequest where `SID`='$id'");   
         $count=$res->num_rows;
         if($count>0)
         {
          while($row=$res->fetch_assoc())
          {  
             if ($row['STATUS'] == 1){?>   
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
         $id=$_SESSION['id']; 
         $res=$con->query("select * from tb_servicerequest where `SID`='$id'");   
         $count=$res->num_rows;
         if($count>0)
         {
          while($row=$res->fetch_assoc())
          {  
             if ($row['STATUS'] == 0){?>   
             <br> <div style="border:1px solid black">
                    <div style="background-color:#FFFBEE;border:1px solid black;padding:1%;text-align:center;box-shadow:10px 10px 5px blue;"><?php echo $row["SERVICE_DETAILS"];?></div>  
<?php if($row['PAYMENT_AMOUNT']>0){
echo "<center>Amount for the work  -->".$row['PAYMENT_AMOUNT']."</center>" ;
}
else{
  echo" ";
} 
?>
</div> 
   <?php } } } ?>
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
             if ($row['STATUS'] == 2){?>   
             <br> <div style="border:1px solid black">
                    <div style="background-color:#FFFBEE;border:1px solid black;padding:1%;text-align:center;box-shadow:10px 10px 5px red;"><?php echo $row["SERVICE_DETAILS"];?></div>  
<?php if($row['PAYMENT_AMOUNT']>0){
echo "<center>Amount for the work  -->".$row['PAYMENT_AMOUNT']."</center>" ;
}
else{
  echo" ";
} 
?>
</div> 
   <?php } } } ?>
</div> 

</div>

</div>
<br>
</div>

 
  <!--
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            -->
 
</div>
	 <br>

 
<!-- Footer------------------------------------------------------------------------------------------------------------------------------>
<br>
<section class="footer">
<div class="container">
<h3>Fast Service</h3>
     <div class="wrapper">
<ul class="social-icons icon-circle icon-zoom list-unstyled list-inline"> 
<li> <a href="#"><i class="fab fa-facebook-f"></i></a></li> 
<li> <a href="#"><i class="fab fa-twitter"></i></a></li> 
<li> <a href="#"><i class="fab fa-linkedin-in"></i></a></li>
</ul>
</div>
<div class="copyright">
			<p>© 2018 Fast Service</p>
			
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






 
  
</body>
</html>