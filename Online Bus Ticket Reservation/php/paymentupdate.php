<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <link rel="stylesheet" href="../css/payheader.css" />
    <link rel="stylesheet" href="../css/payment.css" />
</head>
<body>
    <header>
        <div class="icon">Route<b style="color: #ff7200">M</b>aster</div>
        <div class="search_box">
            <input type="search" placeholder="Search" />
            <a href="#"><i class="fa fa-search icon-search"></i></a>
        </div>
        <ol>
            <li><a href="home.html">Home</a></li>
            <li><a href="php/searchschedule.php">Schedules</a></li>
            <li><a href="php/addbusschedul.php">Add Schedules</a></li>
            <li><a href="Feedback.html">Feedback</a></li>
            <li><a href="Contactus.html">Contact</a></li>
            <li><a href="php/login.php">LogIn</a></li>
        </ol>
    </header>

    <?php include("config.php");?>

    <?php 
    if(isset($_POST['updatepayment'])){
        $id = $_POST['id'];
        $start_location = $_POST['start_location'];
        $end_location = $_POST['end_location'];
        $price = $_POST['price'];
        $cardno = $_POST['cardno'];
        $expdate = $_POST['expdate'];
        $ccv = $_POST['ccv'];

        $query = "UPDATE `payment` SET start_location=?, end_location=?, price=?, cardno=?, expdate=?, ccv=? WHERE id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssdsssi", $start_location, $end_location, $price, $cardno, $expdate, $ccv, $id);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Successfully profile updated!!!');
                    window.location.href='paymentview.php';
                    </script>");
        }
        else{
            echo '<script type="text/javascript">alert("Not Updated!!!")</script>';
        }
        $stmt->close();
    }
    ?>

    <div id="wrapper">
        <div id="container">
            <form id="payment-form" method="POST">
                <h1>
                    <i class="fas fa-shipping-fast"></i>
                    Payment Gateway
                </h1><br>
                <div id="name">
                    <div>
                        <label for="startlocation">Start location</label>
                        <input type="text" name="start_location" id="startlocation" required>
                    </div>
                    <div>
                        <label for="endlocation">End location</label>
                        <input type="text" name="end_location" id="endlocation" required>
                    </div>
                </div><br>
                <div class="cc-num">
                    <label for="card-num">Price.</label>
                    <input type="number" name="price" id="card-num" required>
                </div><br>
                <div class="cc-num">
                    <label for="card-num">Credit Card No.</label>
                    <input type="text" name="cardno" id="card-num" required>
                </div>
                <div id="cc-info">
                    <br>
                    <div>
                        <label for="expire-year">Exp Year</label>
                        <input type="text" name="expdate" id="expire-year" required pattern="\d{2}/\d{2}" placeholder="YY/MM">
                    </div>
                    <div>
                        <label for="security">CVV</label>
                        <input type="text" name="ccv" id="security" maxlength="3" required>
                    </div>
                </div>
                <div id="btns">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <button type="submit" name="updatepayment">Update</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>
