<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Nexus Image Viewer</title>
  <meta name="description" content="this is the image page for the Kainos Website Project">
  <meta name="author" content="Liam Riche"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="style.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="Img/favicon.ico" type="image/png">
	
	<style>
	body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
	body, html {
    height: 100%;
    color: #000000;
    line-height: 1.8;
	
}

/* First image (Logo. Full height) */
.VIEW-1 {
    min-height: 50%;
}

/* Second image (Portfolio) */
.VIEW-2 {
    min-height: 40%;
}

/* Third image (Contact) */
.VIEW-3 {
    min-height: 110px;
}

/* Create a Parallax Effect */
.VIEW-1, .VIEW-2, .VIEW-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.a {
  color:#fff!important;
  background-color:#272727!important;
  -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
  transition:.5s !important;
}

.a:hover { color:#272727!important;
	background-color:#ffffff!important;
	border: 1px solid #272727!important;
 }


/* Create nav colour */
.w3-nav-grey,.w3-hover-nav-grey:hover{color:#fff!important;background-color:#272727!important;
}

/* creating nav opacity */
.w3-opacity-nav{opacity:0.98;-webkit-backface-visibility:hidden}

.w3-wide {letter-spacing: 9px;}
.w3-hover-opacity {cursor: pointer;}

	</style>
	
</head>
<body>	

	<script src="js/index.js"></script>
	<script>
	// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-nav-grey";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt; 
}

	</script>

  	<!-- Navbar (sit on top) -->
<div class="w3-top w3-nav-grey w3-opacity-nav">
  <ul class="w3-navbar w3-card-2 w3-animate-top w3-nav-grey" id="myNavbar">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-hover-black" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
    </li>
    <li class="w3-left-align"><a href="index.html">HOME</a></li>
	<li class="w3-hide-small"><a href="upload.php"><i class="fa fa-arrow-circle-up"></i> UPLOAD</a></li>
	<li class="w3-hide-small"><a href="view.php?category=all"><i class="fa fa-image"></i> VIEW</a></li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-white"> 
		<li><a href="upload.php" onclick="toggleFunction()">UPLOAD</a></li>
		<li><a href="view.php?category=all" onclick="toggleFunction()">VIEW</a></li>
    </ul>
    
  </div>
</div>

<div id="particles-js" style ="z-index:-1; width:100%; height:100%; position:fixed">
</div>

<!-- title -->
<div class="VIEW-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle layer" data-depth="0.6" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-xxxlarge w3-text-white w3-wide w3-animate-opacity viewtitle viewtitle">UPLOAD<span class="w3-hide-small"> TO THE NEXUS</span></span>
  </div>
</div> 

<!-- Container (Introduction Section) -->

<div class="w3-content w3-container w3-padding-64 w3-text-white" id="about">
  <h3 class="w3-center">Add new images to the Nexus</h3>
  <p class="w3-center">Not seeing enough cats, memes or art on the nexus? Add your own contributions to the empty space! (be careful what you upload though, as if it is deemed innapropriate by users or admins it will be removed along with a potential ban :v) </p><br>
</div>

<!-- Container (Introduction Section) -->
<div class="fullwidth " style="background:#ffffff; text-align:center;">
<div class="w3-content w3-container w3-padding-64 " id="upload">
  <p class="w3-center"><em>"A quick disclaimer"</em></p>
  <p>While its good to be able to use this website anonymously, there are a few rules in place to keep the Nexus from becoming a repeat of <em>some </em> websites <del>*cough* 4chan *cough*</del>; so if you want to use the website you need to read the disclaimer <a href="disclaimer.html" target="_blank"><b>here</b></a>.
  </p>
  
  <form action="uploads.php" method="post" enctype="multipart/form-data">
    <p><b>Select image to upload:</b></p>
		<div style="padding-bottom: 10px;">
			<input type="file" name="fileToUpload" required="" id="fileToUpload" style="border: solid 1px;"><br>
		</div>
		
	<p><b>Tag (only one tag, try and keep it clean :])</b></p>
		<div style="padding-bottom: 10px;">
			<input type="text" maxlength="20" required="" name="fileTag" id="fileTag">
		</div><br>
		
	<p><b>Category of image (choose atleast one plz :v)</b></p>
	<div style="padding-bottom: 10px;">
		<select name="Category" id="Category">
			<option value="art">Art</option>
			<option value="cute">Cute</option>
			<option value="meme">Meme</option>
			<option value="photography">Photography</option>
		</select>
	</div>
	

	<input type="radio" name="read" value="read" required=""> I have read and will follow the <a href="disclaimer.html" target="_blank">disclaimer</a><br>
	
	<button type="submit" name="submit" class="w3-button w3-nav-grey sp-button w3-round-small" href ="upload.php" >Upload Image</a>
</form>


</div>
</div>
  
<!-- Parallax Nexus Footer -->

<footer class="VIEW-3 w3-display-container w3-opacity-min">
  <div class="w3-display-left" style="white-space:nowrap;">
    <img class="w3-center w3-padding-large w3-animate-opacity" src="Img/CAH.png" style="height:100px; width:auto;">
  </div>
  <a class="w3-display-bottomright w3-text-white w3-padding-right" style ="text-align:right;"> Created by Liam Riche<br>(Meme Supreme from Code Czars)</a>
</footer>

<script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>

</body>
</html>

