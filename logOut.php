<?php

// Session/Cookie Code
session_start();
session_destroy();
// /. End Of Session/Cookie Code

// Required Files
require_once ('config.php');
// /. End Of Required Files

// Open Database Connection
$conn = new mysqli($host, $user, $pwrd, $dbase);
if (mysqli_connect_errno()) {
    printf("Database connection failed due to: %s\n", mysqli_connect_error());
    exit();
}
// /. End Of Open Database Connection

// Form Validation

// /. End Of Form Validation

?>
<!doctype html>
<html>
<head>
    <title>GitHub Session/Cookie Test</title>
</head>
<body>

<p>You Have Been Logged Out</p>
<a href="index.php">Go To Index Page</a><br>
<a href="first.php">Go To First Page</a><br>
<a href="second.php">Go To Second Page</a><br>
<a href="login.php">Log In</a><br>
<a href="product.php">Products</a><br>
<a href="logOut.php">Log Out</a>
</body>
</html>
<?php
// Close Database Connection
mysqli_close($conn);
// /. End Of Close Database Connection
?>