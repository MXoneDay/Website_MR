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
            <div class="driver_title">
                <h1> Hoi ik ben Driver blabla</h1>
            </div>
            <div class="driver_content">
                <div class="row">
                    <?php  
                    $race_id = $_POST['race_id'];
                    
                    $query = "  SELECT CONCAT(voornaam, ' ', achternaam)AS naam, race_results.team
                                FROM race_results
                                INNER JOIN  drivers ON race_results.driver = drivers.naam 
                                WHERE race_id = $race_id AND plek = 1;";
                    $result = mysql_query($query);

                    while($row = mysql_fetch_assoc($result)) {
                        echo $row["naam"];
                    }
                    ?>
                </div>
            </div>
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