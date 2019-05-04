<?php
session_start();

if(isset($_SESSION['registar']) && !empty($_SESSION['registar'])){
	echo "Registration Successful";
	header("Location:index.php");
}
else
	echo "Sorry couldn't registar this time. Try again!";

?>