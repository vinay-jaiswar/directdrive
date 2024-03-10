<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$sql = "UPDATE hire SET status = 'Denied' WHERE hire_id = '$id'";
	$result = $conn->query($sql);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Booking is Denied!\");
					window.location = (\"client_requests.php\")
				</script>";
	}
?>
