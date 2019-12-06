    <!-- 1 -->
    <?php
        $results_Battle_On = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Battle On\" ORDER BY race_id ;";
        $Battle_On_convert = mysql_query($results_Battle_On);
        while($row = mysql_fetch_assoc($Battle_On_convert)){
            $results_array_Battle_On[]= $row;
        }

        $Battle_On= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_Battle_On[$x]['Punten'];
                array_push($Battle_On, $C);
            }
            elseif($x > 0){
                $B = $results_array_Battle_On[$x]['Punten'];
                $C = $B + $C;
                array_push($Battle_On, $C);
            }
        }
    ?>
    <!-- 2 -->
    <?php
        $results_Dennis = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Dennis\" ORDER BY race_id;";
        $Dennis_convert = mysql_query($results_Dennis);
        while($row = mysql_fetch_assoc($Dennis_convert)){
            $results_array_Dennis[]= $row;
        }

        $Dennis= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_Dennis[$x]['Punten'];
                array_push($Dennis, $C);
            }
            elseif($x > 0){
                $B = $results_array_Dennis[$x]['Punten'];
                $C = $B + $C;
                array_push($Dennis, $C);
            }
        }
    ?>
    <!-- 3 -->
    <?php
        $results_ridion = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Ridion\" ORDER BY race_id;";
        $ridion_convert = mysql_query($results_ridion);
        while($row = mysql_fetch_assoc($ridion_convert)){
            $results_array_ridion[]= $row;
        }

        $ridion= array();
        
        for ($x = 0; $x <= $max_num_races; $x++)
        {   
            if($x <= 0){
                $C = $results_array_ridion[$x]['Punten'];
                array_push($ridion, $C);
            }
            elseif($x > 0){
                $B = $results_array_ridion[$x]['Punten'];
                $C = $B + $C;
                array_push($ridion, $C);
            }
        }
    ?>

    <!--  4 -->
    <?php
        $results_Qumielo = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Qumielo\" ORDER BY race_id ;";
        $Qumielo_convert = mysql_query($results_Qumielo);
        while($row = mysql_fetch_assoc($Qumielo_convert)){
            $results_array_Qumielo[]= $row;
        }

        $Qumielo= array();
        
        for ($x = 0; $x <= $max_num_races; $x++)
        {   
            if($x <= 0){
                $C = $results_array_Qumielo[$x]['Punten'];
                array_push($Qumielo, $C);
            }
            elseif($x > 0){
                $B = $results_array_Qumielo[$x]['Punten'];
                $C = $B + $C;
                array_push($Qumielo, $C);
            }
        }
    ?>
    <!-- 5 -->
    <?php
        $results_ArrisCraig = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"ArrisCraig\" ORDER BY race_id ;";
        $ArrisCraig_convert = mysql_query($results_ArrisCraig);
        while($row = mysql_fetch_assoc($ArrisCraig_convert)){
            $results_array_ArrisCraig[]= $row;
        }

        $ArrisCraig= array();
        
        for ($x = 0; $x <= $max_num_races; $x++)
        {   
            if($x <= 0){
                $C = $results_array_ArrisCraig[$x]['Punten'];
                array_push($ArrisCraig, $C);
            }
            elseif($x > 0){
                $B = $results_array_ArrisCraig[$x]['Punten'];
                $C = $B + $C;
                array_push($ArrisCraig, $C);
            }
        }
    ?>
    <!--  6 -->
    <?php
        $results_Heroism = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Heroism\" ORDER BY race_id ;";
        $Heroism_convert = mysql_query($results_Heroism);
        while($row = mysql_fetch_assoc($Heroism_convert)){
            $results_array_Heroism[]= $row;
        }

        $Heroism= array();
        
        for ($x = 0; $x <= $max_num_races; $x++)
        {   
            if($x <= 0){
                $C = $results_array_Heroism[$x]['Punten'];
                array_push($Heroism, $C);
            }
            elseif($x > 0){
                $B = $results_array_Heroism[$x]['Punten'];
                $C = $B + $C;
                array_push($Heroism, $C);
            }
        }
    ?>
    <!-- 7 -->
    <?php
        $results_DonkeyKonkey = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"DonkeyKonkey\" ORDER BY race_id ;";
        $DonkeyKonkey_convert = mysql_query($results_DonkeyKonkey);
        while($row = mysql_fetch_assoc($DonkeyKonkey_convert)){
            $results_array_DonkeyKonkey[]= $row;
        }

        $DonkeyKonkey= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_DonkeyKonkey[$x]['Punten'];
                array_push($DonkeyKonkey, $C);
            }
            elseif($x > 0){
                $B = $results_array_DonkeyKonkey[$x]['Punten'];
                $C = $B + $C;
                array_push($DonkeyKonkey, $C);
            }
        }
    ?>
    <!-- 8 -->
    <?php
        $results_TimToBeat = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"TimToBeat\" ORDER BY race_id ;";
        $TimToBeat_convert = mysql_query($results_TimToBeat);
        while($row = mysql_fetch_assoc($TimToBeat_convert)){
            $results_array_TimToBeat[]= $row;
        }

        $TimToBeat= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_TimToBeat[$x]['Punten'];
                array_push($TimToBeat, $C);
            }
            elseif($x > 0){
                $B = $results_array_TimToBeat[$x]['Punten'];
                $C = $B + $C;
                array_push($TimToBeat, $C);
            }
        }
    ?>
    <!-- 9 -->
    <?php
        $results_Jordiz64 = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Jordiz64\" ORDER BY race_id ;";
        $Jordiz64_convert = mysql_query($results_Jordiz64);
        while($row = mysql_fetch_assoc($Jordiz64_convert)){
            $results_array_Jordiz64[]= $row;
        }

        $Jordiz64= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_Jordiz64[$x]['Punten'];
                array_push($Jordiz64, $C);
            }
            elseif($x > 0){
                $B = $results_array_Jordiz64[$x]['Punten'];
                $C = $B + $C;
                array_push($Jordiz64, $C);
            }
        }
    ?>
    <!-- 10 -->
    <?php
        $results_JurdeV = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"JurdeV\" ORDER BY race_id ;";
        $JurdeV_convert = mysql_query($results_JurdeV);
        while($row = mysql_fetch_assoc($JurdeV_convert)){
            $results_array_JurdeV[]= $row;
        }

        $JurdeV= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_JurdeV[$x]['Punten'];
                array_push($JurdeV, $C);
            }
            elseif($x > 0){
                $B = $results_array_JurdeV[$x]['Punten'];
                $C = $B + $C;
                array_push($JurdeV, $C);
            }
        }
    ?>
    <!-- 11 -->
    <?php
        $results_Demigod = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Demigod\" ORDER BY race_id ;";
        $Demigod_convert = mysql_query($results_Demigod);
        while($row = mysql_fetch_assoc($Demigod_convert)){
            $results_array_Demigod[]= $row;
        }

        $Demigod= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_Demigod[$x]['Punten'];
                array_push($Demigod, $C);
            }
            elseif($x > 0){
                $B = $results_array_Demigod[$x]['Punten'];
                $C = $B + $C;
                array_push($Demigod, $C);
            }
        }
    ?>
    <!-- 12 -->
    <?php
        $results_Pinguin = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Pinguin\" ORDER BY race_id ;";
        $Pinguin_convert = mysql_query($results_Pinguin);
        while($row = mysql_fetch_assoc($Pinguin_convert)){
            $results_array_Pinguin[]= $row;
        }

        $Pinguin= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_Pinguin[$x]['Punten'];
                array_push($Pinguin, $C);
            }
            elseif($x > 0){
                $B = $results_array_Pinguin[$x]['Punten'];
                $C = $B + $C;
                array_push($Pinguin, $C);
            }
        }
    ?>
    <!-- 13 -->
    <?php
        $results_Trivago = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Trivago\" ORDER BY race_id ;";
        $Trivago_convert = mysql_query($results_Trivago);
        while($row = mysql_fetch_assoc($Trivago_convert)){
            $results_array_Trivago[]= $row;
        }

        $Trivago= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_Trivago[$x]['Punten'];
                array_push($Trivago, $C);
            }
            elseif($x > 0){
                $B = $results_array_Trivago[$x]['Punten'];
                $C = $B + $C;
                array_push($Trivago, $C);
            }
        }
    ?>
    <!-- 14 -->
    <?php
        $results_Jaimie = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Jaimie\" ORDER BY race_id ;";
        $Jaimie_convert = mysql_query($results_Jaimie);
        while($row = mysql_fetch_assoc($Jaimie_convert)){
            $results_array_Jaimie[]= $row;
        }

        $Jaimie= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_Jaimie[$x]['Punten'];
                array_push($Jaimie, $C);
            }
            elseif($x > 0){
                $B = $results_array_Jaimie[$x]['Punten'];
                $C = $B + $C;
                array_push($Jaimie, $C);
            }
        }
    ?>
    <!-- 15 -->
    <?php
        $results_Schapen = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Schapen\" ORDER BY race_id ;";
        $Schapen_convert = mysql_query($results_Schapen);
        while($row = mysql_fetch_assoc($Schapen_convert)){
            $results_array_Schapen[]= $row;
        }

        $Schapen= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_Schapen[$x]['Punten'];
                array_push($Schapen, $C);
            }
            elseif($x > 0){
                $B = $results_array_Schapen[$x]['Punten'];
                $C = $B + $C;
                array_push($Schapen, $C);
            }
        }
    ?>
    <!-- 16 -->
    <?php /*
        $results_TheDutchTorpedo = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"TheDutchTorpedo\" ORDER BY race_id ;";
        $TheDutchTorpedo_convert = mysql_query($results_TheDutchTorpedo);
        while($row = mysql_fetch_assoc($TheDutchTorpedo_convert)){
            $results_array_TheDutchTorpedo[]= $row;
        }

        $TheDutchTorpedo= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_TheDutchTorpedo[$x]['Punten'];
                array_push($TheDutchTorpedo, $C);
            }
            elseif($x > 0){
                $B = $results_array_TheDutchTorpedo[$x]['Punten'];
                $C = $B + $C;
                array_push($TheDutchTorpedo, $C);
            }
        }*/
    ?>
    <!-- 17 -->
    <?php
        $results_Bikk3l = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Bikk3l\" ORDER BY race_id ;";
        $Bikk3l_convert = mysql_query($results_Bikk3l);
        while($row = mysql_fetch_assoc($Bikk3l_convert)){
            $results_array_Bikk3l[]= $row;
        }

        $Bikk3l= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_Bikk3l[$x]['Punten'];
                array_push($Bikk3l, $C);
            }
            elseif($x > 0){
                $B = $results_array_Bikk3l[$x]['Punten'];
                $C = $B + $C;
                array_push($Bikk3l, $C);
            }
        }
    ?>
    <!-- 18 -->
    <?php
        $results_Thedevilph = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Thedevilph\" ORDER BY race_id ;";
        $Thedevilph_convert = mysql_query($results_Thedevilph);
        while($row = mysql_fetch_assoc($Thedevilph_convert)){
            $results_array_Thedevilph[]= $row;
        }

        $Thedevilph= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_Thedevilph[$x]['Punten'];
                array_push($Thedevilph, $C);
            }
            elseif($x > 0){
                $B = $results_array_Thedevilph[$x]['Punten'];
                $C = $B + $C;
                array_push($Thedevilph, $C);
            }
        }
    ?>
    <!-- 19 -->
    <?php
        $results_Kyreria = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Kyreria\" ORDER BY race_id ;";
        $Kyreria_convert = mysql_query($results_Kyreria);
        while($row = mysql_fetch_assoc($Kyreria_convert)){
            $results_array_Kyreria[]= $row;
        }

        $Kyreria= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_Kyreria[$x]['Punten'];
                array_push($Kyreria, $C);
            }
            elseif($x > 0){
                $B = $results_array_Kyreria[$x]['Punten'];
                $C = $B + $C;
                array_push($Kyreria, $C);
            }
        }
    ?>
    <!-- 20 -->
    <?php
        $results_Aart = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"Aart\" ORDER BY race_id ;";
        $Aart_convert = mysql_query($results_Aart);
        while($row = mysql_fetch_assoc($Aart_convert)){
            $results_array_Aart[]= $row;
        }

        $Aart= array();

        for ($x = 0; $x <= $max_num_races; $x++)
        {
            if($x <= 0){
                $C = $results_array_Aart[$x]['Punten'];
                array_push($Aart, $C);
            }
            elseif($x > 0){
                $B = $results_array_Aart[$x]['Punten'];
                $C = $B + $C;
                array_push($Aart, $C);
            }
        }
    ?>
        <script>
        var js_array = [<?php echo '"'.implode('","', $arrayz).'"' ;?>];

        var js_Battle_On = [<?php echo '"'.implode('","', $Battle_On).'"' ;?>];
        var js_Dennis = [<?php echo '"'.implode('","', $Dennis).'"' ;?>];
        
        var js_ridion = [<?php echo '"'.implode('","', $ridion).'"' ;?>];
        var js_Qumielo = [<?php echo '"'.implode('","', $Qumielo).'"' ;?>];
        
        var js_ArrisCraig = [<?php echo '"'.implode('","', $ArrisCraig).'"' ;?>];
        var js_Heroism = [<?php echo '"'.implode('","', $Heroism).'"' ;?>];
        
        var js_DonkeyKonkey = [<?php echo '"'.implode('","', $DonkeyKonkey).'"' ;?>];
        var js_TimToBeat = [<?php echo '"'.implode('","', $TimToBeat).'"' ;?>];

        var js_Jordiz64 = [<?php echo '"'.implode('","', $Jordiz64).'"' ;?>];
        var js_JurdeV= [<?php echo '"'.implode('","', $JurdeV).'"' ;?>];

        var js_Demigod = [<?php echo '"'.implode('","', $Demigod).'"' ;?>];
        var js_Pinguin= [<?php echo '"'.implode('","', $Pinguin).'"' ;?>];

        var js_Trivago = [<?php echo '"'.implode('","', $Trivago).'"' ;?>];
        var js_Jaimie= [<?php echo '"'.implode('","', $Jaimie).'"' ;?>];

        var js_Schapen = [<?php echo '"'.implode('","', $Schapen).'"' ;?>];
        //var js_TheDutchTorpedo= [<?php //echo '"'.implode('","', $TheDutchTorpedo).'"' ;?>];

        var js_Bikk3l = [<?php echo '"'.implode('","', $Bikk3l).'"' ;?>];
        var js_Thedevilph= [<?php echo '"'.implode('","', $Thedevilph).'"' ;?>];

        var js_Kyreria = [<?php echo '"'.implode('","', $Kyreria).'"' ;?>];
        var js_Aart= [<?php echo '"'.implode('","', $Aart).'"' ;?>];

        var ctx = document.getElementById('myChart').getContext('2d');
        var mixedChart = new Chart(ctx, {
            type:"line",
            data:{
                labels: js_array,                                       //Array with DB contents of the kalender
                datasets:[{
                    label:"Battle On",                                       //team
                    data:js_Battle_On,
                    fill:false,
                    borderColor:"rgb(0,210,190)",
                    lineTension:0.1
                },{
                    label:"Dennis",                                   //team
                    data:js_Dennis,
                    fill:false,
                    borderColor:"rgb(0,210,190)",
                    lineTension:0.1
                },{
                    label:"Ridion",                                       //team
                    data:js_ridion,
                    fill:false,
                    borderColor:"rgb(220,0,0)",
                    lineTension:0.1
                },{
                    label:"Qumielo",                                   //team
                    data:js_Qumielo,
                    fill:false,
                    borderColor:"rgb(220,0,0)",
                    lineTension:0.1
                },{
                    label:"ArrisCraig",                                   //team
                    data:js_ArrisCraig,
                    fill:false,
                    borderColor:"rgb(30,65,255)",
                    lineTension:0.1
                },{
                    label:"Heroism",                                   //team
                    data:js_Heroism,
                    fill:false,
                    borderColor:"rgb(30,65,255)",
                    lineTension:0.1
                },{
                    label:"DonkeyKonkey",                                   //team
                    data:js_DonkeyKonkey,
                    fill:false,
                    borderColor:"rgb(255,135,0)",
                    lineTension:0.1
                },{
                    label:"TimToBeat",                                   //team
                    data:js_TimToBeat,
                    fill:false,
                    borderColor:"rgb(255,135,0)",
                    lineTension:0.1
                },{
                    label:"Jordiz64",                                   //team
                    data:js_Jordiz64,
                    fill:false,
                    borderColor:"rgb(255,245,0)",
                    lineTension:0.1
                },{
                    label:"JurdeV",                                   //team
                    data:js_JurdeV,
                    fill:false,
                    borderColor:"rgb(255,245,0)",
                    lineTension:0.1
                },{
                    label:"Demigod",                                   //team
                    data:js_Demigod,
                    fill:false,
                    borderColor:"rgb(240,215,135)",
                    lineTension:0.1
                },{
                    label:"Pinguin",                                   //team
                    data:js_Pinguin,
                    fill:false,
                    borderColor:"rgb(240,215,135)",
                    lineTension:0.1
                },{
                    label:"Trivago",                                   //team
                    data:js_Trivago,
                    fill:false,
                    borderColor:"rgb(245,150,200)",
                    lineTension:0.1
                },{
                    label:"Jaimie",                                   //team
                    data:js_Jaimie,
                    fill:false,
                    borderColor:"rgb(245,150,200)",
                    lineTension:0.1
                },{
                    label:"Schapen",                                   //team
                    data:js_Schapen,
                    fill:false,
                    borderColor:"rgb(70,155,255)",
                    lineTension:0.1
                },/*{
                    label:"TheDutchTorpedo",                                   //team
                    data:js_TheDutchTorpedo,
                    fill:false,
                    borderColor:"rgb(70,155,255)",
                    lineTension:0.1
                },*/{
                    label:"Bikk3l",                                   //team
                    data:js_Bikk3l,
                    fill:false,
                    borderColor:"rgb(155,0,0)",
                    lineTension:0.1
                },{
                    label:"Thedevilph",                                   //team
                    data:js_Thedevilph,
                    fill:false,
                    borderColor:"rgb(155,0,0)",
                    lineTension:0.1
                },{
                    label:"Kyreria",                                   //team
                    data:js_Kyreria,
                    fill:false,
                    borderColor:"rgb(211,211,211)",
                    lineTension:0.1
                },{
                    label:"Aart",                                   //team
                    data:js_Aart,
                    fill:false,
                    borderColor:"rgb(211,211,211)",
                    lineTension:0.1
                },
                
                
                ]
            },
            options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
    </script>