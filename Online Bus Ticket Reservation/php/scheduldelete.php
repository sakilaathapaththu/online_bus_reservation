<?php

include 'config.php';

$id = $_GET['id'];
$sql = " DELETE FROM `busschedule` WHERE id = $id " ;
$query = mysqli_query($conn,$sql);




    //echo "Deleted!!!!";

	//header("location:pay.php "<script>alert("hellooo");</script>");


  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted');
    window.location.href='allscheduledetail.php';
    </script>");




?>