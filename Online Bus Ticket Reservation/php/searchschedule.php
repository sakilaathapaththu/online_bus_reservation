

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/schedule.css">
    


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
        $start_location = $_POST['start_location'];
        $end_location = $_POST['end_location'];

        if(!empty($start_location)&&!empty($end_location)  )
        {

            //read from database
            $query = "SELECT * FROM busschedule WHERE start_location = '$start_location' AND end_location = '$end_location'   LIMIT 1";
            
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if(($user_data['start_location'] === $start_location) &&($user_data['end_location'] === $end_location) )
                    {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        
                        header("Location:busschedul.php");
                        die;
                    }
                }
            }
            
            echo "wrong start or end_location!";
        }else
        {
            echo "wrong start or end_location !";
        }
    }

?>




<div class="body">
        
            <div class="form-box"> 
            <h1><b><i><center>Search Bus Schedules</center></i></b></h1>


                           <!------------------------------------------Login box------------------------------------------------------>

                <div class="button-box"> 
                    <div id="btn"></div>
                                        
                        <br>
                    </div>
                    <div class="Social-Icons">
                        <img src="../images/google-web.png">
                        
                    </div>
                    <br><br><br>

                    <form id="login" class="input-group" method="POST">
                        <input type="text" class="input-field" placeholder="Start Location"  name="start_location" required>
                        <input type="text" class="input-field" placeholder="End Location"  name="end_location" required>
                        
                        <br><button type="submit" class="submit-btn">Search</button><br>
                        
                    </form>
                    <br><br><br><br>
                   
                        
                    
               </div>
            </div>      
     </div>
   

    </body>
<br><br><br><br><br><br><br><br><br><br><br><br>





<footer>
    <div class="footerContainer">
        <div class="footer-right">
            <a href="index.html"><img src="../images/logo.png" /></a>
        </div>
        
        <div class="footer-left">
            <h4>Have Questions?</h4>
            <br /><br />
            <h4>
                <b style="color:crimson">
                    (+94) 71 667 8364
                </b>
            </h4>
            <br />
            <h4>
                <b style="color:crimson">
                    support@routemaster.lk
                </b>
            </h4>

        </div>

        <div class="socialm">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-google-plus"></i></a>
        </div>


        <div class="footerNav">
            <ul>
                <li><a href="#">|About Us|</a></li>
                <li><a href="#">|Contact Us|</a></li>
                <li><a href="#">|Terms|</a></li>
                <li><a href="privacy policy.html">|Privacy|</a></li>
                <li><a href="#">|Our Team|</a></li>
            </ul>
        </div>
    </div>  
    <div class="footerbotm">
        <p> Copyright &copy;<script>document.write(new Date().getFullYear());</script>, RouteMaster.lk</p>
    </div>
</footer>






</body>
</html>