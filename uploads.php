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

.sp-button {
  color:#fff!important;
  background-color:#272727!important;
  border: 1px solid #272727;
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
	border: 1px solid #272727!important;
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
    <span class="w3-center w3-padding-large w3-xxxlarge w3-text-white w3-wide w3-animate-opacity viewtitle viewtitle">EXPLORE <span class="w3-hide-small">THE NEXUS</span></span>
  </div>
</div> 

<!-- Container (Introduction Section) -->

<div class="fullwidth " style="background:#ffffff; text-align:center;">
<div class="w3-content w3-container w3-padding-64 " id="about">
  
  <?php
  
  include('configdb.php');
  
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_tag =  $_POST['fileTag'];
$target_Category =  $_POST['Category'];
$target_IP = $_SERVER['REMOTE_ADDR'];
$target_IPmasked = $_SERVER['HTTP_X_FORWARDED_FOR'];

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ". <br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image. <br>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists. <br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "Sorry, your file is too large. <br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Your file was not uploaded.";
	
	echo"<br>";
	echo "<a class=\"w3-button w3-nav-grey sp-button w3-round-small\" href =\"upload.php\">Try again</a>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.
		<br>
		<img src=uploads/" . basename( $_FILES["fileToUpload"]["name"])." style ='width:80%'><br>";
		
		$sql = "INSERT INTO NexusImageUpload (ImgName, Tag, Category, ip, ipmasked)
				VALUES ('". $target_file ."', '". $target_tag ."', '". $target_Category ."', '". $target_IP ."', '". $target_IPmasked ."')";

		
		
		
		if ($conn->query($sql) === TRUE){
			echo "New image added to database";
			
			 echo"<br>";
			echo "<a class=\"w3-button w3-nav-grey sp-button w3-round-small\" href =\"view.php?category=all\">Find your masterpiece</a>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	} 
	
	else {
        echo "Sorry, there was an error uploading your file :(";
    }
}

$conn->close(); 

?>

  
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

