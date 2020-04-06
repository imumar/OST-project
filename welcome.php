<?php
//include auth_session.php file on all user panel pages
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
