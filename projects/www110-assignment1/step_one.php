<?php
    require_once 'includes/header.php';
?>
<body>
	<main>
		<div class="container-fixed">
		<h1>Superhero Sidekick Selection System</h1>
		<p>The League of Heroes. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

			<form action="step_two.php" method="post">
				<?php if (isset($_GET['errors'])) { ?>
					<div class="input-row">
						<p>Sorry, we can't turn you into a crime-fighting sidekick without all of the information. Try again!</p>
					</div>
				<?php } ?>
				<br>
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
				
					$error = '';
					if ( isset( $_GET[ 'error' ] ) ) {
						$error = $_GET[ 'error' ];
					};

					if ( $error == "user_name_missing" ) {
							echo "<div class='red'>Please enter a name!</div>";
					}
					
					elseif ( $error == "user_bio_missing" ) {
						echo "<div class='red'>Fill the bio!</div>";
					}
					 else{
						 echo "";
					 }
				?>
				<br>
				<br>
				<div class="input-row">
					<label for="first_name">Sidekick Name:</label>
					<input type="text" name="user_name" id="first_name" placeholder="Enter your first name">
				</div>
				<div class="input-row">
					<label for="first_name">Favourite Hero:</label>
					<select class="input-selection" name="user_hero">
						<option value="brainio">Brainio</option>
						<option value="clamp">Clamp</option>
						<option value="dr_goliath">Dr Goliath</option>
						<option value="power_maiden">Power Maiden</option>
						<option value="ironjaw">Ironjaw</option>
						<option value="shroud">Shroud</option>
					</select>
				</div>
				<div class="input-row">
					<label for="bio">Sidekick Bio:</label>
					<textarea name="user_bio" id="bio" maxlength="140" placeholder="Enter your bio"></textarea>
				</div>
				<div class="input-row">
					<input type="submit" value="Select Sidekick">
					<input type="reset" value="Reset">
				</div>
			</form>

		</div>
		<?php
			require_once 'includes/footer.php';
		?>	
	</main>
</body>
</html>
