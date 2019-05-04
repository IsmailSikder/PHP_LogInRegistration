<html>
<head>
<?php
session_start();
include "sqlConnect.php";
?>
</head>
<body>

<?php
?>

<form method="POST" action="Registration.php">
 <h1><strong>Registar Here!</strong></h1>
        Enter your information here.
 <hr>
 <table cellpadding="4">
	<tr>
		<td>Name*</td> 
		<td><input type="text" name="name" value=""/></td>
	</tr>
	<tr>
		<td>DOB*</td>
		<td> <input type="text" name="dob" value=""/></td>
	</tr>
	<tr>
		<td>Phone Number*</td>
		<td> <input type="text" name="phoneNumber" value=""/></td>
	</tr>
	<tr>
		<td>E-mail*</td>
		<td> <input type="text" name="email" value=""/></td>
	</tr>
	<tr>
		<td>Password*</td>
		<td> <input type="password" name="password" value=""/></td>
	</tr>
	<tr>
		<td>Verify Password*</td>
		<td> <input type="password" name="VerifyPassword" value=""/></td>
	</tr>
	
	<tr>
        <td></td>
        <td><input type="submit" name="submit" value="Registar"/></td>
		<td>
		
		</td>
    </tr>
	</table>
</form>


<?php
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$phoneNumber = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$VerifyPassword = $_POST['VerifyPassword'];
	if(($name && $dob && $email && $password && $VerifyPassword)!=null){
		if($password!=$VerifyPassword){
			echo "password does not match";
		}
		else{
		   $sql = "SELECT ID FROM userinfo where Email='$email'";
		   $result = $conn->query($sql);
		   if($result->num_rows > 0){
			   echo "This account already exist";
		   }
		   else {
			include "InsertQuery.php";
			$_SESSION['registar']= $_POST['submit']; 
			echo "<br>You have registar Successfully";
			header("Location:RegistarSuccess.php");
			}
		   
		}
		
	
	}
	else{
		echo "* Filed are require";
	}
	
}

?>
<P>Already a member <a href="logIn.php">Click Here!</a> </p>
</body>
</html>