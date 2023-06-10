<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us update</title>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
    .submit {
      padding: 10px 20px;
    }
  </style>
  <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
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
<br><br><br><br><br>
    <!--Contact us Details-Left-Side-->
  <div class="Background-Contact">
    <div class="Contact-detail">
    
    <h3><center>24 Hour Contact Center (Colombo)</center></h3>
      <ul class="Contact-Content"> 
        <li>Telephone :</li>
          <ul>+94117771979</ul><br>
        <li>Email Us:</li>
          <ul>Support@routemaster.lk</ul><br>
        <li>Fax:</li>
          <ul> +94197333999</ul>
      </ul>
  
      <div class="social-btn">
        <img src="../images/fblg.png">
        <img src="../images/twlg.png">
        <img src="../images/gglg.png">
      </div>	
    </div>
  </div>
  
         
         
  
        <!----------------------------Contact-Us Form-Start---------------------------->
        <?php 

$ID = $_GET['ID'];

include_once 'config.php';

$sql = "SELECT * FROM countactus WHERE ID = '$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
       
       ?>
  
  
        <div class="Contact-detail2" id="ContactUs" >	
      
      <center> <font size="5px">Contact Us Update</font> </center>
           <form action="contactusedit.php"  method="post" >
           
           <div class=""><label >ID : </label>
            <input type="text" name="ID" value="<?php echo $_GET['ID'];?>" readonly>
          </div> 
          <br>
            <div class=""><label >Full Name : </label>
            <input type="text"  name="Name" placeholder="Your Full name.." required="">
          </div> 
          <br>
           
          <div class=""><label>Your Email : </label> </div>
          <input type="email"  name="Email" placeholder="Your Email.." required="">
        <br><br>
        <div class=""><label >Your Contact NO : </label>
          <input type="text"  name="Telephone" pattern="[0-9]{10}" placeholder="Your Number" required="">
        </div> 
        <br>
  
          <div class=""><label >Your Massege : </label><br></div>
           <textarea  name="Description" placeholder="Write something.." style="height:80px" "width:560px"></textarea>
  
    
  
           <input class="submit" type="submit"  name="Submit">
          
          </form>
  
  </div>
  <?php
    }
  }
?>
  <br><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
       <!-------------------------------Contact-Us Form End---------------------------------->
  
  
  <!-----Java Script for Transition of form-Start------->
  <script>
    
    var x = document.getElementById("ContactUs");
   
    
  
      function ContactUs(){
        
      x.style.visibility= "visible";
      y.style.visibility= "hidden";
    
    }
  
  

  
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