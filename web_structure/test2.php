<?php include "./includes/main/header_info.php" ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

<!-- Hero section -->
<section class="text-white tm-font-big tm-parallax">
    <?php include "./includes/main/navbar.php" ?>
</section>

<section id="introduction">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="container">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php
    $results_Ferrari = "SELECT Team, (snelste_ronde_punten+race_punten-straf_punten) AS 'Punten' FROM race_results WHERE Team LIKE  \"%Ferrari%\" ORDER BY race_id;";
    $Ferrari_convert = mysql_query($results_Ferrari);
    while($row = mysql_fetch_assoc($Ferrari_convert)){
        $results_array_Ferrari[]= $row;
    }

    $teams= [   "Mercedes AMG Petronas", "Scuderia Ferrari", "Red Bull Racing", "Mclaren",
    "Haas"
    ];     

    $i = 1;
    foreach ($teams as $team) { 
        $A = " SELECT race_id, COUNT(team) AS \"drivers\" FROM race_results WHERE Team LIKE \"%Ferrari%\" AND race_id = $i";
        $i++;
        if($i < $db_index_fix_id){
            $B = " UNION ALL";
        }else{
            $B = " ORDER BY race_id;";
        }
        $C = $C.$A.$B;
    };

    $amount_of_driver_per_race = mysql_query($C);

    echo $C;

?>
</section>
