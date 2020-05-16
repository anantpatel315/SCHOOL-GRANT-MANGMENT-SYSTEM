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
$gb=$_POST['dep1'];
$av=$_POST['dd'];
$ap=$_POST['der'];
$sp=$_POST['nd'];
$rs=$_POST['method'];
$r1=$_POST['cn'];
$r2=$_POST['des'];
$r3=$_POST['filename'];
$sql="INSERT INTO smcsd (year,dep1,dd,der,nd,method,cn,des,filename) VALUES ('$ng','$gb','$av','$ap','$sp','$rs','$r1','$r2','$r3')";
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