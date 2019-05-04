<?php
session_start();

include "sqlConnect.php";
if(isset($_SESSION['userSession']) && !empty($_SESSION['userSession'])){
	$userSESSION = $_SESSION["userSession"];
echo "You have Logged In<br>";
echo "<strong>Your Infomation</strong><br>";
$sql = "SELECT * FROM userinfo where ID='$userSESSION'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "Your Name: ".$row["Name"]."<br>"."DOB: ".$row["DOB"]."<br>"."Phone Number: ".$row["PhoneNumber"]."<br>"."E-mail: ".$row["Email"];
		
	}
}
echo "<br><br><a href='loggedOut.php'><strong>Log Out</strong></a>";
}
?>