<?php session_start(); ?>
<!DOCTYPE html>
<html> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
       

        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />


        <!-- //for-mobile-apps -->
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />

       <link rel="stylesheet" href="../css/font-awesome.min.css" />
       <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />
      
       
        <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round&subset=hebrew" rel="stylesheet">
       

        
        <link rel="stylesheet" href="../css/Font%20page.css" type="text/css">

    </head>
    <body >


        <!--Login Popup-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Log in</h4>
                    </div> <!-- /.modal-header -->
                    <form  action="login.php" method="post">
                        
                        <div class="modal-body">

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="uLogin" placeholder="Login" name="id">
                                    <label for="uLogin" class="input-group-addon  "><i class="fas fa-user"></i></label>
                                </div>
                            </div> <!-- /.form-group -->

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="uPassword" name = "password" placeholder="Password">
                                    <label for="uPassword" class="input-group-addon "><i class="fas fa-lock"></i></label>
                                </div> <!-- /.input-group -->
                            </div> <!-- /.form-group -->

                            


                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div> <!-- /.checkbox -->


                            <!-- /.modal-body -->


                            <button  class="btn btn-primary">Ok</button>

                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="100" style="width: 0%;">
                                    <span class="sr-only">progress</span>
                                </div>
                            </div>
                        </div>	 <!-- /.modal-footer -->
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        
       
        
        
        <div class="container" id="top-menubar" style="position:fixed;width: 100%; z-index: 10">
            <div class="row">
                <div class="col-md-12" id="top-menu-background" ></div>
                <div class="col-md-3 " style="padding:15px 0px 0px 50px; position: absolute;">
                    <h1 id="logo"><a class="navbar-brand " href="Front%20page.php" style="color: white"><span>unitas </span> <span style="color: white"><i class="fas fa-building"></i></span><br>real estate ltd.</a></h1>
                </div>

                <div class="col-md-9" style="position:absolute;margin-left: 20%;"  >
                    <nav class="navbar navbar-default " id="nav">
                        <div class="navbar-header navbar-left">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" >
                            <nav class="cl-effect-13" id="cl-effect-13">
                                <ul class="nav navbar-nav nav-font" >
                                    <li name="home"><a  href="Front%20page.php">Home</a></li>
                                    <li name="aboutus"><a href="Front%20page.php#aboutUs" >about us</a></li>

                                    <li class="dropdown" name="properties">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >properties <b class="caret"></b></a>
                                        <ul class="dropdown-menu agile_short_dropdown">
                                            <li name="land"><a href="Front%20page.php#properties">Land</a></li>
                                            <li name="residential"><a  data-toggle="tab"href="Front%20page.php#residential">Residential</a></li>
                                            <li name="commercial"><a data-toggle="tab"href="Front%20page.php#commercial">Commercial</a></li>

                                        </ul>
                                    </li>
                                    <li name="team"><a href="Front%20page.php#team"  >team</a></li>
                                    <li name="gallery"><a href="Front%20page.php#gallery" >gallery</a></li>
                                    <li name="contact"><a href="Front%20page.php#contactUs" >Contact</a></li>
                                    <li>
                                        
                                        <?php
                                        $login = '<button class="btn btn-primary" id="login" data-toggle="modal" data-target="#myModal"> Login</button>';
                                        if(isset($_GET['id']))
                                        {
                                            if(! empty($_SESSION['id']))
                                               {
                                                   if($_SESSION['id']==$_GET['id'] )
                                                echo '<div class="dropdown">
                                        <button class="btn btn-success dropdown-toggle" type="button" id="signinComplete" data-toggle="dropdown">
                                        '.$_SESSION['name'].'<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="
                                          PersonInformation.php?id='.$_GET['id'].'">Profile</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="
                                          transection.php?id='.$_GET['id'].'">Transection</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="
                                          logout.php" >Logout</a></li>
                                        
                                            
                                        </ul>
                                     </div>';
                                             else 
                                                   echo $login;
                                               }
                                            else
                                                echo $login;
                                        } 
                                        else
                                            echo $login;
                                        ?>
                                        
                                        
                                        
                                        
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </nav>

                </div>


            </div>

        </div>

       
             
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  

            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
          

 <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
          
            <script>
                var Filename;
                $(document).ready(function(){
                     var file_host = $(location).attr('href');
                     var hostname= file_host.split('#').pop();
                        var file_path = $(location).attr('pathname');
                     Filename= file_path.split('/').pop();
                    if(hostname == "aboutus"){
                        $("#nav li[name=aboutus]").addClass("active");
                         $("#nav li[name=home]").removeClass();
                    }
                        if(Filename=="Front%20page.php")
                            {
                             
                                 $("#nav li[name=home]").addClass("active");
                                
                                
                            }
                     
                    });

                $(window).on('scroll', function () {
                    $a = $(window).scrollTop();
                    
                    function removeActiveClass(){
                        $("#nav li[name=home]").removeClass("active");
                        $("#nav li[name=aboutus]").removeClass("active");
                        $("#nav li[name=properties]").removeClass("active");
                        $("#nav li[name=team]").removeClass("active");
                        $("#nav li[name=gallery]").removeClass("active");
                        $("#nav li[name=contact]").removeClass("active");
                    };
                    if(Filename=="Front%20page.php")
                            {
                                
                               
                                if($a >= 0)
                                {
                                    removeActiveClass();
                                    $("#nav li[name=home]").addClass("active");
                                };
                                if($a > 600)                                    
                                       {
                                           removeActiveClass();
                                           $("#nav li[name=aboutus]").addClass("active");
                                       } ;
                                if($a > 1800 && $('#aboutSeeMore').html() == "See More")                                    
                                       {
                                           removeActiveClass();
                                           $("#nav li[name=team]").addClass("active");
                                       } ;
                                
                                 if($a > 2400 && $('#aboutSeeMore').html() == "Hide More")                                    
                                       {
                                           removeActiveClass();
                                           $("#nav li[name=team]").addClass("active");
                                       } ;   
                                if($a > 3900 && $('#aboutSeeMore').html() == "See More")                                    
                                       {
                                           removeActiveClass();
                                           $("#nav li[name=properties]").addClass("active");
                                       } ;
                                if($a > 4500 && $('#aboutSeeMore').html() == "Hide More")                                    
                                       {
                                           removeActiveClass();
                                           $("#nav li[name=properties]").addClass("active");
                                       } ;
                                    if($a > 4500 && $('#aboutSeeMore').html() == "See More" && $('#land-more').html() == "see more")                                    
                                       {
                                           removeActiveClass();
                                           $("#nav li[name=gallery]").addClass("active");
                                       }; 
                                if($a > 5300 && $('#aboutSeeMore').html() == "Hide More" && $('#land-more').html() == "see more")                                    
                                       {
                                           removeActiveClass();
                                           $("#nav li[name=gallery]").addClass("active");
                                        
                                       };
                                 if($a > 5200 && $('#aboutSeeMore').html() == "See More" && $('#land-more').html() == "Hide More")                                    
                                       {
                                           removeActiveClass();
                                           $("#nav li[name=gallery]").addClass("active");
                                       } ;
                                if($a > 5900 && $('#aboutSeeMore').html() == "Hide More" && $('#land-more').html() == "Hide More")                                    
                                       {
                                           removeActiveClass();
                                           $("#nav li[name=gallery]").addClass("active");
                                       } ;
                                  if($a > 5300 && $('#aboutSeeMore').html() == "See More" && $('#land-more').html() == "see more")                                      
                                       {
                                           removeActiveClass();
                                           $("#nav li[name=contact]").addClass("active");
                                           
                                       } ;   
                                  if($a > 6200 && $('#aboutSeeMore').html() == "Hide More" && $('#land-more').html() == "see more")                                    
                                       {
                                           removeActiveClass();
                                           $("#nav li[name=contact]").addClass("active");
                                           
                                       } ;    
                                       
                                if($a > 6300 && $('#aboutSeeMore').html() == "See More" && $('#land-more').html() == "Hide More")                                  
                                       {
                                           removeActiveClass();
                                           $("#nav li[name=contact]").addClass("active");
                                           
                                       } ;    
                                if($a > 6900 && $('#aboutSeeMore').html() == "Hide More" && $('#land-more').html() == "Hide More")                                    
                                       {
                                           removeActiveClass();
                                           $("#nav li[name=contact]").addClass("active");
                                           
                                       } ;
                                
                                
                            };
                  
                    if ($a > 250)
                    {
                        $("#top-menu-background").css('height', '50px');

                        $("#logo").html('<a class="navbar-brand " href="Front%20page.php" style="color: white"><span>unitas </span> <span style="color: white"></span>real estate ltd.<i class="fas fa-building"></i></a>');
                        $("#logo").css({'font-size': '18px'});
                        $(".nav-font > li > a,#login,#signinComplete").css({
                            'margin-top': '-25px'});
                        $(".nav-font > li > ").css({
                            'margin-top': '-25px'});
                        
                        $("#signinComplete").css({
                           'font-size': '12px', 'margin-top': '10px'});
                        
                        
                        
                    } else if ($a > 0)
                    {
                         $("#top-menu-background").css('height', '100px');
                        $("#logo").html('<a class="navbar-brand " href="Front%20page.php" style="color: white"><span>unitas </span> <span style="color: white"><i class="fas fa-building"></i></span><br>real estate ltd.</a>');
                         if( $(window).width() > 1600){
                       

                        $("#logo").css('font-size', '25px');
                        $(".nav-font > li > a,#login").css({
                            'font-size': '10px', 'margin-top': '0px'});
                        
                        $("#signinComplete").css({
                           'font-size': '10px', 'margin-top': '32px'});
                             
                         $(".navbar-nav > li > a").css({
	                           'padding':'14px 30px 0'
                        } );

                         }
                        
                          if($(window).width() > 1200 && $(window).width() < 1600)
                        {
                            
                        $("#logo").css('font-size', '20px');
                        $(".nav-font > li > a,#login").css(
                                {'font-size': '12px', 'margin-top': '0px'});
                        $("#signinComplete").css({
                            'font-size': '12px','margin-top': '30px'});
                            
                            $(".navbar-nav > li > a").css({
	                           'padding':'14px 20px 0'
                        } );

                    }

                    } else
                    {
                        $("#top-menu-background").css('height', '120px');
                         $(".nav-font > li > a,#login").css(
                                {'font-size': '15px', 'margin-top': '0px'});
                         $("#signinComplete").css({
                            'font-size': '15px','margin-top': '26px'});
                        if( $(window).width() > 1600)
                        {
                        
                        $("#logo").css('font-size', '30px');
                       
                       
                            
                         $(".navbar-nav > li > a").css({
	                           'padding':'14px 30px 0'
                        } );

                        };
                        
                        if($(window).width() > 1200 && $(window).width() < 1600)
                        {
                            
                        $("#logo").css('font-size', '25px');
                       
                       
                            
                            $(".navbar-nav > li > a").css({
	                           'padding':'14px 20px 0'
                        } );

                    }
                   
                     
                   
                    

                }});
                
                 
             

            </script>

    </body> 
</html>
