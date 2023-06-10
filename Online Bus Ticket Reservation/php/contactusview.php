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
  <h1>Contact Us Details</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>ID</span></th>
        <th><span>Full Name</span></th>
        <th><span>Email</span></th>
        <th><span>Mobile Number</span></th>
        <th><span>Message</span></th>
        <th><span>Action</span></th>
      </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM countactus;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["Name"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["Telephone"] . "</td>";
                echo "<td>" . $row["Description"] . "</td>";
                
                echo "<td>";
                echo "<a href='contactusupdate.php?ID=" . $row["ID"] . "' class='edit-button'>Edit</a>";
                echo "<a href='contactusdelete.php?ID=" . $row["ID"] . "' class='delete-button'>Delete</a>";
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