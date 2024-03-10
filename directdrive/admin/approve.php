<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$sql = "UPDATE hire SET status = 'Approved' WHERE hire_id = '$id'";
	$result = $conn->query($sql);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Booking is Approved\");
					window.location = (\"client_requests.php\")
				</script>";
	}
?>
