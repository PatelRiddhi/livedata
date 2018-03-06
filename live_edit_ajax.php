<?php
include('db.php');
$sql = "UPDATE products SET name='".$_POST['name']."',category='".$_POST['category']."', price ='".$_POST['price']."', discount='".$_POST['discount']."' WHERE pid='".$_POST['id']."'";
$res = mysqli_query($conn, $sql );
if($res == TRUE)
{
	return TRUE;
}
else
{
	return FALSE;
}
?>