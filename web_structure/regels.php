<!DOCTYPE html>
<html lang="en">
  <?php include "./includes/main/header_info.php" ?>
  <body>    
    <!-- Hero section -->
    <section class="text-white tm-font-big tm-parallax">
        <?php include "./includes/main/navbar.php" ?>
    </section>
      
    <section id="introduction" class="tm-section-pad-top">
		<div class="container">	
			<!-- 	Load header		-->
			<?php include "./includes/regels/regels_header.php" ?>

			<!-- 	Add a bit of margin
					for styling purpose			-->
			<div class="col-lg-12">
        		<p class="mb-4 tm-intro-text"></p>
    		</div>
			<!-- 	double container in a container
					just to fix styling ;p			-->
			<div class="container">
				<div class="container">
				<?php
					//Statement to load the contents on a button press
					if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['important_rules']))
					{
						include ("./includes/regels/belangrijke_regels.php");
					}
					elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['OFF_track']))
					{
						include ("./includes/regels/off_track_regels.php");
					}
					elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ON_track']))
					{
						include ("./includes/regels/on_track_regels.php");
					}
					elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['game_settings']))
					{
						include ("./includes/regels/game_settings.php");
					}
					else{
						include ("./includes/regels/regels_intro.php");
					}
					
					?>
				</div>
			</div>
		</div> 
    </section>
	</br></br></br></br>

    <?php include "./includes/main/footer.php"?>
    <?php include "./includes/main/js_functions.php"?>
  </body>
</html>