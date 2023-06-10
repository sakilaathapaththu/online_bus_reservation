<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
        .edit-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: green;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 10px;
        }

        .delete-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
	 
    
	<link rel="stylesheet" href="../css/viewregi.css"/>
	<script src="../js/register.js"></script>
</head>
<body>
<!-- header -->

<br><br><br><br><br><br><br><br><br><br>
<!-- update -->
 <div id="wrapper">
  <h1>Payment Details</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>ID</span></th>
        <th><span>Start Location</span></th>
        <th><span>End Location</span></th>
        <th><span>Price </span></th>
        <th><span>Card No</span></th>
        <th><span>Exp Date</span></th>
        <th><span>CVV</span></th>
        <th><span>Action</span></th>
      </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM payment;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["start_location"] . "</td>";
                echo "<td>" . $row["end_location"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["cardno"] . "</td>";
                echo "<td>" . $row["expdate"] . "</td>";
                echo "<td>" . $row["ccv"] . "</td>";
                
                echo "<td>";
                echo "<a href='paymentupdate.php?id=" . $row["id"] . "' class='edit-button'>Edit</a>";
                echo "<a href='paymentdelete.php?id=" . $row["id"] . "' class='delete-button'>Delete</a>";
                echo "</td>";

                echo "</tr>";

            }
        } else {
            echo "No details to display";
        }

        echo "</table>";

        $conn->close();
        ?>
    </tbody>
  </table>
<a href="../home.html"><button>Back</button></a>

 </div> 


</body>
</html>