<?php    
    include "./includes/klassement/queries/driver_standings_query.php";   
    $standings  = $C ;  
    $result = mysql_query($standings);
?>
<section id="introduction" class="tm-section-pad-top">
    <div class="container">
        <?php include "./includes/klassement/uitslagen_header.php" ?>
        <div class="container">
            <div class="col-lg-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Driver</th>
                        <th scope="col">Team</th>
                        <th scope="col">Punten</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while($row = mysql_fetch_assoc($result)) {
                                echo    "<tr>          
                                            <td>".$row["naam"]."</td>
                                            <td>".$row["Team"]."</td>
                                            <td>".$row["Punten"]."</td>
                                        <tr>"; 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</section> 