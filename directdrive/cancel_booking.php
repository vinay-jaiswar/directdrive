<?php
	include 'includes/config.php';
	$hire_id = $_REQUEST['hire_id'];
  $amount = $_REQUEST['amount'];
  
	$sql = "UPDATE hire SET status = 'Cancelled' WHERE hire_id = '$hire_id'";
	$result = $conn->query($sql);

  $sql = "INSERT INTO transaction (hire_id, amount, status) VALUES ('$hire_id', -$amount, 'Car Cancelled')";
	$result = $conn->query($sql);
  
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Booking Cancelled Successfully!\");
					window.location = (\"booking_details.php\")
				</script>";
	}
?>
