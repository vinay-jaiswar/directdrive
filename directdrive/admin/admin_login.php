<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/responsive.css"/>
  </head>
  <body> 
    <div class="admin-container container">
      <div class="card">
        <div class="card_title">
          <h1>Admin Login</h1>
        </div>
        <div class="form">
          <form method="post">
            <input 
              type="email" 
              name="email" 
              placeholder="Email" 
              id="email" 
            />
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Password"
              required
            />
            <button  type="submit" name="login" class="submit-btn">Login</button>
          </form>

          <div class="login_info_box-admin">
            <p><span class="login_info">mail:</span> admin@gmail.com &nbsp;&nbsp;&nbsp;<span class="login_info">pass:</span> password</p>
          </div>
          
          <?php
            if(isset($_POST['login'])) {
              include '../includes/config.php';

              $email = $_POST['email'];
              $password = $_POST['password'];
          
              $hashedPassword = md5($password);
              
              $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$hashedPassword'"; 
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                session_start();
                $_SESSION['admin_email'] = $email;
                
                header("Location: index.php");
              } else {
                  echo "Invalid email or password";
              }
              $conn->close();
            }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>