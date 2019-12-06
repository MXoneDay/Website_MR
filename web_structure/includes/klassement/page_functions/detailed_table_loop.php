<?php 
    $tracks = ["AUS", "BAH", "CHN", "AZE", "SPA",
                "MON", "CAN", "FRA", "OOS", "GBR",
                "DUI", "HON", "BEL", "ITA", "SIN",
                "RUS", "JAP", "MEX", "USA", "BRA", "ABU"
    ];     

    $i = 1;
    $Fastest_Lap = "S".$i;
    $Pole_position = "P".$i;

    foreach ($tracks as $track)  {            
        if($row[$track] == 1) {
            if($row[$Pole_position] == 1){
                if($row[$Fastest_Lap] == 1){
                    Echo "<td bgcolor=\"#FFD700\">".$row[$track]."<font color=\"#FF0000\">"." P"."<font color=\"#0000ff\">"." S </td>";
                }else{
                    Echo "<td bgcolor=\"#FFD700\">".$row[$track]."<font color=\"#FF0000\">"." P </td>";
                }
            }else{
                if($row[$Fastest_Lap] == 1){
                    Echo "<td bgcolor=\"#FFD700\">".$row[$track]."<font color=\"#0000ff\">"." S </td>";
                }else{
                    Echo "<td bgcolor=\"#FFD700\">".$row[$track]."</td>";
                }
            }
        }
        elseif($row[$track] == 2) {
            if($row[$Pole_position] == 1){
                if($row[$Fastest_Lap] == 1){
                    Echo "<td bgcolor=\"#C0C0C0\">".$row[$track]."<font color=\"#FF0000\">"." P"."<font color=\"#0000ff\">"." S </td>";
                }else{
                    Echo "<td bgcolor=\"#C0C0C0\">".$row[$track]."<font color=\"#FF0000\">"." P </td>";
                }
            }else{
                if($row[$Fastest_Lap] == 1){
                    Echo "<td bgcolor=\"#C0C0C0\">".$row[$track]."<font color=\"#0000ff\">"." S </td>";
                }else{
                    Echo "<td bgcolor=\"#C0C0C0\">".$row[$track]."</td>";
                }
            }
        }
        elseif($row[$track] == 3) {
            if($row[$Pole_position] == 1){
                if($row[$Fastest_Lap] == 1){
                    Echo "<td bgcolor=\"#E59400\">".$row[$track]."<font color=\"#FF0000\">"." P"."<font color=\"#0000ff\">"." S </td>";
                }else{
                    Echo "<td bgcolor=\"#E59400\">".$row[$track]."<font color=\"#FF0000\">"." P </td>";
                }
            }else{
                if($row[$Fastest_Lap] == 1){
                    Echo "<td bgcolor=\"#E59400\">".$row[$track]."<font color=\"#9C172D\">"." S </td>";
                }else{
                    Echo "<td bgcolor=\"#E59400\">".$row[$track]."</td>";
                }
            }
        }
        elseif($row[$track] >= 4 && $row[$track] <= 10) {
            if($row[$Pole_position] == 1){
                if($row[$Fastest_Lap] == 1){
                    Echo "<td bgcolor=\"#9ae44d\">".$row[$track]."<font color=\"#FF0000\">"." P"."<font color=\"#0000ff\">"." S </td>";
                }else{
                    Echo "<td bgcolor=\"#9ae44d\">".$row[$track]."<font color=\"#FF0000\">"." P </td>";
                }
            }else{
                if($row[$Fastest_Lap] == 1){
                    Echo "<td bgcolor=\"#9ae44d\">".$row[$track]."<font color=\"#0000ff\">"." S </td>";
                }else{
                    Echo "<td bgcolor=\"#9ae44d\">".$row[$track]."</td>";
                }
            }
        }
        elseif($row[$track] >= 11 && $row[$track] <= 20) {
            if($row[$Pole_position] == 1){
                if($row[$Fastest_Lap] == 1){
                    Echo "<td bgcolor=\"#9999FF\">".$row[$track]."<font color=\"#FF0000\">"." P"."<font color=\"#0000ff\">"." S </td>";
                }else{
                    Echo "<td bgcolor=\"#9999FF\">".$row[$track]."<font color=\"#FF0000\">"." P </td>";
                }
            }
            else{
                if($row[$Fastest_Lap] == 1){
                    Echo "<td bgcolor=\"#9999FF\"><font color=\"#fff\">".$row[$track]."<font color=\"#0000ff\">"." S </td>";
                }else{
                    Echo "<td bgcolor=\"#9999FF\"><font color=\"#fff\">".$row[$track]."</td>";
                }
            }
        }
        elseif($row[$track] == 'DNF') {
            Echo "<td bgcolor=\"#BCA0B0\"><font color=\"#fff\">"."$row[$track]"."</td>";
        }
        elseif($row[$track] == 'DNS') {
            Echo "<td bgcolor=\"#E5E5E5\">"."$row[$track]"."</td>";
        }
        elseif($row[$track] == 'DSQ') {
            Echo "<td bgcolor=\"#323232\"><font color=\"#fff\">".$row[$track]."</td>";
        }
        elseif($row[$track] == "") {
            Echo "<td>".$row[$track]."</td>";
        }
        $i++;
        $Fastest_Lap = "S".$i;
        $Pole_position = "P".$i;
    }
    
?>

