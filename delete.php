<?php
include('db.php');
$t=0;
$sql = $sql = "DELETE FROM products WHERE pid='".$_POST['id']."'";
$res = mysqli_query($conn, $sql );
if($res)
{
	echo $_POST['id'];
}
else
{
	echo "0";
}
?>