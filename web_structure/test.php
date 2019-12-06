<?php
    $teampz = "Toro Rosso";
    $drivers= [ "Ridion", "Qumielo", "ArrisCraig", "Heroism", "Battle On",
                "Dennis", "DonkeyKonkey", "TimToBeat", "Jordiz64", "JurdeV",
                "Demigod", "Pinguin", "MOAB02", "Bikk3l", "Trivago", "Thedevilph",
                "Jaimie", "Schapen", "TheDutchTorpedo", "Kyreria", "Aart"
    ];      


    $i = 0;
    while ($i <= 21) {
        $A = "SELECT COUNT('team') AS TD FROM race_results WHERE team LIKE \"%$teampz%\" AND race_id = $i";
        $i++;
        if($i <= 21){
            $B = " UNION ALL ";
        }else{
            $B = "";
        }
        $C = $C.$A.$B;
    }
    Echo $C;
    $test = mysql_query($C);
?>

<?php
    while($row = mysql_fetch_assoc($test)){
        $row['TD'];
    }
?>