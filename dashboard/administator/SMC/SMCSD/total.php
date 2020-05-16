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
require_once("connection.php");

    


$sql1 = "SELECT SUM(crup) as crup FROM smcsd";
$result1 = $conn->query($sql1);
$row = $result1 -> fetch_array(MYSQLI_ASSOC);
$row['crup'];


$sql2=  "SELECT SUM(der) as crup2 FROM smcsd";
$result2 = $conn->query($sql2);
$rows = $result2 -> fetch_array(MYSQLI_ASSOC);
$rows['crup2'];

$at=$row['crup']-$rows['crup2'];
$at;
echo"<table>
<tr>
<th>Credit</th>
<th>Debit</th>
<th>Total</th>
</tr>
<tr>
<td>".$row['crup']."</td>
<td>".$rows['crup2']."</td>
<td>".$at."</td>
</tr>
</table>";


$conn->close();
?>


</body>
</html>