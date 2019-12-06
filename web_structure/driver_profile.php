<!DOCTYPE html>
<html lang="en">
    <?php 
        $driver = $_POST["driver_info"] ;
        include "./includes/main/header_info.php"
    ?>
  <body>
<style>
.driver_title{
    font-family: 'Share Tech Mono', monospace;
    font-size:36px;
}
.driver_profile_box {
    border : solid 10px black;
    width : 500px;
    height :  260px;
    background-image: url('./img/light2.jpg');
    overflow: hidden;
}

.driver_profile_img {
    border: none;
    display: block;
    position: relative;
    margin: 0 auto;
    margin-top:0px;
}

.team_logo_img {
    border: none;
    display: block;
    position: relative;
    max-width : 160px;
    max-height : 160px;
}

.driver_stats_table_text{
    font-family: 'Oswald', sans-serif;
    color: black;
    font-size: 22px;
}

.driver_stats_table_data{
    font-family: 'Oswald', sans-serif;
    color: black;
    font-size: 22px;
    margin-left: 75px;
}
</style>
  
    <!-- Hero section -->
    <section class="text-white tm-font-big tm-parallax">
        <?php include "./includes/main/navbar.php" ?>
    </section>

        <!-- Select Race by id nummber -->
        <section id="introduction" class="tm-section-pad-top">
            <div class="container">
                <?php  
                if(True){ 
                    //Query to extract driver data
                    $query_driver_data = "  SELECT CONCAT(voornaam, ' ', achternaam) AS 'naam', drivers.naam AS 'ign', img_dir, racenummer, team FROM drivers WHERE drivers.naam = \"$driver\";";
                    $result_driver_data= mysql_query($query_driver_data) ;
                    //save data from SQL QUERY to a variable
                    while($row = mysql_fetch_assoc($result_driver_data)) {
                        $driver_full_name = $row["naam"];
                        $driver_img_dir= $row["img_dir"];
                    }

                    $query_driver_data = "  SELECT CONCAT(voornaam, ' ', achternaam) AS 'naam', drivers.naam AS 'ign', img_dir, racenummer, team FROM drivers WHERE drivers.naam = \"$driver\";";
                    $result_driver_data= mysql_query($query_driver_data) ;
                    
                    while($row = mysql_fetch_assoc($result_driver_data)) {
                        $driver_full_name = $row["naam"];
                        $driver_img_dir= $row["img_dir"];
                    }
                    
                    ?>
                    <div class="driver_title">
                        <!-- Display the name of the driver-->
                        <?php Echo $driver_full_name;?>
                    </div>
                    <div class="driver_content">
                        <div class="row">
                        <!-- Load player data used for table loop-->
                        <?php include "./includes/driver_profile/queries/driver_stats.php" ?>
                        <div class="col-lg-6">
                            <!-- Driver info such as Name, IMG, Team-->
                            <div class="driver_information_box">
                                <div class="driver_profile_box">
                                    <img class="driver_profile_img" src= <?php echo $driver_img_dir; ?> >
                                </div>
                            </div>
                        </div>
                        <!-- Table with driver stats-->
                        <div class="col-lg-6">
                            <div class="row">
                            <table class="driver_stats_table_text">
                                <tr><th scope="col"></th></tr>
                                <tr><td> Team </td></tr>
                                <tr><td> Punten </td></tr>
                                <tr><td> Aantal overwinningen </td></tr>
                                <tr><td> Aantal keren op het podium </td></tr>
                                <tr><td> Aantal keren in de punten gereden </td></tr>
                                <tr><td> Beste eindpositie in een race</td></tr>
                                <tr><td> Aantal Grand Prix' meegedaan </td> </tr>
                                <tr><td> Gemiddelde eindpositie in de race </td></tr>
                                <tr><td> Aantal polepositions</td></tr>
                                <tr><td> Beste kwalificatie resultaat</td></tr>
                                <tr><td> Gemidelde Startpositie</td></tr>
                                <tr><td> Aantal snelste race ronden</td></tr>
                                <tr><td> Verdiende aantal strafpunten</td></tr>
                                <tr><td> Aantal Waarschuwing(en)</td></tr>
                                <tr><td> Aantal punten op de licensie</td></tr> 
                            </table>
                            <table class="driver_stats_table_data">
                                <tr>
                                    <th scope="col"></th>
                                </tr>
                                <?php include "./includes/driver_profile/table_body.php" ?>   
                            </table>
                            </div>
                        </div>
                    </div>
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
        </section>
                                
    </br></br></br></br>

    <?php include "./includes/main/footer.php"?>
    <?php include "./includes/main/js_functions.php"?>
    <script>
        
    </script>
  </body>
</html>