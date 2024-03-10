<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "DELETE FROM messages WHERE message_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Message Successfully Deleted!\");
					window.location = (\"message.php\")
				</script>";
	}
?>
