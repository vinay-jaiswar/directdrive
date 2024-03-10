<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Privacy Policy - DirectDrive</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />

    <!--FONT AWESOME-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>
  <body>
    <?php
		  include 'includes/header.php';
      include 'includes/config.php';

      $select = "SELECT * FROM policy";
      $result = $conn->query($select);
      $row = $result->fetch_assoc();
	  ?>
    <div class="terms-container">
      <h2 class="name">Privacy Policy</h2>
      <p><?php echo $row['content'] ?></p>
    </div>
    <?php
			include 'includes/footer.php';
		?>
  </body>
</html>
