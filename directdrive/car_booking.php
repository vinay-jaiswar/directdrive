<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Car Details Page</title>
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
      include 'includes/config.php';
      include 'includes/header.php';
      $car_id = $_REQUEST['car_id'];

      $sql = "SELECT * FROM cars WHERE car_id = $car_id";
      $result = $conn->query($sql); 
      if ($result->num_rows > 0) 
      { 
        $row = $result->fetch_assoc();
      } else { 
        echo "Car details not found"; 
      }  
    ?>

    <div class="car-booking-container">
      <div class="name"><?php echo $row['car_make']; ?> <?php echo $row['car_model']; ?></div>
      <div class="main-img-container">
        <img id="mainImage" src="<?php echo $row['image1']; ?>" alt="Car Image" class="main-image" />
      </div>
      <div class="thumbnail-container">
        <img
          src="<?php echo $row['image1']; ?>"
          alt="Thumbnail 1"
          class="thumbnail-image"
          onclick="changeImage(this.src)"
        />
        <img
          src="<?php echo $row['image2']; ?>"
          alt="Thumbnail 2"
          class="thumbnail-image"
          onclick="changeImage(this.src)"
        />
        <img
          src="<?php echo $row['image3']; ?>"
          alt="Thumbnail 3"
          class="thumbnail-image"
          onclick="changeImage(this.src)"
        />
        <img
          src="<?php echo $row['image4']; ?>"
          alt="Thumbnail 4"
          class="thumbnail-image"
          onclick="changeImage(this.src)"
        />
        <img
          src="<?php echo $row['image5']; ?>"
          alt="Thumbnail 5"
          class="thumbnail-image"
          onclick="changeImage(this.src)"
        />
      </div>

      <div class="thumb-divider"></div>

      <script>
        function changeImage(newSrc) {
            document.getElementById('mainImage').src = newSrc;
        }
      </script>

      <div class="car-price">
        Price: <p><?php echo '&#8377;' . number_format($row['rate']) . '/Day';?><p>
      </div>

    <div class="details-container">
      <div class="car-booking-box">
        <h2><i class="fa-solid fa-circle-info"></i> Car Details</h2>
        <p><i class="fa-solid fa-industry"></i></i>Make: <?php echo $row['car_make']; ?></p>
        <p><i class="fa-solid fa-car"></i>Model: <?php echo $row['car_model']; ?> </p>
        <p><i class="fa-solid fa-calendar"></i>Reg. Year: <?php echo $row['year']; ?></p>
        <p><i class="fa-solid fa-user-group"></i>Capacity: <?php echo $row['capacity']; ?> passengers</p>
        <p><i class="fa-solid fa-gears"></i>Transmission: <?php echo $row['transmission']; ?></p>
        <p><i class="fa-solid fa-tachograph-digital"></i>License Plate: <?php echo $row['license_plate']; ?></p>
        <p><i class="fa-solid fa-gas-pump"></i>Fuel Type: <?php echo $row['fuel_type']; ?></p>
        <p><i class="fa-solid fa-road"></i>Mileage: <?php echo $row['mileage']; ?>KM/L</p>
        <p><i class="fa-solid fa-location-dot"></i>Location: <?php echo $row['car_location']; ?></p>
      </div>

      <div class="booking-form">
        <h2>Book this Car</h2>
        <form method="POST">
          <label for="start-date">From:</label>
          <input type="date" id="start-date" name="start-date" required />

          <label for="end-date">To:</label>
          <input type="date" id="end-date" name="end-date" required />

          <button type="submit" class="submit-btn">Book Now</button>
        </form>
      </div>

    </div>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (!isset($_SESSION['user_email'])) {
        header("Location: user_login.php");
        exit();
      } else {
        $user_email = $_SESSION['user_email'];
        $query = "SELECT user_id FROM users WHERE email = '$user_email'";
        $result = $conn->query($query); 
        $rows = $result->fetch_assoc(); 
        $user_id = $rows['user_id'];

        $start_date = $_POST['start-date'];
        $end_date = $_POST['end-date'];

        $today = date("Y-m-d");
        if ($start_date < $today || $end_date <= $today || $start_date > $end_date || $start_date == $end_date) {
          echo "<script type='text/javascript'>
                alert('Invalid date selection. Please choose valid dates.');
                </script>";
        } else {
          $days = (strtotime($end_date) - strtotime($start_date)) / (60 * 60 * 24) + 1;
          $total_amount = $days * $row['rate'];

          $sql_insert = "INSERT INTO hire (car_id, user_id, start_date, end_date, total_amount, user_email, status)
                      VALUES ($car_id, $user_id, '$start_date', '$end_date', $total_amount, '$user_email', 'Pending')";

          if ($conn->query($sql_insert) === TRUE) {
            $hire_id = $conn->insert_id;

            $sql_insert_transaction = "INSERT INTO transaction (hire_id, amount, status) VALUES ($hire_id, $total_amount, 'Car Booked')";
            if ($conn->query($sql_insert_transaction) === TRUE) {
                echo "<script type='text/javascript'>
                      alert('Booking Placed Successfully! Wait for Admin Approval..');
                      window.location = ('booking_details.php');
                      </script>";
            } else {
                echo "Error inserting into transaction table: " . $conn->error;
            }
          } else {
            echo "Error inserting into hire table: " . $conn->error;
          }
          }
      }
    }
    $conn->close();
    include 'includes/footer.php';
    ?>
  </body>
</html>
