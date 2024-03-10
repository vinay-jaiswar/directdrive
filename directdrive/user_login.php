<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  </head>
  <body>
    <?php
		  include 'includes/header.php';
	  ?>
    <div class="container">      
      <div class="card">
        <div class="card_title">
          <h1>Login</h1>
          <span>Not have an account? <a href="user_signup.php">Sign Up</a></span>
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
          <?php
            if(isset($_POST['login'])) {
              include 'includes/config.php';

              $email = $_POST['email'];
              $password = $_POST['password'];
          
              $hashedPassword = md5($password);

              $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$hashedPassword'"; 
              $result = $conn->query($sql);
              
              if ($result->num_rows > 0) {
                $_SESSION['user_email'] = $email;
                header("Location:  index.php");
              } else {
                echo "Invalid email or password";
              }
              $conn->close();
          }?> 
        </div>
      </div>
    </div>
    <?php
			include 'includes/footer.php';
		?>
  </body>
</html>