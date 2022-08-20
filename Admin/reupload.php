<?php
	include('../configdb.php');
	
		$sql="UPDATE NexusImageUpload SET Reported = 0 WHERE id = ".$_GET["id"].";";
		
		if ($conn->query($sql) === TRUE){
			header("Location: http://liamscloud.info/HiddenNexus/Admin/index.php?reupload=success");
		}
	
	$conn->close(); 
?>