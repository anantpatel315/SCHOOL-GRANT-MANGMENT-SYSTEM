<?php
include("connection.php");


$ap=$_GET['rn'];
$query="DELETE FROM smctalim WHERE sr='$ap'";

$data=mysqli_query($conn,$query);

if($data)
{
	echo "<font color='green'>Record Deleted from DB";
}
else
{
	echo "<font color='red'>Record Not Deleted from DB";
}
header("Refresh:1; url=view.php?msg=");
?>