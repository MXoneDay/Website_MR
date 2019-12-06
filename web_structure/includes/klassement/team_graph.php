<?php include "./includes/main/header_info.php" ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

<!-- Hero section -->
<section class="text-white tm-font-big tm-parallax">
    <?php include "./includes/main/navbar.php" ?>
</section>

<section id="introduction" class="tm-section-pad-top">
    <div class="container">
        <?php include "./includes/klassement/uitslagen_header.php" ?>
    </div>  
</section>
    <!-- Select Race by id nummber -->
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
    //Array vam Races
    $query = "SELECT Race FROM kalender ORDER BY race_id LIMIT $db_index_fix_id ;";
    $result = mysql_query($query);
    while($row = mysql_fetch_assoc($result)){
        $array[]= $row;
    }

    $myJSON = json_encode($array);
    $arrayz = array_column($array, 'Race');
?>

<?php include './includes/klassement/queries/team_arrays.php'?>    