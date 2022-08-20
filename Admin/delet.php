<?php
	include('../configdb.php');
	
		$src = "../".$_GET['src'];
		$sql="DELETE FROM NexusImageUpload WHERE id = ".$_GET['id'].";";
		
		
		if ($conn->query($sql) === TRUE){
			header("Location: http://liamscloud.info/HiddenNexus/Admin/index.php?deleted=success");
			unlink($src);
		}
	
	$conn->close(); 
?>