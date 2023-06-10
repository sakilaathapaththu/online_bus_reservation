<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    
    <link rel="stylesheet" href="../css/apply_sponsership.css">
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .input-field {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            text-align: left;
        }
        
        .submit-btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #ff7200;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        
        .submit-btn:hover {
            background-color: #ff5500;
        }
        
        .submit-btn:active {
            background-color: #ff8800;
        }
    </style>
</head>
<body>
<header>
    <div class="icon">Route<b style="color: #ff7200">M</b>aster</div>
    <div class="search_box">
        <input type="search" placeholder="Search" />
        <a href="#"><i class="fa fa-search icon-search"></i></a>
    </div>
    <ol>
    <li><a href="../home.html">Home</a></li>
          <li><a href="searchschedule.php">Schedules</a></li>
          <li><a href="addbusschedul.php">Add Schedules</a></li>
          <li><a href="../Feedback.html">Feedback</a></li>
          <li><a href="../Contactus.html">Contact</a></li>
          <li><a href="login.php">LogIn</a></li>
    </ol>
</header>




<?php

session_start();

  include("config.php");
  include("function1.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $bus_no = $_POST['bus_no'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $start_location = $_POST['start_location'];
    $end_location=$_POST['end_location'];
    $type=$_POST['type'];
  


 


    if(!empty($start_location) && !empty($end_location) )
    {
        

       

        
       

            //save to database
            $user_id = random_num(20);
            $query = "insert into busschedule(user_id,bus_no,start_time,end_time,start_location,end_location,type) values ('$user_id','$bus_no','$start_time','$end_time','$start_location','$end_location','$type')";

            mysqli_query($conn,$query);

            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully add!!!');
    window.location.href='allscheduledetail.php';
    </script>");

        
        
    }
    else{
    
         echo "Please enter some valid information!";

      }
  }
?>



<form id="Register" method="POST">
    <div class="raw"> 
        <div class="container_p">    
            <div class="col2">
                <h1>Add Schedules</h1>
            </div>      
            <br>
            <br><br>
            <div class="col3">  
                
                <br>
                <div class="pc"> 
                    <label>Bus No:</label>
                    <input type="text" name="bus_no" class="input-field" placeholder="Enter bus number" required>
                    <label>start time:</label>
                    <input type="time" name="start_time" class="input-field" placeholder="Enter start time" required>
                    <label>end time:</label>
                    <input type="time" name="end_time" class="input-field" placeholder="Enter end time" required>
                    <label>start location:</label>
                    <input type="text" name="start_location" class="input-field" placeholder="Enter start location" required>
                    <label>end location:</label>
                    <input type="text" name="end_location" class="input-field" placeholder="Enter end location" required>
                    <label>type:</label>
                    <select name="type" required class="input-field">
                        <option value="">Select rating</option>
                        <option value="Normal">Normal</option>
                        <option value="Luxury">Luxury</option>
                    </select>
                    <br>
                </div>
            </div>
            <center>
                <br><br>
            <button type="submit" name="SignUp" class="submit-btn">Register</button>
        </center>
        </div>
    </div>
</form>
</body>
</html>
