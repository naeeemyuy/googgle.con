
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user === 'users' && $pass === 'nameandpassword') {
        $_SESSION['loggedin'] = true;
    } else {
        echo "<h2>Wrong Credentials</h2>";
        exit;
    }
}
if (!isset($_SESSION['loggedin'])) {
    echo "<h2>Unauthorized Access</h2>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Welcome to Admin Panel</h1>
    <p>This is the REDMON dashboard.</p>
  </div>
</body>
</html>
