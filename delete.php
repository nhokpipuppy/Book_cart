<?php session_start();
echo "welcome";
if (isset($_GET['id'])) {
	echo 'success';
 	$id=$_GET['id'];
unset($_SESSION['select'][$id]);
header('location:select.php');
 }
?>