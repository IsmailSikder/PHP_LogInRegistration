<html>
<head>
<?php

session_start();
include "sqlConnect.php";
?>
</head>
<body>


<form method="POST" action="logIn.php">

 <table cellpadding="4">
	
	<tr>
		<td>E-mail*</td>
		<td> <input type="text" name="email" value=""/></td>
	</tr>
	<tr>
		<td>Password*</td>
		<td> <input type="password" name="password" value=""/></td>
	</tr>
	<tr>
        <td></td>
        <td><input type="submit" name="login" value="LogIn"/></td>
    </tr>
	</table>

</form>
<?php
if(isset($_POST['login'])){

$username=$_POST["email"];
$password=$_POST["password"];
//Sanitizing username and password
$username = stripslashes($username);
$password = stripslashes($password);

if(!empty($username && $password)){
	
$sql = "SELECT ID FROM userinfo where Email = '$username' and Password='$password'";
$result = $conn->query($sql);
	if ($result->num_rows == 1) {
    // output data of each row
	    $row = $result->fetch_assoc();
		 $userid = $row["ID"];
		$_SESSION['userSession']=$userid;
		echo "You have logged in successfuly";
		header("Location:memberOnly.php");
	}
	else
		echo "User name and password does not match";
}
else
	echo "Enter Username and password";
}

?>
<P>Not a member <a href="Registration.php">Registar Here!</a> </p>
</body>
</html>