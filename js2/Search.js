$("select[name=property_type]").change(function(){
                     var maximum_price =  $("label[name=maximum_price]");
                    var minimum_price =  $("label[name=minimum_price]");
                      var property_size_select =  $("select[name=property_size]");
                     var maximum_size_title =  $("label[name=maximum_size_title]");
                    var minimum_size_title =  $("label[name=minimum_size_title]");
                    property_size_select.children().remove();
                    
                    if($("select[name=property_type]").find(":selected").val()=="land")
                        {
                            
                            maximum_price.html("Maximum Price Per Acor:");
                           minimum_price.html("Minimum Price Per Acor:");
                       
                            property_size_select.append('<option value="acor">Acor</option>');
                            property_size_select.append('<option value="bigha">Bigha</option>');
                            property_size_select.append('<option value="shatangsho">Shatangsho</option>');
                             maximum_size_title.html("Maximum Acor:");
                           minimum_size_title.html("Minimum Acor:");
                        }
                    else if($("select[name=property_type]").find(":selected").val()=="commercial")
                        {
                            
                            maximum_price.html("Maximum Price Per Floor:");
                           minimum_price.html("Minimum Price Per Floor:");
                       
                            property_size_select.append('<option value="no_of_floor">No.of Floor</option>');
                            property_size_select.append('<option value="no_of_units_per_floor">No. of Unit</option>');
                            maximum_size_title.html("Maximum No. of Floors:");
                           minimum_size_title.html("Minimum No. of Floors:");
                            
                        }
                    else
                        {
                             maximum_price.html("Maximum Price :");
                           minimum_price.html("Minimum Price :"); 
                            property_size_select.append('<option value="sqreft">Squre feet</option>');
                            property_size_select.append('<option value="no_of_rooms">No. of rooms</option>');
                            property_size_select.append('<option value="no_of_bath">No. of baths</option>');
                            property_size_select.append('<option value="no_of_yeird">No. of yeirds</option>');
                             maximum_size_title.html("Maximum Squre Feet:");
                           minimum_size_title.html("Minimum Squre Feet:");
                        }
                     
                });
                
                $("select[name=property_size]").change(function(){
                   
                    var maximum_price =  $("label[name=maximum_price]");
                    var minimum_price =  $("label[name=minimum_price]");
                     var maximum_size_title =  $("label[name=maximum_size_title]");
                    var minimum_size_title =  $("label[name=minimum_size_title]");
                    var property_size = $("select[name=property_size]").find(":selected").val();
                   if(property_size=="acor")
                       {
                           maximum_price.html("Maximum Price Per Acor:");
                           minimum_price.html("Minimum Price Per Acor:");
                           maximum_size_title.html("Maximum Acor:");
                           minimum_size_title.html("Minimum Acor:");
                       }
                    else if(property_size=="bigha")
                        {
                            maximum_price.html("Maximum Price Per Bigha:");
                           minimum_price.html("Minimum Price Per Bigha:");
                           maximum_size_title.html("Maximum Bigha:");
                           minimum_size_title.html("Minimum Bigha:");
                       }
                    else if(property_size=="shatangsho")
                        {
                            maximum_price.html("Maximum Price Per Shatangsho:");
                           minimum_price.html("Minimum Price Per Shatangsho:");
                           maximum_size_title.html("Maximum Shatangsho:");
                           minimum_size_title.html("Minimum Shatangsho:");
                       }
                    else if(property_size=="no_of_floor")
                        {
                            maximum_price.html("Maximum Price Per Floor:");
                           minimum_price.html("Minimum Price Per Floor:");
                           maximum_size_title.html("Maximum No. of Floors:");
                           minimum_size_title.html("Minimum No. of Floors:");
                       }
                    else if(property_size=="no_of_units_per_floor")
                        {
                            maximum_price.html("Maximum Price Per Unit:");
                           minimum_price.html("Minimum Price Per Unit:");
                           maximum_size_title.html("Maximum No. of Units:");
                           minimum_size_title.html("Minimum No. of Units:");
                       }
                    else if(property_size=="sqreft")
                        {
                             maximum_price.html("Maximum Price :");
                           minimum_price.html("Minimum Price :");
                           maximum_size_title.html("Maximum Squre Feet:");
                           minimum_size_title.html("Minimum Squre Feet:");
                       }
                    else if(property_size=="no_of_rooms")
                        {
                             maximum_price.html("Maximum Price :");
                           minimum_price.html("Minimum Price :");
                           maximum_size_title.html("Maximum No. of Rooms:");
                           minimum_size_title.html("Minimum No. of Rooms:");
                       }
                    else if(property_size=="no_of_bath")
                        {
                             maximum_price.html("Maximum Price :");
                           minimum_price.html("Minimum Price :");
                           maximum_size_title.html("Maximum No. of Baths:");
                           minimum_size_title.html("Minimum No. of Baths:");
                       }
                    else
                        {
                             maximum_price.html("Maximum Price :");
                           minimum_price.html("Minimum Price :");
                           maximum_size_title.html("Maximum No. of Yeirds:");
                           minimum_size_title.html("Minimum No. of Yeirds:");
                       }
                       
                     
                });