<?php

include 'config.php';

$id = $_GET['id'];
$sql = " DELETE FROM `payment` WHERE id = $id " ;
$query = mysqli_query($conn,$sql);




    //echo "Deleted!!!!";

	//header("location:pay.php "<script>alert("hellooo");</script>");


  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted');
    window.location.href='paymentview.php';
    </script>");




?>