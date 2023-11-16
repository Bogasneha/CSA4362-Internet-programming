<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
 $dbname = "bloodbank"; 
 $servername = "localhost"; 
 $username = "root"; 
 $password = "";
  // Create connection
   $conn = new mysqli($bloodgroup, $units); 
  // Check connection 
  if ($conn->connect_error) 
  { 
    die("Connection failed: " . $conn->connect_error); 
} 
echo "Connected successfully"; 
$sql = "SELECT * FROM bloodunits"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) 
{ 
    echo "<table> <tr> <th>Blood Group</th> <th>Units</th> </tr>"; 
    // output data of each row 
    while($row = $result->fetch_assoc()) 
    { 
        echo "<tr> <td>".$row["bloodgroup"]."</td> <td>".$row["units"]."</td> </tr>"; 
    } 
    echo "</table>"; 
} 
else 
{ 
    echo "0 results"; 
} 
$conn->close(); 
?>
</body>
</html>