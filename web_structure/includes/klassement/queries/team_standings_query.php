<?php    
    $teams= [   "Mercedes AMG Petronas", "Scuderia Ferrari", "Red Bull Racing", "Mclaren",
                "Haas", "Racing Point", "Red Bull Toro Rosso Honda",
                "Renault F1 Team", "Alfa romeo racing", "Williams Racing"
    ];     

    $i = 0;
    foreach ($teams as $team) { 
        $A = " SELECT Team, SUM(snelste_ronde_punten+race_punten-straf_punten) AS 'Punten' FROM race_results WHERE Team LIKE \"%$team%\" ";
        $i++;
        if($i < 10){
            $B = " UNION";
        }else{
            $B = " ORDER BY punten DESC;";
        }
        $C = $C.$A.$B;
    };
    
    $C
?>