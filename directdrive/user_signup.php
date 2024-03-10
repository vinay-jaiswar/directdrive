<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Create Account</title>
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
          <h1>Create Account</h1>
          <span>Already have an account? <a href="user_login.php">Sign In</a></span>
        </div>
        <div class="form">
          <form method="post">
            <input 
              type="text" 
              name="fname" 
              id="fname"
              placeholder="Full Name" 
              required 
            />
            <input 
              type="tel" 
              name="phone" 
              id="phone" 
              placeholder="Phone Number" 
              pattern="[0-9]{10}"
            />
            <input 
              type="text" 
              name="license" 
              id="license" 
              placeholder="License Number" 
              pattern="[A-Za-z]{2}[0-9]{7}" 
            />

            <div class="login_info_box">
              <p><span class="login_info">&nbsp;&nbsp;e.g.</span> AB1234567</p>
            </div>

            <select name="gender" id="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>   
            <input 
              type="text" 
              name="textfield"
              id="textfield" 
              placeholder="Address"
            />
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
            <button  type="submit" name="save" class="submit-btn">Sign Up</button>
          </form>
          <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              include 'includes/config.php';
              $user_name = $_POST['fname'];
              $phone = $_POST['phone'];
              $license = $_POST['license'];
              $gender = $_POST['gender'];
              $address = $_POST['textfield'];
              $email = $_POST['email'];
              $password = md5($_POST['password']);

              $sql = "INSERT INTO users (user_name, phone, license, gender, address, email, password)            
              VALUES ('$user_name', '$phone', '$license', '$gender', '$address', '$email', '$password')";

              if ($conn->query($sql) === TRUE) {
                echo "<script type = \"text/javascript\">
                alert(\"Sign Up Successful!\");
                window.location = (\"user_login.php\")
                </script>";
              } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
              }
              $conn->close();
            }
          ?>
        </div>
      </div>
    </div>
    <?php
		  include 'includes/footer.php';
	  ?>
  </body>
</html>