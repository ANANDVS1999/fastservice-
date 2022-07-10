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


<Style>
 
form{
   text-align:center;
   
}

#sform{
    background-color:blue;
    color:white;
    font-size:20px;
}
#f{
	width:50%;
	padding:2%;
}
.form-control{ 
	box-shadow:10px 10px 10px black;
	width:95%; 
}
#sf{
	color:white;
	text-shadow:5px 5px 10px black; 
}
</style>



<style>
      .dot{
        height: 250px;
        width: 250px;
        background-color: black;
        color: white;
        display: inline-block;
        border-radius: 50%;
		margin-top:35%;
      }
    </style>

</head>
<body>
<header>
	<!-- header -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:black">
  <a class="navbar-brand" href="index.php" >Fast Service Packs</a>
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
        <a  style="background-color:brown;" class="nav-link" href="dashboard.php"    >Dashboaord</a>
                        </li>
      <li  class="nav-item">
        <a  style="background-color:red;" class="nav-link" href="logout_action.php"  id="logout" >Logout</a>
                        </li>

    </ul>
 
</nav>


<br><br><br><br><br><br><br><br><br>

 
<div class="container-fluid" id="f">

<div class="row" style="border:1px solid black" id="sform">
<div class="col-md-6">
     
<br><br>
<form action="servicerequest_register.php" method="POST" enctype="multipart/form-data">

<div class="form-group">
<label for="NAME">NAME</label>
<input type="text" class="form-control" name="name" id="namea" placeholder=" enter your name" required=""> 
</div>

<div class="form-group">
<label for="PHONE">PHONE</label>
<input type="number" class="form-control" name="phone" id="phonea" placeholder=" enter your phone number" required=""> 
</div>



<div class="form-group">
<label for="ADDRESS">ADDRESS</label>
<textarea class="form-control" name="address" id="addressa" placeholder=" enter your address" required=""></textarea>
</div>

<div class="form-group">
<label for="SERVICE">SERVICE_DETAILS</label>
<textarea class="form-control" name="service" id="servicea" placeholder=" enter your querry" required=""></textarea>
</div>

<div class="form-group"> 
<input type="submit" class="form-control" style="color:White;background-color:red"> 
</div>

</form>

<br><br>
</div>
<div class="col-md-6">
<span class="dot"><h3 id="sf"> <br><br>
	<center>SERVICE <br>REQUEST<br> FORM</center></h3></span>
</div>
</div>
<br><br>

</div>




 





<br><br><br>

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



  






 




 











 



  
</body>
</html>




















