<?php include('login.php'); ?>
<?php 

$fileStorage = 'http://localhost/unitas/demo/transactions/'; 

if(isset($_REQUEST['view']))

	$s =$db->query("SELECT * FROM buy");
	if ($row = $s->fetch_assoc()) {
            $a = $fileStorage . $row['transaction_report'] .'.pdf';
        
        header ('Location:'.$a);
    }

?>