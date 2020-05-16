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
$ng=$_POST['year'];
$gb=$_POST['des'];

$ap=$_POST['dep'];
$sp=$_POST['att'];
$rs=$_POST['crup'];
$sql="INSERT INTO 	smcsd (year,des,dep,att,crup) VALUES ('$ng','$gb','$ap','$sp','$rs')";
if ($conn->query($sql) === TRUE) {
  $msg="New record created successfully";
  $status="success";
} else {
  $msg="Error: " . $sql . "<br>" . $conn->error;
  $status="error";
}
header("Refresh:0; url=index.php?msg=".$msg."&status=".$status);
$conn->close();


?>