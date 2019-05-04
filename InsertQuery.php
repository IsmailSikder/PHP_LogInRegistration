<?php
//Insert data on submit the form into database
	
	$stmt = ("INSERT INTO userinfo (name,dob, phoneNumber, Email, password) 
	VALUES ('$name','$dob','$phoneNumber','$email','$password')");
	
if ($conn->query($stmt) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt . "<br>" . $conn->error;
}
 ?>