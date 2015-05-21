<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    require_once('database.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elroy Fanpage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
</head>
<body>
	<?php
		require_once('header.php');

		require_once('content.php');

		require_once('footer.php');
	?>
</body>
</html>
