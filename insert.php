<?php
			$server = "127.0.0.1";
			$user = "Salomon";
			$passw = "123456";
			$database = "webshop";
			$fname = $_POST['firstName'];
			$lname = $_POST['lastName'];
			$connection = mysqli_connect($server, $user, $passw, $database) or die("Verbindung konnte nicht hergestellt werden!");
			$sql = "INSERT INTO `customer`(`firstname`, `lastname`) VALUES ($fname,$lname)";
			if (mysqli_query($connection, $sql)){
				echo "Daten erfolgreich gespreichert";
			}
			else{
				echo "Daten nicht gespeichert";
			}
	
			
			
			

?>