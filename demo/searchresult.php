<?php include('header.php')?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Search Result</title>
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
            
            #search_result_title{
                margin-top: 11%;
                border-bottom: 1px solid black
            }
        </style>
    </head>
    <body>   
     <!--property information popup-->
        
        <div class="modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
            <div class="property-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Property Name</h4>
                    </div> <!-- /.modal-header -->
                    <div class="modal-body">
                           
      
       <div class="row">
           <div class="col-md-12">
           <div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide col-md-6" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://images.pexels.com/photos/531872/pexels-photo-531872.jpeg?auto=compress&cs=tinysrgb&h=350" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://images.pexels.com/photos/531872/pexels-photo-531872.jpeg?auto=compress&cs=tinysrgb&h=350" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="https://images.pexels.com/photos/531872/pexels-photo-531872.jpeg?auto=compress&cs=tinysrgb&h=350" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="col-md-1"></div>
  <div class="col-md-5">
     <div style="border-bottom: 1px solid green">
         <h1>Prperty Details :</h1>
     </div>
     <h2>Location : <span>Georgia</span></h2>
     <div>
         <ul>
             <li>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam iure quod nemo, ut veritatis veniam cum libero sint sequi explicabo voluptatem officiis eveniet nihil. Possimus ab ratione suscipit deserunt in!
             </li>
              <li>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam iure quod nemo, ut veritatis veniam cum libero sint sequi explicabo voluptatem officiis eveniet nihil. Possimus ab ratione suscipit deserunt in!
             </li>
         </ul>
     </div>
      
  </div>
</div>

           
       </div>
   </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        
        
        <div class="container img-setup" id="search_result">
            <div class="row resultRow">
                           <div class="col-md-12 text-center" id="search_result_title">
                               <h1>Search Result</h1>
                           </div>
                           <div class="col-md-12">
                           
    <div class="form-group col-md-3">
      <label for="email">Property Type:</label>
       <select  name="property_type"class="btn btn-secondary form-control click_property" > 
               <option value="land">Land</option>
                <option value="commercial">Commercial</option>
                <option value="residential">Residential</option>
         </select>
      
    </div>
     <div class="form-group col-md-3">
      <label for="email">Property size:</label>
        <select name="property_size"class="btn btn-secondary form-control click_property"  >
            <option value="acor">Acor</option>
            <option value="bigha">Bigha</option>
            <option value="shatangsho">Shatangsho</option>
         </select>
      
    </div>
    
    <div class="form-group col-md-3">
      <label for="email" name="minimum_size_title">Minimum Acor:</label>
          <input type="number" value="0" min="0" name="minimum_size" class="form-control click_property">
      
    </div>
    
    <div class="form-group col-md-3">
     <label for="email" name="maximum_size_title">Maximum Acor:</label>
          <input type="number" value="100" max="10000" name="maximum_size" class="form-control click_property">
    </div>
     <div class="form-group col-md-3">
      <label for="email">Property area:</label>
         <select name="area"class="btn btn-secondary form-control click_property"  >
                <option value="all">All</option>
                 <option value="mirpur">Mirpur</option>
                  <option value="azimpur">Azimpur</option>
                  <option value="mohammadpur">Mohammadpur</option>
         </select>	
      
    </div>
    
     <div class="form-group col-md-3">
      <label for="email">Property Location:</label>
          <select name="location"class="btn btn-secondary form-control click_property"  >
             <option value="all">All</option>
              <option value="dhaka">Dhaka</option>
               <option value="chittagong">Chittagong</option>
               <option value="rajshahi">Rajshahi</option>
                <option value="sylhet">Sylhet</option>
                <option value="rangpur">Rangpur</option>
                 <option value="dinajpur">Dinajpur</option>
              </select>
      
    </div>
    
    <div class="form-group col-md-3">
      <label for="email" name="minimum_price">Minimum Price Per Acor:</label>
          <input type="number" value="0" min="0" name="minimum_price" class="form-control click_property">
      
    </div>
    
    <div class="form-group col-md-3">
     <label for="email" name="maximum_price" >Maximum Price Per Acor:</label>
          <input type="number" value="100" max="10000" name="maximum_price" class="form-control click_property">
    </div>
    
                
                           
                        <?php      
        include("connection.php");
$size = $_GET['property_size'];
if($_GET['property_type']=="land")
     $size = "shatangsho";
if($size=="sqreft")
     $size = "width";
if($size == "bigha")
{
    $minimum_size = $_GET['minimum_size'] * 33;
    $maximum_size = $_GET['maximum_size'] * 33;
}
else if($size == "acor")
{
    $minimum_size = $_GET['minimum_size'] * 100;
    $maximum_size = $_GET['maximum_size'] * 100;
}
else
    {
    $minimum_size = $_GET['minimum_size'] ;
    $maximum_size = $_GET['maximum_size'] ;
}
        $sql = "SELECT * FROM ".$_GET['property_type']." WHERE ".$size." BETWEEN '".$minimum_size."' AND '".$maximum_size."'";
if($_GET['property_type']=="land")
    $property_amount = "amount_per_shatangsho";
else if($_GET['property_type']=="commercial")
{
    if($size=="no_of_floor")
    $property_amount="price_per_floor";
    else
        $property_amount="price_per_unit";
}
else
    $property_amount = "price";
     
$sql.=" AND ".$property_amount." BETWEEN '".$_GET['minimum_value']."' AND '".$_GET['maximum_value']."'";
       
$location = $_GET['location'];
$area = $_GET['area'];

$result = mysqli_query($db, $sql);
echo '</div><div class="col-md-12"><h1 id="resultfound">'.mysqli_num_rows($result).' result has found</h1>
                         </div>';
                               

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
    while($row = mysqli_fetch_assoc($result)) {
        
        $sql1="SELECT * FROM property_address WHERE id = '".$row['id']."'";
        if($location != "all")
            $sql1.=" AND district='".$location."'";
        if($area != "all")
            $sql1.=" AND area='".$area."'";
        
        $result1 = mysqli_query($db, $sql1);

        if (mysqli_num_rows($result1) > 0) {
            // output data of each row
        while($row1 = mysqli_fetch_assoc($result1)) {
            
                  $sql2="SELECT name FROM property WHERE id = '".$row['id']."'"; 
            $result2 = mysqli_query($db, $sql2);

        if (mysqli_num_rows($result2) > 0) {
            // output data of each row
        while($row2 = mysqli_fetch_assoc($result2)) {
             $property_name = $row2['name'];
                     
        
            }
        }
           
               $road_no =  $row1['road_no.'];
                $section = $row1['section'];
                $area = $row1['area'];
                $district = $row1['district'];
                $map = $row1['map_location'];
                         
        
            }
        }  
        
        if($getInput->property_type == "land")
        {
            array_push($callback,array('id' => $row['id'],
                                       'name' => $property_name,
                                       'road_no' => $road_no,
                                       'section' => $section,
                                       'area' => $area,
                                       'district' => $district,
                                       'map' => $map,
                                       'shatangsho' => $row['shatangsho'],
                                        'amount_per_shatangsho' => $row['amount_per_shatangsho'],
                                        'picture' => $row['picture']));
            
        }
        else if($getInput->property_type == "commercial")
        {
            
            
            
            if($size == "no_of_floor")
            {
                 array_push($callback,array('id' => $row['id'],
                                       'name' => $property_name,
                                       'road_no' => $road_no,
                                       'section' => $section,
                                       'area' => $area,
                                       'district' => $district,
                                       'map' => $map,
                                        'no_of_floor' => $row['no_of_floor'],
                                            'price_per_floor' => $row['price_per_floor'],
                                            'complete_date'=> $row['complete_date'],
                                            'picture'=>$row['picture']));
            }
           
            else
            {
                array_push($callback,array('id' => $row['id'],
                                       'name' => $property_name,
                                       'road_no' => $road_no,
                                       'section' => $section,
                                       'area' => $area,
                                       'district' => $district,
                                       'map' => $map,
                                        'no_of_units_per_floor' => $row['no_of_units_per_floor'],
                                            'price_per_unit' => $row['price_per_unit'],
                                            'complete_date'=> $row['complete_date'],
                                            'picture'=>$row['picture']));
            }
                
        }
        else
        {
                array_push($callback,array('id' => $row['id'],
                                       'name' => $property_name,
                                       'road_no' => $road_no,
                                       'section' => $section,
                                       'area' => $area,
                                       'district' => $district,
                                       'map' => $map,
                                        'width' => $row['width'],
                                        'height' => $row['height'],
                                         'no_of_rooms'=>$row['no_of_rooms'],
                                         'no_of_bath'=>$row['no_of_bath'],
                                         'no_of_yeird'=>$row['no_of_yeird'],
                                            'price' => $row['price'],
                                            'complete_date'=> $row['complete_date'],
                                            'picture'=>$row['picture']));
            }
             
    }
}


    
?>
                            
                       </div>
                       
                       
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
           
            
            
            
            <!-- js -->


            <script type='text/javascript' src='../scripts/jquery.easing.1.3.js'></script> 

           

 <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
         <script src="../js2/Search.js">
                            
                

            </script>
         
           <script>
        function searchResult()
               {
                   var obj, dbParam, xmlhttp;
obj = { "property_type": $("select[name=property_type]").find(":selected").val(),                                                                       "property_size":$("select[name=property_size]").find(":selected").val(),
        "property_area": $("select[name=area]").find(":selected").val(), 
        "property_location":$("select[name=location]").find(":selected").val(),
        "minimum_size": $("input[name=minimum_size]").val(), 
        "maximum_size":$("input[name=maximum_size]").val(),
        "minimum_price": $("input[name=minimum_price]").val(),
       "maximum_price":$("input[name=maximum_price]").val()};
dbParam = JSON.stringify(obj);
var property_type =$("select[name=property_type]").find(":selected").val();
var property_size = $("select[name=property_size]").find(":selected").val();
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var callback = JSON.parse(this.responseText);
        //console.log(this.responseText);
        $('#resultfound').html(callback.length + " result has found");
        
       for (x in callback)
            {
                
               var createCard = '<div class="col-md-3 resultDiv"><div class="card"> <img src=../images/'+property_type+'/'+callback[x].picture+' alt="" class="img-fluid"><div class="card-img-overlay  gallary"></div><div class="gallary-info"><h3>&#2547;';
                if(property_type=="land")
               {
                 var price ;
                   if(property_size == "acor")
                   price = callback[x].amount_per_shatangsho * 100 + " per Acor";
                   else if(property_size == "bigha")
                       price = callback[x].amount_per_shatangsho * 33+ " per Bigha";
                   else
                       price = callback[x].amount_per_shatangsho+ " per Shatangsho";
                   createCard += price;
               }
               else if(property_type=="commercial")
               {
                 var price ;
                   if(property_size == "no_of_floor")
                   price = callback[x].price_per_floor  + " per Floor";
                   else 
                       price = callback[x].price_per_unit + " per unit";
                  
                   createCard += price;
               }
                else
                    createCard += callback[x].price;
                      
                    
                
                    createCard+='</h3>';
                createCard+='<h3 id="property_name" value="'+callback[x].id+'"> Name: '+ callback[x].name +'</h3>';
                 createCard+='<div class = "row" ><button class="btn btn-primary pg" name="view" data-toggle="modal" data-target="#propertyModal">view</button></div>';
               
                var quantity = 'Available: ' ;
                 if(property_type=="land")
               {
                 
                   if(property_size == "acor")
                  quantity +=  callback[x].shatangsho / 100 + " Acor";
                   else if(property_size == "bigha")
                      quantity += callback[x].shatangsho / 33 + " Bigha";
                   else
                        quantity += callback[x].shatangsho+ " Shatangsho";
                   
               }
             if(property_type=="commercial")
               {
                
                   if(property_size == "no_of_floor")
                   quantity +=callback[x].no_of_floor  + "  floor";
                   else 
                      quantity +=callback[x].no_of_units_per_floor + "  unit per floor";
                  
                   
               }
                else
                   quantity = "";
                if(quantity!="")
               createCard+='<h5> '+ quantity + '</h5><br>';
                createCard+='<h5> Location:'+ callback[x].area+','+callback[x].district+ '</h5>'; 
               createCard+='</div></div></div>'; 
               // console.log(callback[x].id);
                $('.resultRow').append(createCard);
            }
            
    }
    
};
xmlhttp.open("GET", "Searchfound.php?property=" + dbParam, true);
xmlhttp.send();

               };
               
               $(".click_property").focusout(function(){
                   
                   if($('.resultRow > div').hasClass('resultDiv'))
                       $('.resultDiv').remove();
                    searchResult();
                   
               });
               $('.card').click(
               function(){
                   console.log("yes");
               });
               
           
                                       
        
        </script>
           
            

            
            
        
   
</body>
</html>