<?php

include 'config.php';

$ID = $_GET['ID'];
$sql = " DELETE FROM `feedback` WHERE ID = $ID " ;
$query = mysqli_query($conn,$sql);




    //echo "Deleted!!!!";

	//header("location:pay.php "<script>alert("hellooo");</script>");


  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully  Deleted');
    window.location.href='feedbackview.php';
    </script>");




?>