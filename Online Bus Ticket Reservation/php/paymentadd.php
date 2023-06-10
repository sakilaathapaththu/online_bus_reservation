<?php
	
	$start_location = $_POST['start_location'];
	$end_location = $_POST['end_location'];
	$price = $_POST['price'];
	$cardno = $_POST['cardno'];
	$expdate = $_POST['expdate'];
    $ccv = $_POST['ccv'];
	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'onlinebusticketreservation');
	if ($conn->connect_error) {
		die('Connection Failed: ' . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO payment ( start_location, end_location, price, cardno, expdate, ccv) VALUES ( ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $start_location, $end_location, $price, $cardno, $expdate, $ccv);
		$stmt->execute();
		echo "payment successfully submitted.";

		echo "<script> 
			window.location.replace(\"paymentview.php\");
		</script>";

		$stmt->close();
		$conn->close();
	}
?>