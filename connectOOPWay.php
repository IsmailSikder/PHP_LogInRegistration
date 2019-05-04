<?php

Class ConnectOOPWay{
	private $servername;
    private $username;
    private $password;
    private $dbname;
	public function __construct(){
		$this->connect();
	}
	
	private function connect(){
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "ismail08";
		$this->dbname = "contact";
		$conn = new mysqli($this->servername, $this->username, $this->password,$this->dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed ");
		}
		else
			echo "connection success";
		
		$sql = "SELECT * FROM contactinfo";
        $result = $conn->query($sql);
		$numRow = $result->num_rows;
		if($numRow>0){
			while($row = $result->fetch_assoc()) {
				echo "Name " .$row["name"]." Phone Number ".$row["phoneNumber"]." Email ".$row["email"]." Mail ".$row["mail"]." Fax ".$row["Fax"]."</tr>";
			}
		}
		else
			echo "You have zero queries";
	}

	public function getData(){
		
	}
	
}


?>