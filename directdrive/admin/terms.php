<!DOCTYPE html>
<html lang="en">
  <head>
    <title>T&C</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../css/responsive.css" type="text/css" />

    <!-- QUILL Editor -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  </head>
  <body>
    <?php
      include 'menu.php';
      include '../includes/config.php';

      $select = "SELECT * FROM terms";
      $result = $conn->query($select);
      $row = $result->fetch_assoc();
    ?>
    <div class="terms-container">
      <h2 class="name">Terms & Conditions</h2><br>
      <div class="form">
        <form method="POST">
          <label>Content:</label>
          <div id="editor"><?php echo $row['content'] ?></div>
          <input type="hidden" name="content" id="hidden-content" value="">
          <button type="submit" name="submit" class="submit-btn">Submit</button>
        </form>
      </div><br>
      <p><strong>Last Updated:</strong> <td><?php echo date('d/m/Y H:i', strtotime($row['last_updated'])) ?></td>
    </div>

    <script>
      var quill = new Quill('#editor', {
        theme: 'snow', 
        placeholder: 'Write your terms and conditions here...',
      });

      document.querySelector('form').addEventListener('submit', function (e) {
        document.querySelector('#hidden-content').value = quill.root.innerHTML.trim();
      });
    </script>

    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $content = $_POST['content'];
  
      $sql = "UPDATE terms SET content=? WHERE id=1";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $content);
  
      if ($stmt->execute()) {
        echo "<script type=\"text/javascript\">
            alert(\"Terms & Conditions Successfully Updated!\");
            window.location = (\"terms.php\");</script>";
      } else {
        echo "Error: " . $stmt->error;
      }
      $stmt->close();
      $conn->close();
    }
    ?>
  </body>
</html>
