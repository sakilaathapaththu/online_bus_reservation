<?php 
//session_start();

  //  include("connection.php");
 //   include("function.php");

   // $user_data = check_login($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/homepageprofile.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <style type="text/css">
        .usern{
  font-size:25px;
  font-family: Arial;
 /* width: 15%;
  height: 15%;*/
  margin-top:20px;
  
  left: 50%;
  padding-left: 65px;

  width: 45%;
}
.wrapper{
  position: absolute;
  top: 50%;
  left: 34%;
  height:60%;
  margin-left:170px ;
  border-radius: 15px;     
  transform: translate(-50%,-50%);
  width: 60%;
  display: flex;
  /*box-shadow: 20px 20px 30px  30px rgba(200, 180, 255, 0.29);*/
  box-shadow: -15px -15px 15px  rgba(255, 255, 255, 0.2),
  15px 15px 15px  rgba(0, 0, 0, 0.1),
  inset -5px -15px 15px  rgba(255, 255, 255, 0.2),
  inset 5px 5px 5px  rgba(0, 0, 0, 0.2);



  
}
.wrapper .left{
  width: 30%;
  background:#3A5795; 
  padding: 30px 25px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  text-align: center;
  color: #fff;
  border-radius: 15px;     
}

.wrapper .left img{
  border-radius: 5px;
  margin-bottom: 10px;
}
.right{
  width: 80%;
  left: 10%;
  margin-top:50px;
  margin-right:auto;
  margin-left:240px;
  
  
  padding: 0px 200px;
  position: relative;
  font-size: 15px;
}
hr{
  border:1px solid black;
  width: 50%;
  

}
.btn1{
  margin-left: 90px;
  padding: 5px;
  width: 10%;
  background-color:#6e83b3;
  border: none;
  border-radius: 7px;
  color: white;
  

}
/*.but1,:active{
  color: white;
  color:#1b9bff;
  transition: .5s;}*/

  .btn1:hover{
    color: rgb(235, 235, 235);
    background-color: rgb(85, 149, 179);
  }
.btn2{
  margin-left: 90px;
  padding: 5px;
  width: 10%;
  background-color:#6e83b3;
  border: none;
  color: white;
  border-radius: 7px;

}
.btn3{
  margin-left: 10px;
  padding: 5px;
  width: 10%;
  background-color:#6e83b3;
  border: none;
  color: white;
  border-radius: 7px;

}
.btn4{
  background-color:#6e83b3;
  border: none;
  color: white;
  border-radius: 7px;
  height: 10%;
  padding: 5px;


}
.data{
     width: 50%;


}

.bu{
  margin-top: 50px;
  padding: 30px 355px; 
  
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

   $user_data = check_login($conn);

?>


 


<!----------------------------------------------------------------->

  <div class="usern"><center><b>Bus Schedules</center></b></div>
            <div class="wrapper">
              <div class="left">
                  
                   
              </div>
              </div>



<!--information-->
        <div class="right">

                  
        <h3>SCHEDULE INFORMATION</h3><hr/><br/>  
                <p>ID:- <?php echo $user_data['id'];?> </p><br>
                <p>Bus No:- <?php echo $user_data['bus_no'];?> </p><br>
                <p>Start Time:- <?php echo $user_data['start_time'];?> </p><br>
                <p>End Time:- <?php echo $user_data['end_time'];?> </p><br>
                <p>Start Location:-<?php echo $user_data['start_location'];?></p><br>
                <p>End Location:-<?php echo $user_data['end_location'];?></p><br>
                <p>Type:-<?php echo $user_data['type'];?></p><br>
                
                
         </div>
 
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        

</body>
</html>

