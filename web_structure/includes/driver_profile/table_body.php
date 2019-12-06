<tbody>
                    <?php
                        while($row = mysql_fetch_assoc($stats)) {

                            if($row["warning"] >= 1){
                                $warning = $row["warning"];
                            }else{
                                $warning = "0";
                            }

                            if($row["lic"] >= 1){
                                $lic = $row["lic"];
                            }else{
                                $lic = "0";
                            }

                            echo    
                                "
                                <tr>
                          
                                    <td>".$row["team"]."</td>
                                </tr>
                                <tr>
                        
                                    <td>".$row["points"]."</td>
                                </tr>
                                <tr>
                              
                                    <td>".$row["wins"]."</td>
                                </tr>
                                <tr>
                                
                                    <td>".$row["podiums"]."</td>
                                </tr>
                                <tr>
                                 
                                    <td>".$row["point_fin"]."</td>
                                </tr>
                                <tr>
                            
                                    <td>".$row["h_fin"]."</td>
                                </tr>
                                <tr>
                                
                                    <td>".$row["tot_races"]."</td>
                                </tr>
                                <tr>
                                  
                                    <td>".$row["race_avg"]."</td>
                                </tr>
                                <tr>
                             
                                    <td>".$row["pole"]."</td>
                                </tr>
                                <tr>
                              
                                    <td>".$row["h_grid"]."</td>
                                </tr>
                                <tr>
                              
                                    <td>".$row["kwali_avg"]."</td>
                                </tr>
                                <tr>
                           
                                    <td>".$row["fl"]."</td>
                                </tr>
                                <tr>
                               
                                    <td>".$row["straf"]."</td>
                                </tr>
                                <tr>
                          
                                    <td>".$warning."</td>
                                </tr>
                                <tr>
                                    <td>".$lic."</td>
                                </tr>
                                ";
                            }
                        ?>
                    </tbody>        

                    