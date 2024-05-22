<?php
session_start();

include("header.php");
include("navbar.php");

$page_title = "Forgot Password";

if (isset($_POST['submit'])) {
    include("dbconn.php");

    $email = trim($_POST['email']);

    // Check if the email exists
    $check_user_query = "SELECT * FROM user WHERE email=? LIMIT 1";
    $stmt = $conection_db->prepare($check_user_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['reset_email'] = $user['email']; // Store email in session
        header("Location: reset_password.php");
        exit;
    } else {
        $_SESSION['status'] = "No account found with that email address: Please enter the valid email address";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forgot Password</title>
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
      padding: 75px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
<h4 class="text-center">Forgot Password</h4>
</div>

<div class="card-header text-center">
          <?php if (isset($_SESSION['status'])) : ?>
            <div class="alert alert-info" role="alert">
              <?php echo $_SESSION['status']; unset($_SESSION['status']); ?>
            </div>
          <?php endif; ?>

  <div class="container">

          <div class="floating-form">
            <form method="POST" action="forgot_password.php">
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Confirm</button>
            </form>
          </div>
        </div>
</body>
</html>