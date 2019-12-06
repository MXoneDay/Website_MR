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
                $query = "SELECT CONCAT(voornaam, ' ', achternaam) AS 'naam', drivers.naam AS 'ign', img_dir, racenummer, team FROM drivers ORDER BY achternaam;";
                $result= mysql_query($query) ;
            
                while($row = mysql_fetch_assoc($result)) {
                    $driver = $row["ign"];
                    echo    
                        "
                        <form action=\"driver_profile\" method=\"post\">
                            <div class=\"form-group\">
                            <button type=\"submit\" class=\"koek\"> 
                                    <div style=\"width:300px; height:240px; background-image: url('./img/light2.jpg'); border: solid black 1px;\">
                                        <div class=\"hovereffect\">
                                            <img class=\"img-responsive\" src=".$row["img_dir"].">
                                            <div class=\"overlay\">
                                                <h2>".$row["naam"]." #".$row["racenummer"]."<br><div class=\"lower\">".$row["team"]."</div></h2>
                                            </div>
                                        </div>
                                        <input type=\"text\" class=\"koek\" name=\"driver_info\" value=\"$driver\">
                                </button>
                            </div>
                        </form>
                        ";
                }
            ?>
           
            </div>
        </div>
    </section>
      
    </br></br></br></br>

    <script>
        
    </script>

    <?php include "./includes/main/footer.php"?>
    <?php include "./includes/main/js_functions.php"?>
  </body>
</html>