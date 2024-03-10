<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Users List</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../css/responsive.css" type="text/css"/>
    <script type="text/javascript">
      function sureToApprove(id){
        if(confirm("Are you sure you want to delete this user?")){
          window.location.href ='delete_user.php?id='+id;
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
        <h2>Our Users</h2>
        
        <div class="table-card">
          <?php
            include '../includes/config.php';
            $select = "SELECT * FROM users ORDER BY user_id DESC";
            $result = $conn->query($select);
          ?>
          <div class="table-container">
            <table width="100%">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone No.</th>
                <th>License No.</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Email</th>
                <th>Control</th>
              </tr>
              <?php
              while ($row = $result->fetch_assoc()) {
              ?>
                <tr>
                  <td><?php echo $row['user_id'] ?></td>
                  <td><?php echo $row['user_name'] ?></td>
                  <td><?php echo $row['phone'] ?></td>
                  <td><?php echo $row['license'] ?></td>
                  <td><?php echo $row['gender'] ?></td>
                  <td><?php echo $row['address'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td>
                    <a href="javascript:sureToApprove(<?php echo $row['user_id'];?>)" class="ico del">Delete</a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </table>
          <div>
        </div> 
      </main>
    </section> 
  </body>
</html>