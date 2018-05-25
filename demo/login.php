<?php include('connection.php'); ?>

<?php

if (isset($_REQUEST['optradio'])) {
    $opt = $_REQUEST['optradio'];
    $id = mysqli_real_escape_string($db, $_GET['id']);
    $password = mysqli_real_escape_string($db, $_GET['password']);

    echo "123";
    echo $opt;
    switch ($opt) {
        case 1:

            $sql = $db->query("SELECT * FROM user_account WHERE id='$id' AND password='$password'");
            $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            $count = mysqli_num_rows($sql);

            if ($count == 1) {
                header("location: PersonInformation.php");
            } else {
                header("location: Frontpage.php");
            }
            break;
        case 2:
            $sql = $db->query("SELECT * FROM admin_account WHERE id='$id' AND password='$password'");
            $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            $count = mysqli_num_rows($sql);

            if ($count == 1) {
                header("location: AdminInformation.php");
            } else {
                header("location: Frontpage.php");
            }
            break;
    }
}
?>