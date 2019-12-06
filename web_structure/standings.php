<!DOCTYPE html>
<html lang="en">
  <?php include "./includes/main/header_info.php" ?>
  <body>    
    <section class="text-white tm-font-big tm-parallax">
        <?php include "./includes/main/navbar.php" ?>
    </section>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['driver_table']))
        {
            include ("./includes/klassement/driver_table.php");
        }
        elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['team_table']))
        {
            include ("./includes/klassement/team_table.php");
        }
        elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['detailed_table'])){
            include ("./includes/klassement/detailed_table.php");
        }
        elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['driver_graph']))
        {
            include ("./includes/klassement/driver_graph.php");
        }                        
        elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['team_graph']))
        {
            include ("./includes/klassement/team_graph.php");
        }
        else{
            include ("./includes/klassement/driver_table.php");
        }
    ?>
    <br><br><br><br>
    <?php include "./includes/main/footer.php"?>
    <?php include "./includes/main/js_functions.php"?>
  </body>
</html>