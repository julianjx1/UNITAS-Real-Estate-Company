
<?php

$id="";
$password="";
$db = mysqli_connect('127.0.0.1', 'root', '', 'ui') or die ("Unable to connect");
echo "connected";


	$id = mysqli_real_escape_string($db, $_REQUEST['id']);

	$password = mysqli_real_escape_string($db, $_REQUEST['password']);

	$sql = $db->query("SELECT * FROM ui_account WHERE id='$id' AND password='$password'");
	$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $count = mysqli_num_rows($sql);
if ($count == 1) {
	header("location: Person Information.html");
}else{
	header("location: Front page.html");
}
?>