<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Dashboard</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/responsive.css" type="text/css" />

    <!--FONT AWESOME-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>
  <body>
    <?php
		  include 'menu.php';
	  ?>  
    <section class="admin-table">
      <main>
        <h2>DASHBOARD</h2>

        <div class="table-card">

          <div class="info-container">

            <?php 
              include '../includes/config.php';

              $totalRequestsSql = "SELECT COUNT(*) as totalRequests FROM hire";
              $totalRequestsResult = $conn->query($totalRequestsSql);
              $totalRequestsRow = $totalRequestsResult->fetch_assoc();
              $totalRequests = $totalRequestsRow['totalRequests'];

              $completedRequestsSql = "SELECT COUNT(*) as completedRequests FROM hire WHERE status = 'Returned'";
              $completedRequestsResult = $conn->query($completedRequestsSql);
              $completedRequestsRow = $completedRequestsResult->fetch_assoc();
              $completedRequests = $completedRequestsRow['completedRequests'];

              $pendingRequestsSql = "SELECT COUNT(*) as pendingRequests FROM hire WHERE status IN ('Pending', 'Approved')";
              $pendingRequestsResult = $conn->query($pendingRequestsSql);
              $pendingRequestsRow = $pendingRequestsResult->fetch_assoc();
              $pendingRequests = $pendingRequestsRow['pendingRequests'];

              $deniedRequestsSql = "SELECT COUNT(*) as deniedRequests FROM hire WHERE status = 'Denied'";
              $deniedRequestsResult = $conn->query($deniedRequestsSql);
              $deniedRequestsRow = $deniedRequestsResult->fetch_assoc();
              $deniedRequests = $deniedRequestsRow['deniedRequests'];

              $canceledRequestsSql = "SELECT COUNT(*) as canceledRequests FROM hire WHERE status = 'Cancelled'";
              $canceledRequestsResult = $conn->query($canceledRequestsSql);
              $canceledRequestsRow = $canceledRequestsResult->fetch_assoc();
              $canceledRequests = $canceledRequestsRow['canceledRequests'];

              
              $totalIncomeSql = "SELECT SUM(amount) as totalBalance FROM transaction WHERE admin_id = 1";
              $totalIncomeResult = $conn->query($totalIncomeSql);
              $totalIncomeRow = $totalIncomeResult->fetch_assoc();
              $totalIncome = $totalIncomeRow['totalBalance'];

              $totalCarsSql = "SELECT COUNT(*) as totalCars FROM cars";
              $totalCarsResult = $conn->query($totalCarsSql);
              $totalCarsRow = $totalCarsResult->fetch_assoc();
              $totalCars = $totalCarsRow['totalCars'];

              $totalMessagesSql = "SELECT COUNT(*) as totalMessages FROM messages";
              $totalMessagesResult = $conn->query($totalMessagesSql);
              $totalMessagesRow = $totalMessagesResult->fetch_assoc();
              $totalMessages = $totalMessagesRow['totalMessages'];

              $totalUsersSql = "SELECT COUNT(*) as totalUsers FROM users";
              $totalUsersResult = $conn->query($totalUsersSql);
              $totalUsersRow = $totalUsersResult->fetch_assoc();
              $totalUsers = $totalUsersRow['totalUsers'];
            ?>

            <div class="info info-box">
              <p><i class="fa-regular fa-bell" style="color: blue;"></i> Total Requests</p>
              <h3><?php echo $totalRequests; ?></h3>
            </div>

            <div class="info info-box">
              <p><i class="fa-regular fa-circle-check" style="color: green;"></i> Completed</p>
              <h3><?php echo $completedRequests; ?></h3>
            </div>

            <div class="info info-box">
              <p><i class="fa-regular fa-clock" style="color: orange;"></i> Pending</p>
              <h3><?php echo $pendingRequests; ?></h3>
            </div>

            <div class="info info-box">
              <p><i class="fa-regular fa-circle-xmark" style="color: red;"></i> Denied</p>
              <h3><?php echo $deniedRequests; ?></h3>
            </div>

            <div class="info info-box">
              <p><i class="fa-solid fa-xmark" style="color: red;"></i> Cancalled</p>
              <h3><?php echo $canceledRequests; ?></h3>
            </div>

          </div>

          <a href="client_requests.php"><button class="view-btn main-btn">More</button></a>

          <div class="info-container">

            <div class="info info-bottom">
              <img src="https://i.ibb.co/djBcrHw/image-1.png">
              <h3><?php echo '&#8377;'.number_format($totalIncome); ?></h3>
              <p>Total Income</p>
              <a href="transaction.php"><button class="view-btn">More</button></a>
            </div>

            <div class="info info-bottom">
              <img src="https://i.ibb.co/Z2j06g7/image-2.png">
              <h3><?php echo $totalCars; ?></h3>
              <p>Total Cars</p>
              <a href="cars_list.php"><button class="view-btn">More</button></a>
            </div>

            <div class="info info-bottom">
              <img src="https://i.ibb.co/09sxbwP/image-3.png">
              <h3><?php echo $totalMessages; ?></h3>
              <p>Total Messages</p>
              <a href="message.php"><button class="view-btn">More</button></a>
            </div>

            <div class="info info-bottom">
              <img src="https://i.ibb.co/7pXLFLb/image-4.png">
              <h3><?php echo $totalUsers; ?></h3>
              <p>Total Users</p>
              <a href="users.php"><button class="view-btn">More</button></a>
            </div>

          </div>

        </div> 
      </main>
    </section> 
  </body>
</html>
