<?php
session_start();
include('connection.php');
$sql = "INSERT INTO `user_banking`(`user_id`,";   
if(isset($_SESSION['id']))
{
    
    $x = 0; 
    $c = 1;
    
    if(isset($_GET['optradio']))
    {
       
        $pay_way_selection=$_GET['optradio'];
        if($pay_way_selection == "bank")
        {
            if(isset($_GET['bank_name']))
            {
                if(isset($_GET['bank_account_number']))
                {
                   $bank_name = $_GET['bank_name'];
                   $account_number = $_GET['bank_account_number'];
                    $x = 1;
                    $sql.= " `bank_name`, `bank_account_number`,";
                }
            }
            
        }
       else if($pay_way_selection == "card")
        {
            if(isset($_GET['card_selection']))
            {
                if(isset($_GET['card_number']))
                {
                   $card_name = $_GET['card_selection'];
                   $card_number = $_GET['card_number'];
                    $x = 1;
                    $sql.= " `card_name`, `card_number`, ";
                }
            }
            
        }
        else if($pay_way_selection == "mobile_banking")
        {
            if(isset($_GET['mobile_banking_selection']))
            {
                if(isset($_GET['mobile_banking_account']))
                {
                   $mobile_banking_name = $_GET['mobile_banking_selection'];
                   $mobile_baning_number = $_GET['mobile_banking_account'];
                    $x=1;
                    $sql.= " `mobile_banking`, `mobile_number`, ";
                }
            }
            
        }
        else
            $c= 0;
        
        if($x==1 && $c ==1)
        {
          $seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789'); // and any other characters
            shuffle($seed); // probably optional since array_is randomized; this may be redundant
            $rand = '';
            foreach (array_rand($seed, 10) as $k) $rand .= $seed[$k];
            
            
           $sql.= " `property_id`, `given_amount`,`transaction_id`) VALUES ( '".$_SESSION['id']."','";
            
            if($pay_way_selection == "bank")
        {
            $sql.= $bank_name."','".$account_number."','";
        }
       else if($pay_way_selection == "card")
        {
            $sql.= $card_name."','".$card_number."','";
            
        }
        else 
            $sql.=  $mobile_banking_name."','".$mobile_baning_number."','";
        
       if(isset($_GET['property_list'])) 
       { 
           $name = $_GET['property_list'];


foreach( $name as $key => $n ) {
  
      if(isset($_GET[$n])) 
      {
          $sql.=  $n."','".$_GET[$n]."','".$rand."')";
       
       mysqli_query($db, $sql);
          $d = 1;
      }
    else
        $d = 0;
           
    

}
        }
    }
    
}
}
if($c == 0)
$_SESSION['transection_msg'] = "Please Select How To Pay ";
else if($x == 0)
$_SESSION['transection_msg'] = "Please Select Bank/Card/Mobile Banking & Give Your Account Number ";
else if($d == 0)
  $_SESSION['transection_msg'] = "Please Select Property & Give a Proper Amount. ";
else
  $_SESSION['transection_msg'] = "Pay Successfully";
header('location:Transection.php?id='.$_SESSION['id']);

?>