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
  <h1>Bus Schedules Details</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>ID</span></th>
        <th><span>Bus No</span></th>
        <th><span>Start Time</span></th>
        <th><span>End Time</span></th>
        <th><span>Start Location</span></th>
        <th><span>End Location</span></th>
        <th><span>Type</span></th>
        <th><span>Action</span></th>
      </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM busschedule;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["bus_no"] . "</td>";
                echo "<td>" . $row["start_time"] . "</td>";
                echo "<td>" . $row["end_time"] . "</td>";
                echo "<td>" . $row["start_location"] . "</td>";
                echo "<td>" . $row["end_location"] . "</td>";
                echo "<td>" . $row["type"] . "</td>";
                echo "<td>";
                echo "<a href='schedulupdate.php?id=" . $row["id"] . "' class='edit-button'>Edit</a>";
                echo "<a href='scheduldelete.php?id=" . $row["id"] . "' class='delete-button'>Delete</a>";
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