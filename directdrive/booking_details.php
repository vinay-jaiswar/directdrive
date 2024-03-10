<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Bookings</title>
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
    ?>
    <div class="car-container">
      <h2>My Bookings</h2>

      <?php
        $user_email = $_SESSION['user_email'];
        $sql = "SELECT cars.car_id, cars.image1, cars.car_make, cars.car_model, cars.rate, hire.hire_id, hire.status, hire.start_date, hire.end_date, hire.total_amount,hire.time 
        FROM cars 
        JOIN hire ON cars.car_id = hire.car_id
        JOIN users ON users.email = hire.user_email
        WHERE users.email = '$user_email'
        ORDER BY hire_id DESC";

        $result = $conn->query($sql);
      ?>  
        <ul>
          <?php 
          while ($row = $result->fetch_assoc()) {
          ?>
            <li>
              <div class="booking_details">
                <div class="car-image">
                  <img src="<?php echo $row['image1']; ?>">
                </div>
                <div class="car-details">
                  <h6>
                    <a href="car_booking.php?car_id=<?php echo $row['car_id']; ?>">
                    <?php echo $row['car_make']; ?> <?php echo $row['car_model']; ?></a>
                  </h6>
                  <p>
                    <strong>From Date:</strong>
                    <?php echo date('d/m/Y', strtotime($row['start_date'])); ?> <br>
                    <strong>To Date:</strong> <?php echo date('d/m/Y', strtotime($row['end_date'])); ?>
                  </p>
                  <p>
                    <strong>Total Days:</strong>
                    <?php
                      $start_timestamp = strtotime($row['start_date']);
                      $end_timestamp = strtotime($row['end_date']);
                      $total_days = ($end_timestamp - $start_timestamp) / (60 * 60 * 24) + 1;
                      echo $total_days;
                    ?> Days
                  </p>
                  <p>
                    <strong>Total Amount:</strong>
                    <?php echo '&#8377;'.number_format($row['total_amount']); ?>
                  </p>
                  <p>
                    <strong>Booking Time:</strong>
                    <td><?php echo date('d/m/Y H:i', strtotime($row['time'])) ?></td>
                  </p>
                </div>
                <div class="car-status">
                  <?php
                    if ($row['status'] == 'Approved') {
                  ?>
                      <p class="confirm">Confirmed</p>
                      <?php
                        $today_date = strtotime(date('Y-m-d'));
                        $start_date = strtotime($row['start_date']);
                        $actual_usage = ($today_date - $start_date) / (60 * 60 * 24) + 1;
                        
                        $amount = ($actual_usage * $row['rate']) - $row['total_amount'];
                        
                        if ($start_date <= $today_date) {
                      ?>
                          <a href="return_booking.php?hire_id=<?php echo $row['hire_id']; ?>&amount=<?php echo $amount; ?>">
                              <button class="view-btn">Return</button>
                          </a>
                  <?php
                        } else {
                  ?>
                          <a href="cancel_booking.php?hire_id=<?php echo $row['hire_id']; ?>&amount=<?php echo $row['total_amount']; ?>">
                            <button class="view-btn">Cancel</button>
                          </a>
                  <?php
                      }
                    } else if ($row['status'] == 'Denied') {
                  ?>
                    <p class="cancel">Denied</p>
                  <?php
                    } else if ($row['status'] == 'Cancelled') {
                  ?>
                    <p class="cancel">Cancelled</p>
                  <?php
                    } else if ($row['status'] == 'Returned') {
                  ?>
                      <p class="return">Returned</p> 
                  <?php 
                    } else {
                  ?>
                    <p class="pending">Not Confirm Yet</p>
                  <?php
                    }
                  ?>
                </div>           
              </div>
            </li>
          <?php
            }
          ?>
        </ul>
    </div>
    <?php
      include 'includes/footer.php';
    ?>
  </body>
</html>