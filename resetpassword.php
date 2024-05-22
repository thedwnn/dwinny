<?php
  session_start();

  include("header.php");
  include("navbar.php");

  $page_title = "Reset Password";

  if (!isset($_SESSION['reset_email'])) {
      $_SESSION['status'] = "Session expired or invalid request!";
      header("Location: login.php");
      exit;
  }

  if (isset($_POST['submit'])) {
      include("dbconn.php");

      $email = $_SESSION['reset_email'];
      $old_password = $_POST['old_password'];
      $new_password = $_POST['new_password'];
      $confirm_password = $_POST['confirm_password'];

      // Check if the old password is correct
      $check_password_query = "SELECT password FROM user WHERE email=?";
      $stmt = $conection_db->prepare($check_password_query);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows == 1) {
          $user = $result->fetch_assoc();
          if (password_verify($old_password, $user['password'])) {
              // Old password is correct, proceed with password reset
              if ($new_password === $confirm_password) {
                  // Update the user's password
                  $new_password_hash = password_hash($new_password, PASSWORD_BCRYPT);
                  $update_password_query = "UPDATE user SET password=? WHERE email=?";
                  $stmt = $conection_db->prepare($update_password_query);
                  $stmt->bind_param("ss", $new_password_hash, $email);
                  $stmt->execute();

                  unset($_SESSION['reset_email']); 
                  $_SESSION['status'] = "Password reset successfully. You can now log in.";
                  header("Location: login.php");
                  exit;
              } else {
                  $_SESSION['status'] = " New password do not match please double check ";
              }
          } else {
              $_SESSION['status'] = "Incorrect old password.";
          }
      } else {
          $_SESSION['status'] = "Error: User not found.";
      }
  }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Reset Password</title>
    
    <meta charset="utf-5">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      .floating-form {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
    </style>
  </head>
  <body>
  <div class="card-header text-center"><h4>Reset Password</h4></div> 
  
      <?php if (isset($_SESSION['status'])) : ?>
        <div class="alert alert-warning" role="alert">
        <div class="text-center">
          <?php echo $_SESSION['status']; unset($_SESSION['status']); ?>
        </div>
      <?php endif; ?>
    <div class="container">
      <div class="floating-form">
        <form method="POST" action="reset_password.php">
          <div class="mb-3">
            <label for="old_password" class="form-label">Old Password</label>
            <input type="password" class="form-control" id="old_password" name="old_password" required>
            <label for="new_password" class="form-label">New Password</label>
            <input type="password" class="form-control" id="new_password" name="new_password" required>
            <label for="confirm_password" class="form-label">Confirm New Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
          </div>
          <div class="text-center">
          <button type="submit" class="btn btn-primary" name="submit">Reset Password</button>
        </form>
      </div>
    </div>
  </body>
  </html>