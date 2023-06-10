<?php
	
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Telephone = $_POST['Telephone'];
	$Description = $_POST['Description'];
	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'onlinebusticketreservation');
	if ($conn->connect_error) {
		die('Connection Failed: ' . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO countactus ( Name, Email, Telephone, Description) VALUES ( ?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Name, $Email, $Telephone, $Description);
		$stmt->execute();
		echo "Your Report has been successfully submitted.";

		echo "<script> 
			window.location.replace(\"contactusview.php\");
		</script>";

		$stmt->close();
		$conn->close();
	}
?>
