<?php    
    $drivers= [ "Ridion", "Qumielo", "ArrisCraig", "Heroism", "Battle On",
                "Dennis", "DonkeyKonkey", "TimToBeat", "Jordiz64", "JurdeV",
                "Demigod", "Pinguin", "MOAB02", "Bikk3l", "Trivago", "Thedevilph",
                "Jaimie", "Schapen", "TheDutchTorpedo", "Kyreria", "Aart"
    ];      

    $i = 0;
    foreach ($drivers as $driver) { 
        $A = "  SELECT CONCAT(voornaam, ' ', achternaam)AS naam, plek, drivers.Team AS Team, SUM(snelste_ronde_punten+race_punten-straf_punten) AS Punten
                FROM race_results
                LEFT JOIN drivers
                ON race_results.driver = drivers.Naam
                WHERE driver LIKE \"$driver\" 
            ";
        $i++;
        if($i < 21){
            $B = " UNION";
        }else{
            $B = " ORDER BY punten DESC, plek;";
        }
        $C = $C.$A.$B;
    };
    
    $C
?>