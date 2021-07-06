<?php
include_once('connection.php');
$query="select * from booking";
$res=mysql_query($query);
?>

<!DOCTYPE html>
<html>
<title>
<head>
Cinetime</head>
<body>
<table>
<tr>
<th><h2>Booking reciept</h2></th>
<th> movie  </th>
<th> name </th>
<th> email </th>
<th> contactno </th>
<th> quantity </th>
<th> paymentmethod </th>
<th> cardno </th>
</tr>
</table>
</body>
</html>
