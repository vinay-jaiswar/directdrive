<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Dashboard</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../css/responsive.css" type="text/css"/>
  </head>
  <body>
    <?php
      include 'menu.php';
    ?>
    <main>
      <section class="admin-table">
        <h2>Transaction</h2>
        
        <div class="table-card">
          <?php
            include '../includes/config.php';
            $select = "SELECT
            transaction.transaction_id,
            transaction.hire_id,
            transaction.amount,
            transaction.timestamp,
            transaction.status,
            users.user_id,
            users.user_name,
            cars.car_id,
            cars.car_make,
            cars.car_model
            FROM transaction
            JOIN hire ON transaction.hire_id = hire.hire_id
            JOIN users ON hire.user_id = users.user_id
            JOIN cars ON hire.car_id = cars.car_id
            ORDER BY transaction_id DESC";

            $result = $conn->query($select);
          ?>
          <div class="table-container">
            <table width="100%">
              <tr>
                <th>ID</th>
                <th>Hire ID</th>
                <th>Name</th>
                <th>Car Name</th>
                <th>Amount</th>
                <th>Desc.</th>
                <th>Time</th>
              </tr>
              <?php
                while ($row = $result->fetch_assoc()) {
                  $formatted_amount = "₹" . number_format(abs($row['amount']));
                  if ($row['amount'] < 0) {
                      $formatted_amount = "-" . $formatted_amount;
                  }
              ?>
              <tr>
                <td><?php echo $row['transaction_id'] ?></td>
                <td><?php echo $row['hire_id'] ?></td>
                <td><?php echo $row['user_name'] ?></td>
                <td><?php echo $row['car_make'] ?> <?php echo $row['car_model'] ?></td>
                <td><?php echo $formatted_amount ?></td>
                <td><?php echo $row['status'] ?></td>
                <td><?php echo date('d/m/Y H:i', strtotime($row['timestamp'])) ?></td>
              </tr>
              <?php
                }
              ?>
            </table>
          </div>
        </div> 
      </main>
    </section> 
  </body>
</html>
