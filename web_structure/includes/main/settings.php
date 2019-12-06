<?php
    //SET DATAASE TP
    //ON = Online/Server
    //OFF = Local         
    $connection = "ON";
    
    //DATABASE SETTINGS (Server)
    $online_host = "localhost";
    $online_username = "manorrac_admin";
    $online_password = "cT0tt927XY[rF";
    $online_db = "manorrac_f1";

    //DATABASE SETTINGS (Local)
    $locaL_host = "localhost";
    $local_username = "root";
    $local_password = "mysql";
    $local_db = "f1_championship";

    //Upcoming Race
    $race_id = 9;
    //Race ID but than fixed for array like index'
    $db_index_fix_id = $race_id -1;
    //Max amount of races on the calendar
    $max_num_races= 21;
?>