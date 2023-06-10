<?php

include 'config.php';

$ID = $_GET['ID'];
$sql = " DELETE FROM `countactus` WHERE ID = $ID " ;
$query = mysqli_query($conn,$sql);




    //echo "Deleted!!!!";

	//header("location:pay.php "<script>alert("hellooo");</script>");


  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted');
    window.location.href='contactusview.php';
    </script>");




?>