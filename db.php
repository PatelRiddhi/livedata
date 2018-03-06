<?php
$conn = mysqli_connect("localhost", "root", "", "livedata");
$query = "SELECT pid,name,category,price,discount from products";
$result = mysqli_query($conn, $query) or die('MySql Error' . mysqli_connect_error());
?>