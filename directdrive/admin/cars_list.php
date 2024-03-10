<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cars List</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../css/responsive.css" type="text/css"/>
  </head>
  <body>
    <?php
      include 'menu.php';
    ?>
    <main>
      <section class="admin-table">
        <h2>Our Cars</h2>
        
        <div class="table-card">
        <?php
          include '../includes/config.php';
          $select = "SELECT * FROM cars WHERE availability = '1' ORDER BY car_id DESC";
          $result = $conn->query($select);
        ?>
          <div class="table-container">
            <table width="100%">
              <tr>
                <th>ID</th>
                <th>Car Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Mileage</th>
                <th>Transmission</th>
                <th>Fuel</th>
                <th>Location</th>
                <th>Plate</th>
                <th>Capacity</th>
                <th>Price</th>
                <th>Control</th>
              </tr>
              <?php
              while ($row = $result->fetch_assoc()) {
              ?>
                <tr>
                  <td><?php echo $row['car_id'] ?></td>
                  <td><?php echo $row['car_make'] ?></td>
                  <td><?php echo $row['car_model'] ?></td>
                  <td><?php echo $row['year'] ?></td>
                  <td><?php echo $row['mileage'] ?></td>
                  <td><?php echo $row['transmission'] ?></td>
                  <td><?php echo $row['fuel_type'] ?></td>
                  <td><?php echo $row['car_location'] ?></td>
                  <td><?php echo $row['license_plate'] ?></td>
                  <td><?php echo $row['capacity'] ?></td>
                  <td><?php echo '&#8377;' . number_format($row['rate']) ?></td>
                  <td>
                      <a href="javascript:sureToApprove(<?php echo $row['car_id']; ?>)" class="ico del">Delete</a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </table>
          </div><br>
          <a href="add_cars.php" class="button">Add New Car</a>
        </div> 
      </main>
    </section> 
  </body>
</html>