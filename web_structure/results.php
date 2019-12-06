<!DOCTYPE html>
<html lang="en">
  <?php include "./includes/main/header_info.php" ?>
  <link rel="stylesheet" href="test.css">
  
  <body>    
    <!-- Hero section -->
    <section class="text-white tm-font-big tm-parallax">
        <?php include "./includes/main/navbar.php" ?>
    </section>

    <section id="introduction" class="tm-section-pad-top">
        <div class="container">	
            <div class="row">
            <?php     
                $query = "SELECT race, img_dir, race_id FROM kalender ORDER BY datum;";
                $result= mysql_query($query) ;
            
                while($row = mysql_fetch_assoc($result)) {
                    echo    
                        "
                        <form action=\"results\" method=\"post\">
                            <div class=\"form-group\" style=\"padding:5px\">
                                <button type=\"submit\" class=\"koek\"> 
                                    <div style=\"width:75px; height:50px; border : 5px black solid;\">     
                                            <input type=\"text\"  class=\"koek\" name=\"race_id\" value=".$row["race_id"]." pattern=\"\d+\"> 
                                            <img src=".$row["img_dir"]." class=\"img_flag\">
                                    </div>
                                </button>
                            </div>
                        </form>
                        ";
                }
            ?>
            </div>
            

            <?php
                //Statement to load the contents on a button press
                if($_POST["race_id"] > 0 && $_POST["race_id"] <= $max_num_races)
                {
                    $race_num = $_POST["race_id"];
                    
                    $naam_query = "SELECT race FROM kalender WHERE race_id = $race_num;";
                    $naam_result= mysql_query($naam_query) ;

                    while($row = mysql_fetch_assoc($naam_result)) {
                        $race_name = $row["race"];
                    }

                    ?>  
                    <br>
                    <h1> <?php echo $race_name ; ?> </h1>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                        <?php
                            $query1 = "SELECT track_dir FROM kalender WHERE race_id = $race_num;";
                            $result1= mysql_query($query1) ;

                            while($row1 = mysql_fetch_assoc($result1)) {
                                echo    
                                    "
                                        <div style=\"padding:5px\">
                                                <div style=\"width:400px; height:300px; border : 5px black solid;\">
                                                        <img style =\" max-width: 100%; max-height: 100%;\"src=".$row1["track_dir"].">
                                                </div>
                                        </div>
                                    ";
                            }
                        ?>
                        </div>
                        <div class="col-lg-3">
                        <?php
                            //Query 1
                            $query1 = " SELECT CONCAT(voornaam, ' ', achternaam)AS naam, race_results.team, tijd
                                        FROM race_results
                                        INNER JOIN  drivers ON race_results.driver = drivers.naam
                                        WHERE race_id = $race_num AND plek = 1;";
                            $result1= mysql_query($query1) ;

                            while($row1 = mysql_fetch_assoc($result1)) {
                                $racewinner = $row1["naam"];
                                $rw_time = $row1["tijd"];
                            }
                           
                            //Query 2
                            $query2 = " SELECT CONCAT(voornaam, ' ', achternaam)AS naam, race_results.team, race_results.snelste_ronde
                                        FROM race_results
                                        INNER JOIN  drivers ON race_results.driver = drivers.naam
                                        WHERE race_id = $race_num
                                        ORDER BY snelste_ronde ASC
                                        LIMIT 1;";
                            $result2= mysql_query($query2) ;

                            while($row2 = mysql_fetch_assoc($result2)) {
                            $fl_name = $row2["naam"];
                            $fl_time = $row2["snelste_ronde"];
                            }
                           
                            //Query 3
                            $query1 = " SELECT CONCAT(voornaam, ' ', achternaam)AS naam, race_results.team, tijd
                            FROM race_results
                            INNER JOIN  drivers ON race_results.driver = drivers.naam
                            WHERE race_id = $race_num AND plek = 1;";
                            $result1= mysql_query($query1) ;

                            while($row1 = mysql_fetch_assoc($result1)) {
                            $racewinner = $row1["naam"];
                            $rw_time = $row1["tijd"];
                            }
                            print_r($race_id_array);
                            echo    
                            "
                            <h4> Racewinner </h4>
                            <h6> $racewinner - $rw_time</h6>
                            <h4> Lap Record </h4>
                            <h6> $fl_name  - $fl_time</h6>
                            <h4> Qualifying Record</h4>
                            <h6> Time - Name </h6>
                            <h6> Racenumber : $race_num </h6>
                            
                            </div>
                            <div class=\"col-lg-3\">
                                <form action=\"race_result\" method=\"post\">
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"example_e\"> 
                                            <div class=\"button_cont\">
                                                Practice Results
                                                <input type=\"text\" class=\"koek\" name=\"race_results\" placeholder=\"test\" value=\"$race_num\">
                                            </div>
                                        </button>
                                    </div>
                                </form>
                                <br>
                                <form action=\"race_result\" method=\"post\">
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"example_e\"> 
                                            <div class=\"button_cont\">
                                                Qualifying Results
                                                <input type=\"text\" class=\"koek\" name=\"race_results\" placeholder=\"test\" value=\"$race_num\">
                                            </div>
                                        </button>
                                    </div>
                                </form>
                                <br>
                                <form action=\"race_result\" method=\"post\">
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"example_e\"> 
                                            <div class=\"button_cont\">
                                                Race Results
                                                <input type=\"text\" class=\"koek\" name=\"race_results\" placeholder=\"test\" value=\"$race_num\">
                                            </div>
                                        </button>
                                    </div>
                                </form>
                            </div>";
            }
            else{
                echo    
                "
                <br>
                <h4> Race Resultaten </h4>
                <p> Voor de uitslagen klik op de vlag van de des betreffende race <br>
                    Hier vind je meer informatie over de race en de uitslagen.<br>
                </p>
                ";
            }
        ?>
        </div>
    </section>
      
    </br></br></br></br>

    <script>
        
    </script>

    <?php include "./includes/main/footer.php"?>
    <?php include "./includes/main/js_functions.php"?>
  </body>
</html>