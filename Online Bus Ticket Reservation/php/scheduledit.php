
<?php
    include_once 'config.php';

    if (isset($_POST['Submit'])) {
        // Rest of the code for processing the form data
    }
?>

<?php
	 $bus_no = $_POST['bus_no'];
     $start_time = $_POST['start_time'];
     $end_time = $_POST['end_time'];
     $start_location = $_POST['start_location'];
     $end_location=$_POST['end_location'];
     $type=$_POST['type'];
	
	
	if (mysqli_query($conn, "UPDATE busschedule SET `bus_no`='".$bus_no."', `start_time`='".$start_time."', `end_time`='".$end_time."', `start_location`='".$start_location."', `end_location`='".$end_location."', `type`='".$type."' WHERE `id`='".$id."'")){

		echo "<script>alert('update')</script>";
		header("Location:allscheduledetail.php");
		//can redirect to the main page.....
	}
	else{
		echo"<script>alert('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);
?>