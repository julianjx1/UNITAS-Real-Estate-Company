<?php include('connection.php'); ?>
<?php 
$fileStorage = '/demo/transaction/'; 
if (isset($_POST['view'])){
	$s =$db->query("SELECT * FROM buy");
	if ($row = $s->fetch_assoc()) {
        echo '<a href="'. $fileStorage . $row['transaction_report'] .'">'.$row['transaction_report'].'"</a><br />';
    }
}
?>