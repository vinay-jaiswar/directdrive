<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hire Requests</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../css/responsive.css" type="text/css"/>
    <script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to Approve this request?")){
				window.location.href ='approve.php?id='+id;
			}
    }
    function sureToDeny(id){
			if(confirm("Are you sure you want to Deny this request?")){
				window.location.href ='deny.php?id='+id;
			}
    }
    </script>
  </head>
  <body>
    <?php
      include 'menu.php';
    ?>
    <main>
      <section class="admin-table">
        <h2>Client Requests</h2>

        <div class="table-card">
        <?php
          include '../includes/config.php';
          $sql = "SELECT
              cars.car_make,
              cars.car_model,
              users.user_name,
              hire.start_date,
              hire.end_date,
              hire.time,
              hire.total_amount,
              hire.status,
              hire.hire_id
              FROM hire JOIN cars ON hire.car_id = cars.car_id
              JOIN users ON hire.user_id = users.user_id
              ORDER BY hire.hire_id DESC";

          $result = $conn->query($sql);
        ?>
          <div class="table-container">
            <table width="100%">
              <tr>
                <th>Hire ID</th>
                <th>Client Name</th>
                <th>Car Name</th>
                <th>Period</th>
                <th>Time</th>
                <th>Total</th>
                <th>Status</th>
                <th>Control</th>
              </tr>
              <?php
              while ($row = $result->fetch_assoc()) {
              ?>
                <tr>
                  <td><?php echo $row['hire_id'] ?></td>
                  <td><?php echo $row['user_name'] ?></td>
                  <td><?php echo $row['car_make'] ?> <?php echo $row['car_model'] ?></td>
                  <td><?php echo date('d/m/Y', strtotime($row['start_date'])) ?> - <?php echo date('d/m/Y', strtotime($row['end_date'])) ?></td>
                  <td><?php echo date('d/m/Y H:i', strtotime($row['time'])) ?></td>
                  <td><?php echo '&#8377;' . number_format($row['total_amount']) ?></td>
                  <td><?php echo $row['status'] ?></td>
                  <td>
                      <a href="javascript:sureToDeny(<?php echo $row['hire_id']; ?>)">Deny</a>
                      <a href="javascript:sureToApprove(<?php echo $row['hire_id']; ?>)">Approve</a>
                  </td>
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