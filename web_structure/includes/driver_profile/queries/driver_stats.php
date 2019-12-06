<?php     
$stats = mysql_query(
        "SELECT
        (SELECT team FROM drivers WHERE naam = \"$driver\") as \"team\",
        SUM(`snelste_ronde_punten`+`race_punten`-`straf_punten`) as \"points\",
        
        COUNT(IF(plek = 1,1,NULL)) as \"wins\",
        COUNT(IF(plek <= 3,1,NULL)) as \"podiums\",
        COUNT(IF(plek <= 10,1,NULL)) as \"point_fin\",
        (SELECT plek FROM race_results WHERE driver = \"$driver\" ORDER BY plek ASC LIMIT 1) as \"h_fin\",
        COUNT(IF(team != \"x\",1,NULL)) as \"tot_races\",
        ROUND(SUM(plek)/COUNT(IF(team != \"x\",1,NULL)))  as \"race_avg\",
        
        COUNT(IF(grid = 1,1,NULL)) as \"pole\",
        (SELECT grid FROM race_results WHERE driver = \"$driver\" ORDER BY grid ASC LIMIT 1) as \"h_grid\",
        ROUND(SUM(grid)/COUNT(IF(team != \"x\",1,NULL)))  as \"kwali_avg\",
        
        SUM(snelste_ronde_punten) as \"fl\",
        SUM(straf_punten) as \"straf\",

        (SELECT SUM(warning) FROM penalties WHERE driver = \"$driver\") as \"warning\",
        (SELECT SUM(licence) FROM penalties WHERE driver = \"$driver\") as \"lic\"
        
        FROM race_results 
        WHERE driver = \"$driver\";"
);
?>
<!--
COUNT(race_id) FROM race_results WHERE driver = \"$driver\" ORDER BY snelste_ronde ASC LIMIT 1 as \"fl\",
-->