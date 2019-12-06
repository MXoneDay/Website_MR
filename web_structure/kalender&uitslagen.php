<!DOCTYPE html>
<html lang="en">
    <?php include "./includes/main/header_info.php" ?>
    <style>

    #clock {
        font-family: 'Share Tech Mono', monospace;
        color: #1B1B1E;
        text-align: center;
        color: #404040;

    }
    .time {
        letter-spacing: 0.05em;
        font-size: 30px;
        padding: 5px;
    }
    .date {
        letter-spacing: 0.1em;
        font-size: 30px;
    }
    .text {
        letter-spacing: 0.1em;
        font-size: 18px;
        padding: 20px;
    }
}
    </style>
  <body>    
    <!-- Hero section -->
    <section class="text-white tm-font-big tm-parallax">
        <?php include "./includes/main/navbar.php" ?>
    </section>
      
    <section id="introduction" class="tm-section-pad-top">
        <div class="container">
            <div class="bar">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="button_cont" align="center">
                            <a href="https://docs.google.com/spreadsheets/d/1DcFxKq4HnK-oabswkdSrY2NzZyeF8J_UZgZqf2kPzBk/edit?usp=sharing"  class="example_e"> Aanmelden </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="button_cont" align="center">
                            <a href="results.php"  class="example_e"> Race Results</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="button_cont" align="center">
                            <a href="standings.php"  class="example_e"> Standings</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="button_cont" align="center">
                            <a href="driver_info.php"  class="example_e"> Driver Profiles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 	Add a bit of margin
        for styling purpose			-->
        <div class="col-lg-12">
            <p class="mb-4 tm-intro-text"></p>
        </div>

                <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    </br>
                </div>
                <div class="col-lg-12">
                    <div id="clock"> 
                    <h1>Kalender F1 2019</h1>
                        <h2 class="date">
                        <?php
                            $race = mysql_query("SELECT Race FROM kalender WHERE race_id = $race_id");
                            while($row = mysql_fetch_assoc($race)) {
                                $gp = $row["Race"];
                            }
                            echo $gp;
                        ?> 
                        </h2>
                        <span class="time" id="day"></span>
                        <span class="time">:</span>  
                        <span class="time" id="hour"></span>
                        <span class="time">:</span>   
                        <span class="time" id="minute"></span>
                        <span class="time">:</span>   
                        <span class="time" id="second"></span> 
                    </div>
                </div>
                <div class="col-lg-12">
                    </br>
                </div>
                <div class="col-lg-12">
                    <table class="table" id="demo">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Race</th>
                            <th scope="col">Datum</th>
                            <th scope="col">Tijd</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                                $kalender  = "SELECT Race, DATE_FORMAT(datum, \"%e %M %Y\"), TIME_FORMAT(Tijd, \"%H %i\") FROM kalender ORDER BY datum";
                                $result = mysql_query($kalender);
                                while($row = mysql_fetch_assoc($result)) {
                                        echo    "<tr>          
                                                    <td>".$row["Race"]."</td>
                                                    <td>".$row["DATE_FORMAT(datum, \"%e %M %Y\")"]."</td>
                                                    <td>".$row["TIME_FORMAT(Tijd, \"%H %i\")"]."</td>
                                                <tr>";
                                }
                            ?>
                        </tbody>
                    </table>
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
    <?php include "./includes/klassement&uitslagen/clock.php"?>
  </body>
</html>
