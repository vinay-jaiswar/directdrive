<?php
	include 'includes/config.php';

	$hire_id = $_REQUEST['hire_id'];
	$amount = $_REQUEST['amount'];

	if ($amount < 0) {
		$sql = "INSERT INTO transaction (hire_id, amount, status) 
						VALUES ('$hire_id', '$amount', 'Refund: Insufficient Usage')";
		$result = $conn->query($sql);

	} elseif ($amount > 0) {
		$sql ="INSERT INTO transaction (hire_id, amount, status) 
						VALUES ('$hire_id', '$amount', 'Fine: Exceeded Usage')";
		$result =$conn->query($sql);
	}

	$sql ="UPDATE hire SET status ='Returned' WHERE hire_id ='$hire_id'";
	$result =$conn->query($sql);

	if ($result === TRUE) {
		echo "<script type=\"text/javascript\">
				alert(\"Car Returned Successfully!\");
				window.location = (\"booking_details.php\")
		</script>";
	}
?>