
<?php
    include_once 'config.php';

    if (isset($_POST['Submit'])) {
        // Rest of the code for processing the form data
    }
?>

<?php
	 $ID=$_POST['ID'];
    $Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Ratings = $_POST['Ratings'];
	$Description = $_POST['Description'];
	
	
	if (mysqli_query($conn, "UPDATE feedback SET `Name`='".$Name."', `Email`='".$Email."', `Ratings`='".$Ratings."', `Description`='".$Description."' WHERE `ID`='".$ID."'")){

		echo "<script>alert('Data Inserted Succesfully')</script>";
		header("Location:feedbackview.php");
		//can redirect to the main page.....
	}
	else{
		echo"<script>alert('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);
?>