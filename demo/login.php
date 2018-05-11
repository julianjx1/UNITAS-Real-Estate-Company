<?php include('connection.php'); ?>

<?php
session_start();
$_SESSION['success'] = "";
$_SESSION['id'] = "";
$id="";
$password="";

if(isset($_GET['ok'])){
$id = mysqli_real_escape_string($db, $_REQUEST['id']);
$password = mysqli_real_escape_string($db, $_REQUEST['password']);
$sql = $db->query("SELECT * FROM user_account WHERE id='$id' AND password='$password'");
$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
$count = mysqli_num_rows($sql);
$_SESSION['id'] = $id;
if ($count == 1) {
	header("location: PersonInformation.php");
}else{
	header("location: Front page.html");
}
}
?>