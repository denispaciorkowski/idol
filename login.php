<div id="login_content">
		<?php

		// controleer of er iets is ingevuld
		$wachtwoord = "open";
		if (isset($_POST['wachtwoord'])){
			$ingevuldeWachtwoord = $_POST['wachtwoord'];
		} else{
			$ingevuldeWachtwoord =NULL;
		}



		// controleer of het juiste is ingevuld
		if ($wachtwoord === $ingevuldeWachtwoord) {
		?>
			<?php
				require_once('header.php');

				require_once('admin.php');

				require_once('footer.php');
			?>

		<?php
		} else {
		?>
	<div id="login_second_content">
		<h1 id="logintitle">Vul hier je gegevens in om in te loggen</h1>
		<p id="login_text">Om dingen te kunnen aanpassen en/of wijzigen dient
			u een wachtwoord nodig te hebben, dit wachtwoord kunt u aanvragen/wijzigen
			bij hogerbevoegden.</p>
		<br>
		<form action="loginpage.php" method="post">
			<label for="wachtwoord">Wachtwoord</label>
			<input type="password" name="wachtwoord"><br>
			<input type="submit" value="log in">
		</form>

		<?php
		}
		?>
	</div>
</div>
