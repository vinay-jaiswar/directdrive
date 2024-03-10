<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Dashboard</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../css/responsive.css" type="text/css"/>
    <script type="text/javascript">
      function sureToApprove(id){
        if(confirm("Are you sure you want to delete this message?")){
          window.location.href ='delete_msg.php?id='+id;
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
        <h2>Client Messages</h2>
        
        <div class="table-card">
          <?php
            include '../includes/config.php';
            $select = "SELECT * FROM messages ORDER BY message_id DESC";
            $result = $conn->query($select);
          ?>
          <div class="table-container">
            <table width="100%">
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Time</th>
                <th>Control</th>
              </tr>
              <?php
              while ($row = $result->fetch_assoc()) {
              ?>
              <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['message'] ?></td>
                <td><?php echo date('d/m/Y H:i', strtotime($row['time'])) ?></td>
                <td>
                  <a href="javascript:sureToApprove(<?php echo $row['message_id'];?>)">Delete</a>
                  <a href="mailto:<?php echo $row['email']?>">Reply</a>
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