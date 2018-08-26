<?php include('header.php')?>
<?php 
  
    if(isset($_GET['id']))
            {
                    if(! empty($_SESSION['id']))
                        {
                            if($_SESSION['id']==$_GET['id'] )
                            {
                                
                            }
                        else
                            header('location : badtry.html');
                    }
        else
            header('location : badtry.html');
}
else
    header('location : badtry.html');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Account Information</title>
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
    </head>
    <body>   
    
        <div class="panel-body" >
            <div class="row">
                <br />
                <div class="container">
                    <div class="row">           
                        <div class="col-md-12 profile-head">
                            <h1>Profile</h1>                
                        </div>
                      
                            <div class="col-md-6">
                                <form class="form-inline" action="editprofile.php?id=" method="get">
                           
                        
                                <div class=" col-md-12 info-group">
                                    <h3>name:</h3>
                                    <input type="text" name="name" value="<?php
                                        
                                            if(! empty($_SESSION['name']))
                                               {
                                                echo $_SESSION['name'];
                                            }
                                        ?>" class="form-control">
                                   
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>User Id:</h3>
                                    <input type="text" name="id" value=" <?php
                                         if(! empty($_SESSION['id']))
                                               {
                                                echo $_SESSION['id'];
                                            }
                                        ?>" class="form-control" disabled>
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>Mail Address:</h3>
                                     <input type="email" name="email" value="<?php
                                        if(! empty($_SESSION['email']))
                                               {
                                                echo $_SESSION['email'];
                                            }
                                         ?>" class="form-control">
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>Phone Number:</h3>
                                     <input type="text" name="phone_number" value="<?php
                                        if(! empty($_SESSION['phone_number']))
                                               {
                                                echo $_SESSION['phone_number'];
                                            }
                                        ?>" class="form-control">
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>Date of birth:</h3>
                                    <input type="date" name="date_of_birth" value="<?php
                                         if(! empty($_SESSION['date_of_birth']))
                                               {
                                             
                                                echo "".date('d/m/Y', strtotime($_SESSION['date_of_birth']));
                                                 
                                            }
                                         ?>" class="form-control">
                                </div>
                                
                                <div class=" col-md-12 info-group">
                                    <h3>Blood Group:</h3>
                                  <input type="text" name="blood_group" value="<?php
                                         if(! empty($_SESSION['blood_group']))
                                               {
                                                echo $_SESSION['blood_group'];
                                            }
                                        ?>" class="form-control">
                                </div>



                                <div class=" col-md-12 info-group">
                                    <h3>Address:</h3>
                                     <input type="text" name="address" value="<?php
                                         if(! empty ($_SESSION['address']))
                                               {
                                                echo  $_SESSION['address'];
                                            }
                                         ?>" class="form-control">
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>religion:</h3>
                                     <input type="text" name="religion" value="<?php
                                         if(! empty($_SESSION['religion']))
                                               {
                                                echo $_SESSION['religion'];
                                            }
                                         ?>" class="form-control">
                                </div>
                                
                                
                                 <div class=" col-md-12 info-group">
                                    <h3>National Id:</h3>
                                    <input type="text" name="national_id" value="<?php
                                         if(! empty($_SESSION['national_id']))
                                               {
                                                echo $_SESSION['national_id'];
                                            }
                                        ?>" class="form-control">
                                </div>
                                <div class=" col-md-12 info-group">
                                    <h3>Passport no:</h3>
                                     <input type="text" name="passport_id" value="<?php
                                         if(! empty($_SESSION['passport_id']))
                                               {
                                                echo $_SESSION['passport_id'];
                                            }
                                         ?>" class="form-control">
                                </div>
                                
                                <div class=" col-md-12 info-group">
                                    <h3>Gender:</h3>
                                     <input type="text" name="gender" value="<?php
                                         if(! empty($_SESSION['gender']))
                                               {
                                                echo $_SESSION['gender'];
                                            }
                                        ?>" class="form-control">
                                </div>
                                
                                <div class=" col-md-12 info-group">
                                    <h3>Status:</h3>
                                    <input type="text" name="status" value="<?php
                                         if(! empty($_SESSION['status']))
                                               {
                                                echo $_SESSION['status'];
                                            }
                                         ?>" class="form-control">
                                </div>
                               </form>
                            </div>

                            <div class="col-md-6"  >
                               
                            <form action="passwordChange.php?id=" method="get">
                           <button class="btn btn-danger text-uppercase">change password</button>
                       </form>

                                <div style="margin-top: 30px; margin-left: 60%">
                                   <?php 
                                      if(! empty($_SESSION['picture']))
                                               {
                                                echo '<img src="../images/user/'. $_SESSION['picture'].'" alt="" height="200px" width="200px">';
                                            }
                                    ?>
                                    
                                </div>
                                
                        </div>
                       
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 social-link">
                        <ul>
                            <li ><a href="#"  ><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"  ><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"  ><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"  ><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 ">
                        <ul class="subscribe text-center">
                            <li ><a href="#" class="btn btn-success" >Subscribe</a></li>
                            <li><a href="#" class="btn btn-primary" >Email</a></li>

                        </ul>
                    </div>
                </div>
            </div>
           
            
        </div>
        </div>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</body>
</html>