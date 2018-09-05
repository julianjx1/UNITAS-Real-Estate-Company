<?php

 include("header.php"); 
include('connection.php');

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <!-- //for-mobile-apps -->
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="../css/font-awesome.min.css" />
        <!-- //font-awesome icons -->
        <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/Font%20page.css" type="text/css">
        <link rel="stylesheet" href="../css/Person%20Information.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
        <style>
            .font-weight-bold{
                font-weight: bold;
            }
            #amount-distribution{
                margin-top: 11%;
            }
            #amount-distribution > div
            {
                margin-top: 6%;
            }
        
           
            
            #bank,#card,#mobile_banking{
                display: none;
            }
             #successful{
                margin-left: 49%;
                border-radius: 5px;
                
                z-index: 1;
                position: absolute;
                background-color: yellowgreen;
                color: white;
                width: auto;
            }
            @media screen and (min-width: 1200px){
            #successful{
                margin-top: 10%;
                }
            }
             @media screen and (min-width: 1600px){
            #successful{
                margin-top: 7%;
                }
            }
            
            
            
    </style>
</head>
<body>
 
 
  <?php
    if(isset($_SESSION['transection_msg']))
{
    $msg = $_SESSION['transection_msg'];
    unset($_SESSION['transection_msg']);

 echo '<div class="container" id="successful">
     <div class="row">
         <div class="col-md-12">
             <h4>'.$msg.'</h4>
         </div>
     </div>
 </div>';
        
    }
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="amount-distribution">
              <div class="col-md-12" id="totalAmountDiv">
                  <level  for="totalamount" class="col-md-4 text-uppercase font-weight-bold ">total amount</level>
                   <?php
     
     $sql = "SELECT given_amount FROM user_banking WHERE user_id='".$_SESSION['id']."'";
$result = mysqli_query($db, $sql);
$sum = 0;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $sum+=(int)$row['given_amount'];
    }
    echo '<input type="text" id="totalamount" class="col-md-6" value="&#2547;'.$sum.'" disabled>';
}
    ?>
               
              </div>
              <div class="col-md-12" >
                  <level for="totalamount" class="col-md-4 text-uppercase font-weight-bold">remain amount </level>
                  
                  <?php
        $remain = 0;
        $sql = "SELECT property_id,quantity_of_units FROM buy_property WHERE user_id='".$_SESSION['id']."'";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $sql2 = "SELECT name,type FROM property WHERE id='".$row['property_id']."'";
$result2 = mysqli_query($db, $sql2);

$name = "";
        $select = "";
if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row2 = mysqli_fetch_assoc($result2)) {
        $type = $row2['type'];
        $name = $row2['name'];
       

        if($type == "land")
            $select = ",amount_per_acor";
        else if($type == "commercial")
            $select = ",price_per_unit";
       
        $sql1 = "SELECT complete_date".$select." FROM ".$type." WHERE id='".$row['property_id']."'";
        
        if($type == "residential")
           $sql1 = "SELECT price FROM ".$type." WHERE id='".$row['property_id']."'";
$result1 = mysqli_query($db, $sql1);
$price = 0;
$date = "";   
        
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        if($type == "land")        
        {
            $price =(int) $row['quantity_of_units'] * $row1['amount_per_acor'];
            $date = date_format(date_create($row1['complete_date']),"d/m/Y");
        }
        
       else if($type == "commercial")        
       {
           $price = (int)$row['quantity_of_units'] * $row1['price_per_unit'];
            $date = date_format(date_create($row1['complete_date']),"d/m/Y");
       } 
        
        else
            $price = (int)$row['price'];
        
    }
} 
       
        $given_price = 0;
  $sql1 = "SELECT given_amount FROM user_banking WHERE user_id='".$_SESSION['id']."' AND property_id='".$row['property_id']."'";
$result1 = mysqli_query($db, $sql1);

        
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        $given_price+=(int)$row1['given_amount'];
        
    }
}
        
        $diff = $price - $given_price;
       
        if($diff > 0)
        {  
            $sum+=$diff;
        }
    }
}
}
    }

echo ' <input type="text" id="totalamount" class="col-md-6" value="&#2547;'.$sum.'" disabled>';
        
        ?>
     
              
              </div>
              <div class="col-md-12" >
                  <level for="totalamount" class="col-md-4 text-uppercase font-weight-bold">much submit</level>
                  <?php 
                  echo '<input type="text" id="totalamount" class="col-md-6" value="&#2547;';
                  if($diff < 0)
                   echo $diff;
                  else
                      echo "0";
                 echo  '" disabled>'; ?>
               
              </div>
               
            </div>
            
            
        </div>
    </div>
    
    
    <div class="container">
        <div class="row">
           
           
           <form action="banking.php" method="get" id="payBank">
           
           
           <div class="col-md-12">
               
                 <table class="table table-striped " id="paymentNow">
    <thead>
     
    
      <tr>
        <th>Check For Payment</th>
        <th>Property Name</th>
        <th>Property Price Remaining</th>
          <th>Complete Date</th>
          <th>Now Given Amount</th>
          
      </tr>
    </thead>
    <tbody>
     
      <?php
        
        $sql = "SELECT property_id,quantity_of_units FROM buy_property WHERE user_id='".$_SESSION['id']."'";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $sql2 = "SELECT name,type FROM property WHERE id='".$row['property_id']."'";
$result2 = mysqli_query($db, $sql2);

$name = "";
        $select = "";
if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row2 = mysqli_fetch_assoc($result2)) {
        $type = $row2['type'];
        $name = $row2['name'];
       

        if($type == "land")
            $select = ",amount_per_acor";
        else if($type == "commercial")
            $select = ",price_per_unit";
       
        $sql1 = "SELECT complete_date".$select." FROM ".$type." WHERE id='".$row['property_id']."'";
        
        if($type == "residential")
           $sql1 = "SELECT price FROM ".$type." WHERE id='".$row['property_id']."'";
$result1 = mysqli_query($db, $sql1);
$price = 0;
$date = "";   
        
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        if($type == "land")        
        {
            $price =(int) $row['quantity_of_units'] * $row1['amount_per_acor'];
            $date = date_format(date_create($row1['complete_date']),"d/m/Y");
        }
        
       else if($type == "commercial")        
       {
           $price = (int)$row['quantity_of_units'] * $row1['price_per_unit'];
            $date = date_format(date_create($row1['complete_date']),"d/m/Y");
       } 
        
        else
            $price = (int)$row['price'];
        
    }
} 
       
        $given_price = 0;
  $sql1 = "SELECT given_amount FROM user_banking WHERE user_id='".$_SESSION['id']."' AND property_id='".$row['property_id']."'";
$result1 = mysqli_query($db, $sql1);

        
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        $given_price+=(int)$row1['given_amount'];
        
    }
}
        
        $diff = $price - $given_price;
       
        if($diff > 0)
        {  echo ' <tr>
        <td ><input type="checkbox" name="property_list[]" value="'.$row['property_id'].'" class="property_selection"> </td>
         
         <td>'.$name.'</td>
         <td>'.$diff.'</td>
         <td>'.$date.'</td>
         <td><input type="text" name="'.$row['property_id'].'" value="'.$diff.'" disabled class="form-control amount_writting"></td> </tr>
         ';
        }
    }
}
}
    }


        
        ?>
     
        
     
    </tbody>
  </table>
           
            <div class="form-group">
      <label class="control-label col-sm-2 text-uppercase" for="totalPay">Payment(&#2547;)</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="totalPay" value="0"  disabled>
        
      </div>
      <button class="btn btn-success text-uppercase col-md-4  " id="pay" >Pay now</button>
      
    </div>
        
        <div id="how_you_pay">        
         <div class="form-group col-md-12">
                <label class="control-label col-sm-2 text-capitalize" for="totalPay">How You pay</label>
      <div class="col-md-4">
        <label class="radio-inline"><input type="radio" name="optradio" value="bank">Bank</label>
<label class="radio-inline"><input type="radio" name="optradio" value="card">Card</label>
<label class="radio-inline"><input type="radio" name="optradio" value="mobile_banking">Mobile Banking</label>
       </div>
     </div>
           </div> 
           
          <!-- Bank-->
           <div id="bank">          
           <div class="form-group ">
                <label class="control-label col-sm-2 text-capitalize" for="bank_name">bank name</label>
      <div class="col-md-4">
        <select name="bank_name" id="bank_name" class="form-control">
            <option value="">select your bank name</option>
            <option value="Dutch Bangla Bank Ltd">Dutch Bangla Bank Ltd.</option>
            <option value="Brac Bank Ltd">Brac Bank Ltd.</option>
            <option value="Bank Asia Ltd">Bank Asia Ltd.</option>
            <option value="Islami Bank Ltd">Islami Bank Ltd.</option>
        </select>        
      </div>   
      <div class="form-group ">
         <label class="control-label col-sm-2 text-capitalize" for="bank_account_number">Account No.</label>
      <div class="col-sm-4">
        <input type="text" name="bank_account_number" class="form-control" >
      </div>
      </div>
    </div>       
</div>   
           <!--Card--> 
          <div id="card">                  
             <div class="form-group">
                <label class="control-label col-sm-2 text-capitalize" for="card_selection">Card Name</label>
              <div class="col-md-4">
                <select name="card_selection"  class="form-control">
                <option value="">select your card</option>
                <option value="Nexus Pay">Nexus pay.</option>
                <option value="Visa">Visa.</option>
                <option value="Master Card">Master Card.</option>
                </select>
              </div>
          </div>
          
           <div class="form-group ">
                <label class="control-label col-sm-2 text-capitalize" for="card_number">Card No.</label>
      <div class="col-sm-4">
        <input type="text" name="card_number" class="form-control" >
       </div>
         </div>  
        </div> 
             
            <!--Mobile Banking -->          
         <div id="mobile_banking">       
           <div class="form-group">
                <label class="control-label col-sm-2 text-capitalize" for="mobile_banking_selection">Mobile Banking </label>
      <div class="col-md-4">
        <select name="mobile_banking_selection" id="mobile_banking_selection" class="form-control">
            <option value="">select your mobile bank name</option>
            <option value="rocket">Rocket</option>
            <option value="bkash">bKash</option>
            <option value="ucash">UCash</option>
            <option value="my_cash">My Cash</option>
        </select>
        </div>
     </div>
           
              <div class="form-group ">
                <label class="control-label col-sm-2 text-capitalize" for="mobile_banking_account">Mobile Account No.</label>
      <div class="col-sm-4">
        <input type="text" name="mobile_banking_account" class="form-control" >
      </div>
            </div>  
          </div>
               </div>
           </form>
        </div>
    </div>
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <table class="table table-striped">
    <thead>
      <tr>
       <th>Property Name</th>
        <th>Bank Name</th>
        <th>Card Name</th>
        <th>Mobile Banking</th>
        <th>Given Amount</th>
        <th>Amount Given Date</th>
         <th>Transaction No</th>
          
      </tr>
    </thead>
    <tbody>
     
     <?php
        
         $sql = "SELECT * FROM user_banking WHERE user_id='".$_SESSION['id']."' ORDER BY amount_given_date DESC";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
         $sql1 = "SELECT name FROM property WHERE id='".$row['property_id']."'";
$result1 = mysqli_query($db, $sql1);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
       
        
        echo  '<tr>
       <td>'.$row1['name'].'</td>
        <td>';
        if(isset($row['bank_name']))
          echo $row['bank_name'];
           else
           echo "";
           echo '</td>
        <td>';
        if(isset($row['card_name']))
          echo $row['card_name'];
           else
           echo "";
        echo '</td>
        <td>';
        if(isset($row['mobile_banking']))
          echo $row['mobile_banking'];
           else
           echo "";
          
        echo '</td>
        <td>'.$row['given_amount'].'</td>
         <td>'.date_format(date_create($row['amount_given_date']),'d/m/Y').'</td>
         <td>'.$row['transaction_id'].'</td>
      </tr>';
    }
}
    }
}
        
        
        ?>
    
    </tbody>
  </table>
             </div>
         </div>
     </div>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    
    <script>
        function initiate(a)
        {
            a.val("0");
        }
    function add(a,b)
        {
            this.a = parseInt(a.val());
            this.b = parseInt(b.val());
            this.a+=this.b;
            a.val( this.a.toString());
            
        }
        
    function property_bill_pay()
        {
            initiate($('#totalPay'));
        
        $('#paymentNow tbody tr').each(function(i){
          //  console.log($('#paymentNow tbody tr:eq('+i+').').find('td:eq(1) input').is(':checked'));
         if($('#paymentNow tbody tr:eq('+i+')').find('td:eq(0) input').is(':checked'))
         {
             $('#paymentNow tbody tr:eq('+i+')').find('td:eq(4) input').prop("disabled", false);
            
            
             add($('#totalPay'),$('#paymentNow tbody tr:eq('+i+')').find('td:eq(4) input'));
         }
        else
            $('#paymentNow tbody tr:eq('+i+')').find('td:eq(4) input').prop("disabled", true);
        });
        }
        var obj = [];
        
        function create_json(){
            var j = 0;
            $('#paymentNow tbody tr').each(function(i){
          //  console.log($('#paymentNow tbody tr:eq('+i+').').find('td:eq(1) input').is(':checked'));
         if($('#paymentNow tbody tr:eq('+i+')').find('td:eq(0) input').is(':checked'))
         {
            obj[j]='{"id" :"' + $('#paymentNow tbody tr:eq('+i+')').find('td:eq(0) input').val()+
             '",  "pay" : "'+$('#paymentNow tbody tr:eq('+i+')').find('td:eq(4) input').val()
             +'"}';
             j++;
            
            
             
         }
       
        });
        
        }
     function initial_banking()
        {
            $("#bank").css("display","none");
             $("#card").css("display","none");
             $("#mobile_banking").css("display","none");
        }
        
     
      $('.property_selection').click(function(){
          property_bill_pay()});
        $('.amount_writting').focusout(function(){
             property_bill_pay()});
       $("input[name=optradio]").click(function(){
           initial_banking();
           if($("input[name=optradio][value=bank]").is(":checked"))
               $("#bank").css("display","block");
           if($("input[name=optradio][value=card]").is(":checked"))
               $("#card").css("display","block");
           if($("input[name=optradio][value=mobile_banking]").is(":checked"))
               $("#mobile_banking").css("display","block");
       });
        
         
      
        
       
                            
                            
      /*  $("#pay").click(function(){
            create_json();
            bd = JSON.stringify(obj);
            
    $.ajax({
        type: "POST",
        url: "banking.php?user=",
        contentType: "application/json",
        dataType: "json",
        data: bd,
        success: function(response) {
            console.log(response.responseText());
        },
        error: function(response) {
            console.log(response);
        }
    });
});
    */
    </script>
</body>
</html>