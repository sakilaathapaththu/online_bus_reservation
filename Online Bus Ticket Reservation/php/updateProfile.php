

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
    <link rel="stylesheet" href="../css/signin.css">
    


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





  <?php include("config.php");?>


 <?php 


      

       if(isset($_POST['updateProfile'])){

       $id=$_POST['id'];
     $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
  
      
       

       $query="UPDATE `users` SET user_name='$user_name',email='$email',phone='$phone',password='$password' where id=$id";


       $query_run=mysqli_query($conn,$query);

      
  

         if($query_run){

            /*
      
                    //redirect to your profile page//

                    header("Location: adminDash.php");
       
                    die;

                 
*/
           
                                 echo ("<script LANGUAGE='JavaScript'>
                      window.alert('Succesfully profile updated!!!');
                      window.location.href='profile.php';
                      </script>");
               


          }

          else{

               echo '<script type="text/javascript">alert("Not Updated!!!")</script>';
           }

           

     }

?>


          

     

    

<div class="body">
        
            <div class="form-box"> 
            <h1><b><i><center>Create an Account</center></i></b></h1>


                           <!------------------------------------------Login box------------------------------------------------------>

                <div class="button-box"> 
                    <div id="btn"></div>
                                        
                        <br>
                    </div>
                    <div class="Social-Icons">
                        <img src="../images/fb.png">
                        <img src="../images/gp.png">
                        <img src="../images/tw.png">
                    </div>
                    <br><br><br>

                    <form id="Register" class="input-group"  method="post">

                        <input type="number" name="id"class="input-field"  value="<?php echo $_GET['id'];?>" readonly>
                        <input type="text" name="user_name" class="input-field" placeholder="Enter a user name" required>
                        <input type="text" name="email" class="input-field" placeholder="Enter Your Email" required>
                        <input type="text" name="phone" class="input-field" placeholder="Enter your phone number" required>
                        <input type="text" name="password" class="input-field" placeholder="Enter a Password" required>
                        <button type="submit" name="updateProfile" class="submit-btn">Update</button>
                        
                    </form>
                    
                        
                    
               </div>
            </div>      
     </div>
   

    </body>

<br><br><br><br><br>


<!----------------Footer starts------------------------------------------------------------------------------->

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






<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/signin.js"></script>

</body>
</html>