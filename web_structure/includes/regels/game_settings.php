<div class="col-lg-12">
    <h2 class="mb-4 tm-section-title">Game Settings</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h2></h2>
            <p class="mb-4 tm-intro-text">
                    Session Options                                             <br>
                    Category : 				Modern Cars         ( Equal )       <br>
                    Practice : 				Short 				(30 min)        <br>
                    Qualifying : 			Short Qualifying 	(18 min)        <br>
                    Race Distance : 		50%				    (45 min +/-)    <br>
                    Weather :				Dynamic                             <br>
                    Session Start Time: 	Official                            <br>
                    Parc Fermé Rules :		On                                  <br>
                    Collisions :			On                                  <br>
                    Vehicle Damage :		Simulation                          <br>
                    Ghosting :				Off                                 <br>
                    Car Setup :				Full                                <br>
                    Safety Car :			On                                  <br>
                    Rules and Flags :		On                                  <br>
                    Formation Lap :		    On                                  <br>
                    Race Starts :			Manual                              <br>
                    Tyre Temperature :		Surface & Carcass (Simulation)      <br>
            </p>
        </div>
        <div class="col-lg-6">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Race</th>
                        <th scope="col">Corner Cutting Rules</th>
                    </tr>
                </thead>
                            
                <tbody>
                    <?php 
                        $query = " SELECT Race, Corner_cutting_rules FROM kalender ORDER BY race_id; ";
                        $result = mysql_query($query);
                        while($row = mysql_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>".$row["Race"]."</td>";
                            echo "<td>".$row["Corner_cutting_rules"]."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
                
            </table>
        </div>
    </div>
</div>