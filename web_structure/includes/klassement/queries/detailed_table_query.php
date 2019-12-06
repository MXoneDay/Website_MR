<?php    
    $drivers= [ "Ridion", "Qumielo", "ArrisCraig", "Heroism", "Battle On",
                "Dennis", "DonkeyKonkey", "TimToBeat", "Jordiz64", "JurdeV",
                "Demigod", "Pinguin", "MOAB02", "Bikk3l", "Trivago", "Thedevilph",
                "Jaimie", "Schapen", "TheDutchTorpedo", "Kyreria", "Aart"
    ];     
    $amount_of_drivers = 21;
    $i = 0;
    foreach ($drivers as $driver) { 
        $A = " SELECT DISTINCT  
            (SELECT Racenummer FROM drivers WHERE naam = \"$driver\") AS \"Nr\",
            (SELECT DISTINCT CONCAT(voornaam, ' ', achternaam)AS naam FROM drivers WHERE naam = \"$driver\") AS \"Coureur\",
            (SELECT display_plek FROM race_results WHERE race_id = 1 AND driver = \"$driver\") AS \"AUS\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 1 AND driver = \"$driver\") AS \"S1\",
            (SELECT grid FROM race_results WHERE race_id = 1 AND driver = \"$driver\") AS \"P1\",

            (SELECT display_plek FROM race_results WHERE race_id = 2 AND driver = \"$driver\") AS \"BAH\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 2 AND driver = \"$driver\") AS \"S2\",
            (SELECT grid FROM race_results WHERE race_id = 2 AND driver = \"$driver\") AS \"P2\",

            (SELECT display_plek FROM race_results WHERE race_id = 3 AND driver = \"$driver\") AS \"CHN\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 3 AND driver = \"$driver\") AS \"S3\",
            (SELECT grid FROM race_results WHERE race_id = 3 AND driver = \"$driver\") AS \"P3\",

            (SELECT display_plek FROM race_results WHERE race_id = 4 AND driver = \"$driver\") AS \"AZE\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 4 AND driver = \"$driver\") AS \"S4\",
            (SELECT grid FROM race_results WHERE race_id = 4 AND driver = \"$driver\") AS \"P4\", 

            (SELECT display_plek FROM race_results WHERE race_id = 5 AND driver = \"$driver\") AS \"SPA\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 5 AND driver = \"$driver\") AS \"S5\",
            (SELECT grid FROM race_results WHERE race_id = 5 AND driver = \"$driver\") AS \"P5\",

            (SELECT display_plek FROM race_results WHERE race_id = 6 AND driver = \"$driver\") AS \"MON\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 6 AND driver = \"$driver\") AS \"S6\",
            (SELECT grid FROM race_results WHERE race_id = 6 AND driver = \"$driver\") AS \"P6\",

            (SELECT display_plek FROM race_results WHERE race_id = 7 AND driver = \"$driver\") AS \"CAN\", 
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 7 AND driver = \"$driver\") AS \"S7\",
            (SELECT grid FROM race_results WHERE race_id = 7 AND driver = \"$driver\") AS \"P7\",

            (SELECT display_plek FROM race_results WHERE race_id = 8 AND driver = \"$driver\") AS \"FRA\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 8 AND driver = \"$driver\") AS \"S8\",
            (SELECT grid FROM race_results WHERE race_id = 8 AND driver = \"$driver\") AS \"P8\",

            (SELECT display_plek FROM race_results WHERE race_id = 9 AND driver = \"$driver\") AS \"OOS\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 9 AND driver = \"$driver\") AS \"S9\",
            (SELECT grid FROM race_results WHERE race_id = 9 AND driver = \"$driver\") AS \"P9\",

            (SELECT display_plek FROM race_results WHERE race_id = 10 AND driver = \"$driver\") AS \"GBR\", 
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 10 AND driver = \"$driver\") AS \"S10\",
            (SELECT grid FROM race_results WHERE race_id = 10 AND driver = \"$driver\") AS \"P10\",

            (SELECT display_plek FROM race_results WHERE race_id = 11 AND driver = \"$driver\") AS \"DUI\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 11 AND driver = \"$driver\") AS \"S11\",
            (SELECT grid FROM race_results WHERE race_id = 11 AND driver = \"$driver\") AS \"P11\",

            (SELECT display_plek FROM race_results WHERE race_id = 12 AND driver = \"$driver\") AS \"HON\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 12 AND driver = \"$driver\") AS \"S12\",
            (SELECT grid FROM race_results WHERE race_id = 12 AND driver = \"$driver\") AS \"P12\",

            (SELECT display_plek FROM race_results WHERE race_id = 13 AND driver = \"$driver\") AS \"BEL\", 
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 13 AND driver = \"$driver\") AS \"S13\",
            (SELECT grid FROM race_results WHERE race_id = 13 AND driver = \"$driver\") AS \"P13\",

            (SELECT display_plek FROM race_results WHERE race_id = 14 AND driver = \"$driver\") AS \"ITA\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 14 AND driver = \"$driver\") AS \"S14\",
            (SELECT grid FROM race_results WHERE race_id = 14 AND driver = \"$driver\") AS \"P14\",

            (SELECT display_plek FROM race_results WHERE race_id = 15 AND driver = \"$driver\") AS \"SIN\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 15 AND driver = \"$driver\") AS \"S15\",
            (SELECT grid FROM race_results WHERE race_id = 15 AND driver = \"$driver\") AS \"P15\",

            (SELECT display_plek FROM race_results WHERE race_id = 16 AND driver = \"$driver\") AS \"RUS\", 
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 16 AND driver = \"$driver\") AS \"S16\",
            (SELECT grid FROM race_results WHERE race_id = 16 AND driver = \"$driver\") AS \"P16\",

            (SELECT display_plek FROM race_results WHERE race_id = 17 AND driver = \"$driver\") AS \"JAP\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 17 AND driver = \"$driver\") AS \"S17\",
            (SELECT grid FROM race_results WHERE race_id = 17 AND driver = \"$driver\") AS \"P17\",

            (SELECT display_plek FROM race_results WHERE race_id = 18 AND driver = \"$driver\") AS \"MEX\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 18 AND driver = \"$driver\") AS \"S18\",
            (SELECT grid FROM race_results WHERE race_id = 18 AND driver = \"$driver\") AS \"P18\",

            (SELECT display_plek FROM race_results WHERE race_id = 19 AND driver = \"$driver\") AS \"USA\", 
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 19 AND driver = \"$driver\") AS \"S19\",
            (SELECT grid FROM race_results WHERE race_id = 19 AND driver = \"$driver\") AS \"P19\",

            (SELECT display_plek FROM race_results WHERE race_id = 20 AND driver = \"$driver\") AS \"BRA\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 20 AND driver = \"$driver\") AS \"S20\",
            (SELECT grid FROM race_results WHERE race_id = 20 AND driver = \"$driver\") AS \"P20\",

            (SELECT display_plek FROM race_results WHERE race_id = 21 AND driver = \"$driver\") AS \"ABU\",
            (SELECT snelste_ronde_punten FROM race_results WHERE race_id = 21 AND driver = \"$driver\") AS \"S21\",
            (SELECT grid FROM race_results WHERE race_id = 1 AND driver = \"$driver\") AS \"P21\",

            (SELECT SUM(plek) FROM race_results WHERE driver = \"$driver\") AS TPVR,
            (SELECT SUM(snelste_ronde_punten+race_punten-straf_punten) FROM race_results WHERE driver LIKE \"$driver\") AS \"Punten\" 
        FROM race_results" ;
        $i++;
        if($i < $amount_of_drivers){
            $B = " UNION";
        }else{
            $B = " ORDER BY Punten DESC, TPVR;";
        }
        $C = $C.$A.$B;
    };
    $C
?>

