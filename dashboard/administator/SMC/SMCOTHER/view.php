<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body bgcolor="powderblue">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gantinsert";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sr,year,des,dep,att,crup,dep1,dd,der,nd,method,cn,filename FROM smcother";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID </th><th>YEAR</th><th> DESCRPTION</th><th> CDEPARTMENT </th><th>CDATE </th><th>CREDITRUPEES</th><th> DEBITDEPARTMENT</th><th>DEBITDATE</th><th> DEBITRUPEES</th><th> NAMEOFDEDUCTOR </th><th>PAYMENTMETHOD </th><th>C/VNUMBER</th><th> FILE</th><th>DELETE</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "
    <tr>
    <td>".$row["sr"]."</td>
    <td>".$row["year"]."</td>
    <td> ".$row["des"]."</td>
    <td>".$row["dep"]."</td>
    <td>".$row["att"]."</td>
    <td>".$row["crup"]."</td>
    <td>".$row["dep1"]."</td>
    <td>".$row["dd"]."</td>
    <td>".$row["der"]."</td>
    <td>".$row["nd"]."</td>
    <td>".$row["method"]."</td>
    <td>".$row["cn"]."</td>
    <td>".$row["filename"]."</td>
    <td><a href='delete.php?rn=$row[sr]'>Delete</td>
    
    </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>