<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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
   
<br>
<br>
    
  
  
         
         
  
        <!---------------------------- Form-Start---------------------------->
        <?php

        session_start();
        
          include("config.php");
          include("function.php");
        
        
          if($_SERVER['REQUEST_METHOD'] == "POST")
          {
            //something was posted
            $user_name = $_POST['user_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $con_pass=$_POST['cpassword'];
          //  $check=$_POST['check'];
        
        
           // echo $user_name;
        
        
            if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
            {
                
        
               if($password==$con_pass){
        
                
                //   $password=md5($password);//
        
                    //save to database
                    $user_id = random_num(20);
                    $query = "insert into users(user_id,user_name,email,phone,password) values ('$user_id','$user_name','$email','$phone','$password')";
        
                    mysqli_query($conn,$query);
        
                    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Succesfully your Sign Up!!!');
            window.location.href='login.php';
            </script>");
        
                }
                else{
        
                     echo "Please enter confirm password as previous one!!";
        
                  }
            }
            else{
            
                 echo "Please enter some valid information!";
        
              }
          }
        ?>
        
        
        <div class="body">
                
                    <div class="form-box"> 
                    <h1><b><i><center>Create an Account</center></i></b></h1>
        
        
                                   <!------------------------------------------sign up box------------------------------------------------------>
        
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
        
                                <input type="text" name="user_name"class="input-field" placeholder="Enter a user name" required>
        
                                <input type="text" name="email"class="input-field" placeholder="Enter Your Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="enter email as correct order">
        
                                <input type="text" name="phone"class="input-field" placeholder="Enter your phone number" required>
        
                                <input type="password" name="password"class="input-field" placeholder="Enter a Password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
        
                                <input type="password" name="cpassword"class="input-field" placeholder="Confirm Password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="not same as previous password!!!">
        
                              
        
                                <button type="submit" name="SignUp" class="submit-btn">Register</button>
                                
                            </form>
                            
                                
                            
                       </div>
                    </div>      
             </div>
       <!------------------------------- Form End---------------------------------->
  
  
  
  
  

  
  </script>
  <!-----Java Script for Transition of form-End------->
  
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br
  
  
  <!--Page Content End-->
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