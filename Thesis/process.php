<?php

		$username = $_POST['user'];
		$password = $_POST['pass'];
				
			$servername = "localhost";
			$rootname = "root";
			$rootpassword = "legitpassword1";
			$dbname = "mineral";

			// Create connection
			$conn = new mysqli($servername, $rootname, $rootpassword, $dbname);
			// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
		$sql = "select * from users where username = '$username' and password = '$password'";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		if($row['username'] == $username && $row['password'] ==$password){
			echo "Login Successful! Welcome ".$row['username'];
		} else {
			echo " Failed to Login, please try again.";
		}
	
?>