<?php
session_start();
if(empty($_SESSION["Eid"])){
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
<title>  Fast Services Packs - EMPLOYEE</title>
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


<link rel="stylesheet" href="Emodelssss.css">

<!--------------------------------CSS-------------------------------------------------->

 

<!----------///////////////////////////---------------CSS-------------------------------------------------->




</head>
<body>
<header>
	<!-- header -->
	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php">Fast Service PAcks<br>  Employee </a>
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


<div class="container-fluid" id="welcome" > 
<h3 style="text-align:center;padding:2%;background-color: #d7b38c;"> Hi, welcome<span style="color:red;font-weight:bold;"> <?php echo $_SESSION["Ename"]?><span> <BR><BR><b><?php require('connection.php'); 
							$i= $_SESSION["Eid"];  
							$res=$con->query("select * from tb_addemployee where `E_ID`='$i' ");
$count=$res->num_rows; 
if($count>0)
{
    while($row=$res->fetch_assoc())
    {
		
		  echo "<center><img style=width:100px;height:150px;  src='Admin/ephoto/".$row['E_PHOTO']."' ></center>"."<BR>";
		  echo "PROFESSION:".$row['E_PROFESSION']."<BR>";
		echo "PHONE:".$row['E_PHONE']."<BR>";
	}
}	 
							?>
 </b></h3> 

</div>


 





<div class="w3-container"> 
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">VIEW ALLOCATED JOB</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <br><br>
		<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-5">
                        <h4 class="page-title" style="background-color:blue;color:white;padding:1%;text-align:center;"> View Allocated Job Details</h4>
                    </div>
               
                </div> 

				 
                            <table class="table table-striped custom-table mb-0" id="employee_data">
                                <thead>
								<tr>
                                        <th style="background-color:brown;color:white;">Si.No</th>
                                        <th style="background-color:brown;color:white;">Name</th>
                                        <th style="background-color:brown;color:white;">Address</th>
                                        <th style="background-color:brown;color:white;">Phone Number</th>
                                        <th style="background-color:brown;color:white;">Service-Details</th>

										<th style="background-color:brown;color:white;">STATUS</th> 
										<th style="background-color:brown;color:white;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
							require('connection.php');
							$i=$_SESSION["Eid"]; 
                            $res=$con->query("select * from tb_servicerequest where `EID`='$i'  ");
                            $count=$res->num_rows;
                            $i=1;
                            if($count>0)
                            {
$i=1;
while($row=$res->fetch_assoc()){
	?>
                                    <tr class="holiday-completed" style="border:1px solid black">
                                        <td><?php echo $i++;  ?></td>
                                        <td style="color:black"><?php echo $row['NAME'];  ?></td>
                                        <td style="color:black"><?php echo $row['ADDRESS'];  ?> </td>
                                        <td style="color:black"><?php echo $row['PHONE'];  ?> </td>
                                         <td style="color:black;"><?php echo $row['SERVICE_DETAILS'];  ?> </td>  
										 <td>
										 <?php
                                         $s=$row['STATUS'];
                                         if($s==1){echo "<div style='color: green;padding:1%;'>work is taken by you</div> ";} 
										 else if($s==2){echo "<div style='color:black;padding:1%;background-color:yellow;'>work is rejected by you</div><br><br>";}
                                         else{echo "<div style='color: Red;background-color:black;padding:1%;'>job not taken by you till now</div><br><br>";}
                                         
                                        ?><br>
										<?php
                                         $s=$row['EJ_START'];
										 if($s==1){echo "<div style='color: green;padding:1%;'>work started at </div>".$row['EJ_START_TIME']."<br><br>";} 
                                         else{echo "<div style='color: Red;padding:1%;'></div>";}
                                         
                                        ?> 

<?php
                                         $s=$row['EJ_FINISH'];
										 if($s==1){echo "<div style='color: green;padding:1%;'>work finished at </div>".$row['EJ_FINISH_TIME']."<br><br>";} 
                                         else{echo "<div style='color: Red;padding:1%;'></div>";}
                                         
                                        ?>
                                        <?php
                                         $s=$row['PAYMENT_AMOUNT']; 
										 if($s>0){echo "<div style='color: green;padding:1%;'>Amount for the work ".$s."</div><br> ";} 
                                         else{echo "<div style='color: Red;padding:1%;'></div>";}
                                         
                                        ?> 
										 <?php
										$p=$row['PAYMENT'];
                                        if($p==1){echo"<span style='color: green;padding:1%;'> Amount paid successfully</span><br>";}
										?>
                                        <?php
										$p=$row['U_STATUS'];
                                        if($p==1){echo"<span style='color: green;padding:1%;'> client response successfully</span>";}
										?>




										 </td>
										 <td>  
										 <a href="service_approve_action.php ?id=<?php echo $row['ID'];?>"><button class="btn btn-primary" id="approve">Take Job</button></a><br><br>
										 <a href="service_start_action.php ?id=<?php echo $row['ID'];?>"><button class="btn btn-secondary" id="approve">Start the Job</button></a><br><br>
										 <a href="service_finish_action.php ?id=<?php echo $row['ID'];?>"><button class="btn btn-success" id="approve">Job Finished</button></a><br><br>
                                        <a href="service_reject_action.php ?id=<?php echo $row['ID'];?>"><button class="btn btn-warning" id="rejected">Reject Job</button></a><br><br>
                                        <a href="bill.php?id=<?php echo $row['ID'];?>"><button STYLE="BACKGROUND-COLOR:PINK" class="btn btn-warning" id="rejected">Payment</button></a><br>
 

                                    </td>
                                    </tr>
                                    <script>
		function confirmation(anchor){
			var c=confirm("are you sure");
			if(c)
			window.location=anchor.attr("href");
		}
		</script>
                           <?php
}
}
?>

                                </tbody>
                            </table>
							<br><br>
                        </div>
                    </div>
                </div>
            </div>


		 
			  <br>
			  <br>
      </div>
    </div>
  </div>
</div>
   
 
 <BR>
 

 



 
       


 
	 

 
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








 
 

  
</body>
</html>