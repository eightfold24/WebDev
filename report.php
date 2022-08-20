<?php
	include('configdb.php');
	
		$reason = $_GET['reason'];
		$id = $_GET['id'];
		$sql="UPDATE NexusImageUpload SET Reported = 1 WHERE id = ". $id;
		$sql2="UPDATE NexusImageUpload SET ReportReason ='". $reason ."' WHERE id = ". $id;
		if ($conn->query($sql) == TRUE){
		/*	header("Location: http://liamscloud.info/HiddenNexus/view.php?reported=success"); */
			if ($conn->query($sql2) == TRUE) {
				header("Location: http://liamscloud.info/HiddenNexus/view.php?reported=success");
				}
				else {
				}
		}
		else {
		}
	
	$conn->close(); 
?>