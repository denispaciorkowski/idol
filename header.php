<?php
	require_once ("database.php")

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elroys Fanpage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
</head>
<body>

</body>
</html>


<header>
	<a href="index.php">
		<div id="logo_header">
			<img src="images/elroy_logo.png">
		</div>

		<div id="tekst_logo">
			<img src="images/hoofdtekst.png">
		</div>
	</a>

	<div id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="newspage.php">Nieuws</a></li>
			<li><a href="">Recensies</a></li>
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
				}
			}

			if (!isset($_SESSION['username'])) {
				echo "<li><a href='loginpage.php'>Login</a></li>";
			} else {
				echo "<li><a href='loggout.php'>Logout</a></li>";
			}

			?>
		</ul>
	</div>

	<div class="facebook">
		<a href="https://www.facebook.com/elroy.vrieling?fref=ts" target="_blank">
		<img src="images/facebook_button.png" width="30px" height="auto">
		</a>
	</div>

	<div class="twitter">
		<a href="https://twitter.com/elroyvrieling" target="_blank">
		<img src="images/twitter_button.png" width="30px" height="auto">
		</a>
	</div>

	<div class="instagram">
		<a href="https://instagram.com/elroyvrieling/" target="_blank">
		<img src="images/instagram_button.png" width="30px" height="auto">
		</a>
	</div>


</header>
