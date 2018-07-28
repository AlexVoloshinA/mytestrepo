<?php 
$connection = mysqli_connect('localhost', 'root', '', 'drinkdb');

$query = "SELECT * FROM drinks WHERE drink_id = $_GET[id]";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($result);

echo "$row[title]";
?>