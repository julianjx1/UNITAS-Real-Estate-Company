<?php include('connection.php'); ?>

<?php
session_start();


    $id =  $_POST['id'];
    $password = $_POST['password'];

    
    

            $result = $db->query("SELECT * FROM user_account WHERE id='$id' AND password='$password'");
            
           
            if (mysqli_num_rows($result) > 0) {
    // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['phone_number'] = $row['phone_number'];
                    $_SESSION['address'] = $row['address'];
                    $_SESSION['date_of_birth'] = $row['date_of_birth'];
                    $_SESSION['national_id'] = $row['national_id'];
                    $_SESSION['passport_id'] = $row['passport_id'];
                    $_SESSION['blood_group'] = $row['blood_group'];
                    $_SESSION['gender'] = $row['gender'];
                    $_SESSION['status'] = $row['status'];
                    $_SESSION['religion'] = $row['religion'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['picture'] = $row['picture'];
                     
                    }
                header("location: Front page.php?id=".$_SESSION['id']);
            } else {
                 header("location: Front page.php");
            }

          

?>