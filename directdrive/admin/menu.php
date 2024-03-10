<?php
	session_start();
	error_reporting(E_NOTICE);
	if(!$_SESSION['admin_email']){
		header("location: admin_login.php");
	}
?>
<header>
	<h2>Admin</h2>
	<ul>
		<li><a href="index.php">Dashboard</a></li>
		<li><a href="cars_list.php">Cars</a></li>
		<li><a href="client_requests.php">Requests</a></li>
		<li><a href="transaction.php">Transaction</a></li>
		<li><a href="users.php">Users</a></li>
		<li><a href="message.php">Messages</a></li>
		<li><a href="privacy.php">Policy</a></li>
		<li><a href="terms.php">Terms</a></li>
		<li><a href="logout.php">Log out</a></li>
	</ul>
</header>