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
    min-height: 40%;
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

.sp-button {
  color:#fff!important;
  background-color:#272727!important;
  border: 1px solid #ffffff;
  /* First we need to help some browsers along for this to work.
     Just because a vendor prefix is there, doesn't mean it will
     work in a browser made by that vendor either, it's just for
     future-proofing purposes I guess. */
	 
  -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
  
  /* ...and now for the proper property */
  
  transition:.5s !important;
}

.sp-button:hover { color:#272727!important;
	background-color:#ffffff!important;
	border: 1px solid #ffffff!important;
 }


/* Create nav colour */
.w3-nav-grey,.w3-hover-nav-grey:hover{color:#fff!important;background-color:#272727!important;
}

/* creating nav opacity */
.w3-opacity-nav{opacity:0.98;-webkit-backface-visibility:hidden}

.w3-wide {letter-spacing: 9px;}
.w3-hover-opacity {cursor: pointer;}

.flexybox {
  display: flex;
  flex-flow: row wrap;
  justify-content: space-around;
}

/* Create four equal columns that sits next to each other */
.flexyitem {
  max-width: 25%;
  box-sizing:border-box;
  align-self:center;
  overflow:hidden;
  cursor: pointer;
}



/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .flexyitem {
  max-width: 50%;
  box-sizing:border-box;
  align-self:center;
  overflow:hidden;
  cursor: pointer;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .flexyitem {
  max-width: 100%;
  box-sizing:border-box;
  align-self:center;
  overflow:hidden;
  cursor: pointer;
  }
}


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
function onClick(element, id) {
  document.getElementById("img01").src = element.src;
  document.getElementById("imgID").innerHTML = id;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt; 

  
}

// Report Button
function onClickReport() {
  var imageID = document.getElementById("imgID").innerHTML;
	
	var reason = prompt("What is Wrong with this image?", "(eg. innapropriate image/tag)");
    if (reason != null) {

    }
	
  window.location = 'report.php/?id=' + imageID+ '&reason=' + reason;
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
  <div class="w3-display-middle layer" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-xxxlarge w3-text-white w3-wide w3-animate-opacity viewtitle viewtitle">EXPLORE <span class="w3-hide-small">THE NEXUS</span></span>
  </div>
</div> 

<!--if reported image, bring here-->
<?php
		$report=$_GET['reported'];
    		if ($report=='success')
    		{ ?>
		<div class="w3-content">
			<div class="w3-panel w3-green w3-animate-bottom w3-round-large">
    <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>
    <h3 class="w3-center">Image has been reported!</h3>
    <p class="w3-center">Thank you for keeping the nexus clean :D (image will remain hidden untill viewed by an Admin)</p>
  </div>
  </div>

    		<?php
			}
    		?>

<!-- Container (Introduction Section) -->

<div class="w3-content w3-container w3-padding-64 w3-text-white" id="about">
  <h3 class="w3-center">Have a look through the nexus for new images</h3>
  <p class="w3-center">See an image you think shouldnt be on here? report it and an admin will have it removed from the site, since trolls belong on 4chan and not the Nexus ;)</p>
</div>


<div class="w3-center" style="padding-bottom:32px" id="butt">
<a class="w3-button w3-nav-grey sp-button w3-round" href ="http://liamscloud.info/HiddenNexus/view.php?category=photography">Filter: Photos</a>
<a class="w3-button w3-nav-grey sp-button w3-round" href ="http://liamscloud.info/HiddenNexus/view.php?category=meme">Filter: Memes</a>
<a class="w3-button w3-nav-grey sp-button w3-round" href ="http://liamscloud.info/HiddenNexus/view.php?category=cute">Filter: Cute</a>
<a class="w3-button w3-nav-grey sp-button w3-round" href ="http://liamscloud.info/HiddenNexus/view.php?category=art">Filter: Art</a>
<a class="w3-button w3-nav-grey sp-button w3-round" href ="http://liamscloud.info/HiddenNexus/view.php?category=all">Filter: All</a>
</div>

<!-- Photo Grid -->
<div class="w3-row " id="myGrid" style="padding-bottom:32px">
  <div class="flexybox">
  
  <?php
	include('configdb.php');
	
	$category=$_GET['category'];
	
	
	if ($report=='success')
    		{
				$category='all';
			}
  
  
  	if ($category=='all')
    		{
				$category="art' OR Category = 'meme' OR Category = 'photography' OR Category = 'cute";
			}
			
  
$sql = "SELECT * FROM NexusImageUpload 
		WHERE Category = '" .$category. "'
		ORDER BY uploadtime DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		if ($row["Reported"] == 0) {
		echo "<img src=\"" .$row["ImgName"]. "\" style=\"width:100%; padding-left:10px ;padding-right: 10px; padding-bottom:20px; \" onclick=\"onClick(this, " .$row["id"] . ")\" class=\"w3-hover-opacity flexyitem\" alt=\"Tag: " .$row["Tag"]. "\">";
		}
	}
} 
else {
    echo "<p class=\" w3-text-white w3-large w3-center \"> No images in this category on the Nexus at the moment :((<br>Go to the upload page to add some!</p>";
};

$conn->close(); 
    ?>


  </div>

</div>


<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-text-white w3-opacity w3-hover-opacity-off w3-xxlarge w3-container w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <span class="w3-closebtn w3-text-red w3-opacity w3-hover-opacity-off w3-xxlarge w3-container w3-display-topleft" title="Report Image" onclick="onClickReport()"><i class="fa fa-thumbs-down"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64" style="height:90%">
    <img id="img01" class="w3-image" style="max-height:90%; max-width:90%">
    <p id="caption" class="w3-opacity w3-large"></p>
	<p id="imgID" style="display:none" class="w3-opacity w3-large"></p>
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