<div id="login_content">
	<?php

		if ($_POST) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = "SELECT * FROM user
					  WHERE username = '$username'
					  AND password = '$password'";

			$result = mysqli_query($link, $query);
			$user = mysqli_fetch_array($result);

			if ($user) {
				$_SESSION['username']= $username;
				echo "
		        <script>
		            window.onload = function(){
		                    document.location.href = 'index.php';
		            };
		        </script>
		        ";
			} else {
				echo 'NIET BEKEND!';
			}

		}

	?>
	<div id="login_second_content">
		<h1 id="logintitle">Vul hier je gegevens in om in te loggen</h1>
		<p id="login_text">Om dingen te kunnen aanpassen en/of wijzigen dient
			u een wachtwoord nodig te hebben, dit wachtwoord kunt u aanvragen/wijzigen
			bij hogerbevoegden.</p>
		<br>
		<form action="loginpage.php" method="post">
			<fieldset>
			<p>
			<label for="username">Username</label>
			<input type="text" id="username" name="username" value="" maxlength="20" />
			</p>
			<p>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" value="" maxlength="20" />
			</p>
			<p>
			<input type="submit" value="→ Inloggen" />
			</p>
			</fieldset>
		</form>

	</div>
</div>
