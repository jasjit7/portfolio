<?php
    require_once 'includes/header.php';
?>

<?php

   if (empty($_POST['user_name'])) {
       header("Location: step_one.php?error=user_name_missing");
    }
    else if (empty($_POST['user_hero'])) {
         header("Location: step_one.php?error=user_hero_missing");
    }
	elseif(empty($_POST['user_bio'])) {
         header("Location: step_one.php?error=user_bio_missing");
    }
?>

<?php
$special_chars_1 = "/[^a-z0-9\-]/i";
	// Better for an email address
	$special_chars_2 = "/[^a-z0-9\-@_.]/i";

	function clean($data, $special_chars) {
	
		$data = strip_tags($data);
	
		$data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
	
		$data = preg_replace($special_chars, " ", $data);
	
		return $data;
	}

	function h($data){
		return htmlspecialchars($data);
	}

	// Write a function to format the name
	// ===================================
	function format_name($name) {
	// strtolower() converts characters in a string to lowercase
		$name = strtolower($name);
		// ucwords() converts the first characters in each word of a string to uppercase
		$name = ucwords($name);
		// return $name to the function call
		return $name;
	}
?>
	
		<div class="container-fixed">
		
			<h1><a href="step_one.php">Back to step one....</a></h1>
			<h2>Superhero Sidekick Selection System</h2>
				<p>Howdy <?php echo $name = ucwords(strtoupper($_POST['user_name'])); ?>!</p>
				<p>Thank you for volunteering as a sidekick for The League of Heroes - we’re excited to have you
				on our team. Our very fancy Superhero Sidekick Selection System has processed the
				information you provided, and we’re pleased to announce that you have been paired with your
				<?php echo $name = ucwords(strtoupper($_POST['user_hero'])); ?>. Take a look below to see which nemesis you will be working to defeat.</p>
				<p>May the forks be with you!</p>
				<p>The League of Heroes</p>

			
	<?php

			
	$superhero_bio = array(
	      array("brainio","Brainio", "images/character-headshots/brainio.png", "Brainio, the English super-genius was hired to develop the Fortress of 	    Justice - a large building capable of housing the team, and making it the de-facto source for world justice."),
	      array("clamp","Clamp","images/character-headshots/clamp.png","Keep watching the skies this summer - The League will be introducing our		   latest hero C.L.A.M.P."),
		  array("dr_goliath","Dr Goliath","images/character-headshots/dr-goliath.png","Although he had been a part time hero for more than 25 years, it was        only during the early 2000s that Dr. Goliath began to seriously consider going full-time."),
		  array("power_maiden","Power Maiden","images/character-headshots/power-maiden.png","Power-maiden, a biologist who trained as a beer brewmaster,            worked tirelessly with Dr. Goliath and Brainio to establish the League's reputation for justice."),
		  array("ironjaw","IronJaw","images/character-headshots/ironjaw.png","Ironjaw, joined last year and boasts 3 laser projecting eye cannons. His	   distinctive costume and loud war cry set him apart from other heroes, gaining him an instant following."),
		  array("shroud","Shroud","images/character-headshots/shroud.png","Shroud,had been a part time hero for more than 25 years."),
	      );

			$arrlength=count($superhero_bio);
			$hero = "NA";
			$image = "NA";
			$bio = "NA";
			for($x = 0; $x < $arrlength; $x++) {
			   if( $superhero_bio[$x][0] == $_POST['user_hero'])
			   { 
				   $hero = $superhero_bio[$x][1];
				   $image = $superhero_bio[$x][2];
				   $bio = $superhero_bio[$x][3];

				   break;
			   }
			}
			?>
			
			<div class="cards">
				<div class="card-1">
					<h3>Superhero</h3>
					<div class="l"><?php echo $hero;?></div>
					<div class="m"><img src="<?php echo $image ;?>"></div>
					<div class="r"><?php echo $bio;?></div>
				</div>
			
				<div class="card-2">
					<h3>Sidekick</h3>
					<div class="l"><?php echo $name = ucwords(strtoupper($_POST['user_name']));?></div>
					<div class="m"><img src="images/character-headshots/unikitty.png" alt="kitty"></div>
					<div class="r"><?php echo $name = $_POST['user_bio'];?></div>
				</div>
			
<!--
			<div class="card">
				<h3>Nemesis</h3>
				<div class="l"></div>
				<div class="m"></div>
				<div class="r"></div>
			</div>
-->
			
			</div>
</div>
		<?php
			require_once 'includes/footer.php';
		?>	
			
			
			
		


