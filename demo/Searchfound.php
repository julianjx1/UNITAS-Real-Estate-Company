<?php
include("connection.php");
header("Content-Type: application/json; charset=UTF-8");
$getInput=json_decode($_GET['property'],false);
$size = $getInput->property_size;
if($getInput->property_type=="land")
     $size = "shatangsho";
if($getInput->property_size=="sqreft")
     $size = "width";
if($size == "bigha")
{
    $minimum_size = $getInput->minimum_size * 33;
    $maximum_size = $getInput->maximum_size * 33;
}
else if($size == "acor")
{
    $minimum_size = $getInput->minimum_size * 100;
    $maximum_size = $getInput->maximum_size * 100;
}
else
    {
    $minimum_size = $getInput->minimum_size ;
    $maximum_size = $getInput->maximum_size ;
}
$callback=array();
$sql = "SELECT * FROM ".$getInput->property_type." WHERE ".$size." BETWEEN '".$minimum_size."' AND '".$maximum_size."'";
if($getInput->property_type=="land")
    $property_amount = "amount_per_shatangsho";
else if($getInput->property_type=="commercial")
{
    if($getInput->property_size=="no_of_floor")
    $property_amount="price_per_floor";
    else
        $property_amount="price_per_unit";
}
else
    $property_amount = "price";
     
$sql.=" AND ".$property_amount." BETWEEN '".$getInput->minimum_price."' AND '".$getInput->maximum_price."'";
       
$location = $getInput->property_location;
$area = $getInput->property_area;

$result = mysqli_query($db, $sql);

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



echo json_encode($callback);

?>