<?php    
    include "./includes/klassement/queries/detailed_table_query.php" ;
    $standings  = $C ;       
    $result = mysql_query($standings);
?>
<section id="introduction" class="tm-section-pad-top">
    <div class="container">
        <?php include "./includes/klassement/uitslagen_header.php" ?>
    </div>  
</section>
<div class="box">
    <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Nr</th>
                    <th scope="col">Coureur</th>
                    <th scope="col">AUS</th>
                    <th scope="col">BAH</th>
                    <th scope="col">CHN</th>
                    <th scope="col">AZE</th>
                    <th scope="col">SPA</th>
                    <th scope="col">MON</th>
                    <th scope="col">CAN</th>
                    <th scope="col">FRA</th>
                    <th scope="col">OOS</th>
                    <th scope="col">GBR</th>
                    <th scope="col">DUI</th>
                    <th scope="col">HON</th>
                    <th scope="col">BEL</th>
                    <th scope="col">ITA</th>
                    <th scope="col">SIN</th>
                    <th scope="col">RUS</th>
                    <th scope="col">JAP</th>
                    <th scope="col">MEX</th>
                    <th scope="col">USA</th>
                    <th scope="col">BRA</th>
                    <th scope="col">ABU</th>
                    <th scope="col">Punten</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while($row = mysql_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row["Nr"]."</td>";
                    echo "<td>".$row["Coureur"]."</td>";
                    include './includes/klassement/page_functions/detailed_table_loop.php';
                    echo "<td>".$row["Punten"]."</td>";
                    echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


