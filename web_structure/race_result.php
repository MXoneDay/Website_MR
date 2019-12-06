<!DOCTYPE html>
<html lang="en">
  <?php include "./includes/main/header_info.php" ?>
  <body>    
  
    <!-- Hero section -->
    <section class="text-white tm-font-big tm-parallax">
        <?php include "./includes/main/navbar.php" ?>
    </section>

        <!-- Select Race by id nummber -->
        <section id="introduction" class="tm-section-pad-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                        <?php
                        if($_POST["race_results"] > 0){
                        ?>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Positie</th>
                                        <th scope="col">Driver</th>
                                        <th scope="col">Tijd</th>
                                        <th scope="col">Fastest Lap</th>
                                        <th scope="col">Punten</th>
                                        <th scope="col">Strafpunten</th>
                                    </tr>
                                </thead>
                                    <?php 
                                        //Set id and db_index_fix_id to load the id's on the
                                        // WHERE Clause in the query
                                        $id = $_POST["race_results"];
                                        $db_index_fix_id = $id - 1;
                                        include "includes/uitslagen/grand_prix_name.php";       //$race
                                        include "includes/uitslagen/single_race_result.php";    //$standing
                                        ?>
                                        <h1 style="text-align:center;"> 
                                            <?php
                                                while($row = mysql_fetch_assoc($race)) {
                                                    $gp = $row["Race"];
                                                }
                                                Echo $gp;
                                            ?> 
                                        </h1>
                                        <?php
                                        if(mysql_num_rows($standing)> 1) {
                                            while($row = mysql_fetch_assoc($standing)) {
                                                echo    "<tr>          
                                                        <td>".$row["plek"]."</td>
                                                        <td>".$row["driver"]."</td>
                                                        <td>".$row["tijd"]."</td>
                                                        <td>".$row["snelste_ronde"]."</td>
                                                        <td>".$row["Punten"]."</td>
                                                        <td>".$row["straf_punten"]."</td>
                                                        </tr>";
                                            }
                                        }
                                    ?>
                            </table>
                            <?php }
                            else{
                            ?>
                                <div class="col-lg-12">
                                    <h2 class="mb-4 tm-section-title"> Niet bereikbare Pagina</h2>
                                </div>
                                <div class="col-lg-12">
                                    <p class="mb-4 tm-intro-text">
                                        Je bent via een onjuiste manier op de pagina gekomen.<br>
                                        Ga terug naar de hoofdpagina.
                                    </p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                                
    </br></br></br></br>

    <?php include "./includes/main/footer.php"?>
    <?php include "./includes/main/js_functions.php"?>
    <script>
        
    </script>
  </body>
</html>