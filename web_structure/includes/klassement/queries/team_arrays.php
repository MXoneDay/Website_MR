<?php
    $results_Mercedes = "   SELECT Team, (snelste_ronde_punten+race_punten-straf_punten) AS 'Punten' FROM race_results WHERE Team LIKE  \"%Mercedes%\"";
    $Mercedes_convert = mysql_query($results_Mercedes);
    while($row = mysql_fetch_assoc($Mercedes_convert)){
        $results_array_Mercedes[]= $row;
    }

    $Mercedes= array();

    for ($x = 0; $x <= $max_num_races*2; $x = $x + 2)
    {
        if($x <= 0){
            $C = $results_array_Mercedes[$x]['Punten'] + $results_array_Mercedes[$x+1]['Punten'];
            array_push($Mercedes, $C);
            
        }
        elseif($x > 0){
            $C = $C + $results_array_Mercedes[$x]['Punten'] + $results_array_Mercedes[$x+1]['Punten'];
            array_push($Mercedes, $C);
        }
    }
    
    $results_Ferrari = "    SELECT Team, (snelste_ronde_punten+race_punten-straf_punten) AS 'Punten' FROM race_results WHERE Team LIKE  \"%Ferrari%\";";
    $Ferrari_convert = mysql_query($results_Ferrari);
    while($row = mysql_fetch_assoc($Ferrari_convert)){
        $results_array_Ferrari[]= $row;
    }

    $Ferrari= array();

    for ($x = 0; $x <= $max_num_races*2; $x = $x + 2)
    {
        if($x <= 0){
            $C = $results_array_Ferrari[$x]['Punten'] + $results_array_Ferrari[$x+1]['Punten'];
            array_push($Ferrari, $C);
            
        }
        elseif($x > 0){
            $C = $C + $results_array_Ferrari[$x]['Punten'] + $results_array_Ferrari[$x+1]['Punten'];
            array_push($Ferrari, $C);
        }
    }

    $results_Red_Bull = "   SELECT Team, (snelste_ronde_punten+race_punten-straf_punten) AS 'Punten' FROM race_results WHERE Team LIKE  \"%Red Bull%\"";
    $Red_Bull_convert = mysql_query($results_Red_Bull);
    while($row = mysql_fetch_assoc($Red_Bull_convert)){
        $results_array_Red_Bull[]= $row;
    }

    $Red_Bull= array();
    
    for ($x = 0; $x <= $max_num_races*2; $x = $x + 2)
    {
        if($x <= 0){
            $C = $results_array_Red_Bull[$x]['Punten'] + $results_array_Red_Bull[$x+1]['Punten'];
            array_push($Red_Bull, $C);
            
        }
        elseif($x > 0){
            $C = $C + $results_array_Red_Bull[$x]['Punten'] + $results_array_Red_Bull[$x+1]['Punten'];
            array_push($Red_Bull, $C);
        }
    }
    
    $results_Mclaren = "    SELECT Team, (snelste_ronde_punten+race_punten-straf_punten) AS 'Punten' FROM race_results WHERE Team LIKE  \"%Mclaren%\"";
    $Mclaren_convert = mysql_query($results_Mclaren);
    while($row = mysql_fetch_assoc($Mclaren_convert)){
        $results_array_Mclaren[]= $row;
    }

    $Mclaren= array();
    
    for ($x = 0; $x <= $max_num_races*2; $x = $x + 2)
    {
        if($x <= 0){
            $C = $results_array_Mclaren[$x]['Punten'] + $results_array_Mclaren[$x+1]['Punten'];
            array_push($Mclaren, $C);
            
        }
        elseif($x > 0){
            $C = $C + $results_array_Mclaren[$x]['Punten'] + $results_array_Mclaren[$x+1]['Punten'];
            array_push($Mclaren, $C);
        }
    }
    
    $results_Renault = "    SELECT Team, (snelste_ronde_punten+race_punten-straf_punten) AS 'Punten' FROM race_results WHERE Team LIKE  \"%Renault%\"";
    $Renault_convert = mysql_query($results_Renault);
    while($row = mysql_fetch_assoc($Renault_convert)){
        $results_array_Renault[]= $row;
    }

    $Renault= array();
    
    for ($x = 0; $x <= $max_num_races*2; $x = $x + 2)
    {
        if($x <= 0){
            $C = $results_array_Renault[$x]['Punten'] + $results_array_Renault[$x+1]['Punten'];
            array_push($Renault, $C);
            
        }
        elseif($x > 0){
            $C = $C + $results_array_Renault[$x]['Punten'] + $results_array_Renault[$x+1]['Punten'];
            array_push($Renault, $C);
        }
    }

    $results_Haas = "   SELECT Team, (snelste_ronde_punten+race_punten-straf_punten) AS 'Punten' FROM race_results WHERE Team LIKE \"%Haas%\"";
    $Haas_convert = mysql_query($results_Haas);
    while($row = mysql_fetch_assoc($Haas_convert)){
        $results_array_Haas[]= $row;
    }

    $Haas= array();
    
    for ($x = 0; $x <= $max_num_races*2; $x = $x + 2)
    {
        if($x <= 0){
            $C = $results_array_Haas[$x]['Punten'] + $results_array_Haas[$x+1]['Punten'];
            array_push($Haas, $C);
            
        }
        elseif($x > 0){
            $C = $C + $results_array_Haas[$x]['Punten'] + $results_array_Haas[$x+1]['Punten'];
            array_push($Haas, $C);
        }
    }

    $results_Racing_Point = "   SELECT Team, (snelste_ronde_punten+race_punten-straf_punten) AS 'Punten' FROM race_results WHERE Team LIKE \"%Racing Point%\"";
    $Racing_Point_convert = mysql_query($results_Racing_Point);
    while($row = mysql_fetch_assoc($Racing_Point_convert)){
        $results_array_Racing_Point[]= $row;
    }

    $Racing_Point= array();

    for ($x = 0; $x <= $max_num_races*2; $x = $x + 2)
    {
        if($x <= 0){
            $C = $results_array_Racing_Point[$x]['Punten'] + $results_array_Racing_Point[$x+1]['Punten'];
            array_push($Racing_Point, $C);
            
        }
        elseif($x > 0){
            $C = $C + $results_array_Racing_Point[$x]['Punten'] + $results_array_Racing_Point[$x+1]['Punten'];
            array_push($Racing_Point, $C);
        }
    }
    
    $results_Toro_Rosso = "     SELECT Team, (snelste_ronde_punten+race_punten-straf_punten) AS 'Punten' FROM race_results WHERE Team LIKE \"%Toro Rosso%\"";
    $Toro_Rosso_convert = mysql_query($results_Toro_Rosso);
    while($row = mysql_fetch_assoc($Toro_Rosso_convert)){
        $results_array_Toro_Rosso[]= $row;
    }

    $Toro_Rosso= array();
    
    $teampz = "Toro Rosso";
    for ($x = 0; $x <= $max_num_races; $x++) { 
        $A = "  SELECT COUNT('team') AS TD FROM race_results WHERE team LIKE \"%$teampz%\" AND race_id = $x";
        $x++;
        if($i < 21){
            $B = " UNION ALL";
        }else{
            $B = " ORDER BY race_id ASC;";
        }
        $C = $C.$A.$B;
    };
    
    //echo $C;
    for ($x = 0; $x <= $max_num_races*2; $x = $x + 2)
    {
        if($x <= 0){
            $C = $results_array_Toro_Rosso[$x]['Punten'] + $results_array_Toro_Rosso[$x+1]['Punten'];
            array_push($Toro_Rosso, $C);
            
        }
        elseif($x > 0){
            $C = $C + $results_array_Toro_Rosso[$x]['Punten'] + $results_array_Toro_Rosso[$x+1]['Punten'];
            array_push($Toro_Rosso, $C);
        }
    }

    $results_Alfa_Romeo = "     SELECT Team, (snelste_ronde_punten+race_punten-straf_punten) AS 'Punten' FROM race_results WHERE Team LIKE \"%Alfa Romeo%\"";
    $Alfa_Romeo_convert = mysql_query($results_Alfa_Romeo);
    while($row = mysql_fetch_assoc($Alfa_Romeo_convert)){
        $results_array_Alfa_Romeo[]= $row;
    }

    $Alfa_Romeo= array();
    
    for ($x = 0; $x <= $max_num_races*2; $x = $x + 2)
    {
        if($x <= 0){
            $C = $results_array_Alfa_Romeo[$x]['Punten'] + $results_array_Alfa_Romeo[$x+1]['Punten'];
            array_push($Alfa_Romeo, $C);
            
        }
        elseif($x > 0){
            $C = $C + $results_array_Alfa_Romeo[$x]['Punten'] + $results_array_Alfa_Romeo[$x+1]['Punten'];
            array_push($Alfa_Romeo, $C);
        }
    }

    $results_Williams = "       SELECT Team, (snelste_ronde_punten+race_punten-straf_punten) AS 'Punten' FROM race_results WHERE Team LIKE \"%Williams%\"";
    $Williams_convert = mysql_query($results_Williams);
    while($row = mysql_fetch_assoc($Williams_convert)){
        $results_array_Williams[]= $row;
    }

    $Williams= array();

    for ($x = 0; $x <= $max_num_races*2; $x = $x + 2)
    {
        if($x <= 0){
            $C = $results_array_Williams[$x]['Punten'] + $results_array_Williams[$x+1]['Punten'];
            array_push($Williams, $C);
            
        }
        elseif($x > 0){
            $C = $C + $results_array_Williams[$x]['Punten'] + $results_array_Williams[$x+1]['Punten'];
            array_push($Williams, $C);
        }
    }
?>
   
        <script>
        var js_array = [<?php echo '"'.implode('","', $arrayz).'"' ;?>];

        //All Team data in JS arrays instead of php arrays
        var js_Mercedes=        [<?php echo '"'.implode('","', $Mercedes).'"' ;?>];
        var js_Ferrari=         [<?php echo '"'.implode('","', $Ferrari).'"' ;?>];              
        var js_Red_Bull=        [<?php echo '"'.implode('","', $Red_Bull).'"' ;?>];
        var js_Mclaren=         [<?php echo '"'.implode('","', $Mclaren).'"' ;?>];
        var js_Renault=         [<?php echo '"'.implode('","', $Renault).'"' ;?>];
        var js_Haas=            [<?php echo '"'.implode('","', $Haas).'"' ;?>];
        var js_Racing_Point=    [<?php echo '"'.implode('","', $Racing_Point).'"' ;?>];
        var js_Toro_Rosso=      [<?php echo '"'.implode('","', $Toro_Rosso).'"' ;?>];
        var js_Alfa_Romeo=      [<?php echo '"'.implode('","', $Alfa_Romeo).'"' ;?>];
        var js_Williams=        [<?php echo '"'.implode('","', $Williams).'"' ;?>];

        var ctx = document.getElementById('myChart').getContext('2d');
        var mixedChart = new Chart(ctx, {
            type:"line",
            data:{
                labels: js_array,                                       //Array with DB contents of the kalender
                datasets:[{
                    label:"Mercedes AMG Petronas Motorsport",                                    
                    data:js_Mercedes,
                    fill:false,
                    borderColor:"rgb(0,210,190)",
                    lineTension:0.1
                },{
                    label:"Scuderia Ferrari",                                       
                    data:js_Ferrari,
                    fill:false,
                    borderColor:"rgb(220,0,0)",
                    lineTension:0.1
                },{
                    label:"Aston Martin Red Bull Racing",                                       
                    data:js_Red_Bull,
                    fill:false,
                    borderColor:"rgb(30,65,255)",
                    lineTension:0.1
                },{
                    label:"McLaren F1 Team",                                       
                    data:js_Mclaren,
                    fill:false,
                    borderColor:"rgb(255,135,0)",
                    lineTension:0.1
                },{
                    label:"Renault F1 Team",                                       
                    data:js_Renault,
                    fill:false,
                    borderColor:"rgb(255,245,0)",
                    lineTension:0.1
                },{
                    label:"Rich Energy Haas F1 Team",                                       
                    data:js_Haas,
                    fill:false,
                    borderColor:"rgb(240,215,135)",
                    lineTension:0.1
                },{
                    label:"SportPesa Racing Point F1 Team",                                       
                    data:js_Racing_Point,
                    fill:false,
                    borderColor:"rgb(245,150,200)",
                    lineTension:0.1
                },{
                    label:"Red Bull Toro Rosso Honda",                                       
                    data:js_Toro_Rosso,
                    fill:false,
                    borderColor:"rgb(70,155,255)",
                    lineTension:0.1
                },{
                    label:"Alfa Romeo Racing",                                       
                    data:js_Alfa_Romeo,
                    fill:false,
                    borderColor:"rgb(155,0,0)",
                    lineTension:0.1
                },{
                    label:"ROKiT Williams Racing",                                       
                    data:js_Williams,
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