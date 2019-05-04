<!doctype html>
<html>
<head>
<title>SQL connection</title>
</head>

<body>
 <?php

$servername = "localhost";
$username = "root";
$password = "ismail08";
$dbname = "contact";

// Create connection
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed ");
}
else 
	echo "Successfull";
?>
<body>
</html>