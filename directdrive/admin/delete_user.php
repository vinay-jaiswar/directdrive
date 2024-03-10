<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "DELETE FROM users WHERE user_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"User Successfully Deleted!\");
					window.location = (\"users.php\")
				</script>";
	}
?>
