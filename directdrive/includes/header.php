<?php
	session_start();
	error_reporting(E_NOTICE);
?>
<header>
  <h2>DirectDrive</h2>
  <?php
    if(!$_SESSION['user_email']){
  ?>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="user_login.php">Login</a></li>
  </ul>
  <?php
    } else{
  ?>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="booking_details.php">My Booking</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
  <?php
    }
  ?>
</header>