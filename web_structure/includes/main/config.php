<?php 
    include "settings.php";

    // Switch statement to load the variables for localhost or online mode
    if($connection == "ON"){
        $connect = mysql_connect($online_host, $online_username, $online_password);
        mysql_select_db($online_db);
    }
    elseif($connection == "OFF"){
        $connect = mysql_connect($local_host, $local_username, $local_password);
        mysql_select_db($local_db);
    }
    else{
        echo "rip";
    }
    //Create Queries to load specific data (DAY+MONTH , YEAR, TIME)
    $query1 = "SELECT DATE_FORMAT(datum, \"%e %M\") FROM kalender WHERE race_id = $race_id;";
    $query2 = "SELECT DATE_FORMAT(datum, \"%Y\") FROM kalender WHERE race_id = $race_id;";
    $query3 = "SELECT Tijd FROM kalender WHERE race_id = $race_id;";
    
    //Set Query to MySQL Query
    $result1 = mysql_query($query1);
    $result2 = mysql_query($query2);
    $result3 = mysql_query($query3);

    //Fetch Queries for usage
    while($row = mysql_fetch_assoc($result1)) {
        $date = $row["DATE_FORMAT(datum, \"%e %M\")"];
    }
    while($row = mysql_fetch_assoc($result2)) {
        $year = $row["DATE_FORMAT(datum, \"%Y\")"];
    }
    while($row = mysql_fetch_assoc($result3)) {
        $time= $row["Tijd"];
    }
?>
<script>
    // db var into the clock
    var deadline = new Date("<?php Echo $date;?>, <?php Echo $year;?> <?php Echo $time;?>").getTime(); 
</script>

