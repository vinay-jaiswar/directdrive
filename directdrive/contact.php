<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us</title>
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
    <div class="form-container">
        <h2>Contact Us</h2>
        <div class="form">
            <form method="POST">
                <input type="text" id="name" name="name" placeholder="Your Name*" required />
                <input type="email" id="email" name="email" placeholder="Email*" required />
                <textarea id="message" name="message" rows="4" placeholder="Message*" required></textarea>
                <button type="submit" name="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
        if ($conn->query($sql) === TRUE) {
          echo "<script type = \"text/javascript\">
            alert(\"Message Sent Successfully!\");
            window.location = (\"contact.php\")
            </script>";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
      }
      include 'includes/footer.php';
    ?>
  </body>
</html>
