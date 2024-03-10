<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DirectDrive</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!--FONT AWESOME-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>
  <body> 
    <?php
		  include 'includes/header.php';
	  ?>   
    <main>
      <section class="product-list">
        <h2>Featured Products</h2>
        <?php
          include 'includes/config.php';
          $sql = "SELECT * FROM cars WHERE availability = 1";
          $result = $conn->query($sql); 
          $conn->close(); 
        ?>

        <ul>
        <?php
          while($row = $result->fetch_assoc()){ 
        ?>
          <li>
            <img src="<?php echo $row['image1'];?>" alt="Car Image"/>
            <h3><?php echo $row['car_make'];?> <?php echo $row['car_model'];?></h3>

            <p>
              <?php echo '&#8377;' . number_format($row['rate']) . '/Day';?>
            </p>
            <a href="car_booking.php?car_id=<?php echo $row['car_id']; ?>"><button class="view-btn">View</button></a>
          </li>
          <?php
				  }
			  ?>
        </ul>
      </section>
    </main>   
    <?php
      include 'includes/footer.php';
    ?>
  </body> 
</html>
