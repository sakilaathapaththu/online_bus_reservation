<?php
	
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Ratings = $_POST['Ratings'];
	$Description = $_POST['Description'];
	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'onlinebusticketreservation');
	if ($conn->connect_error) {
		die('Connection Failed: ' . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO feedback ( Name, Email, Ratings, Description) VALUES ( ?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Name, $Email, $Ratings, $Description);
		$stmt->execute();
		echo "Your Report has been successfully submitted.";

		echo "<script> 
			window.location.replace(\"feedbackview.php\");
		</script>";

		$stmt->close();
		$conn->close();
	}
?>
