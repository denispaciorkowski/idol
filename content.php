<article>

    <div id="content-blok">

	    <?php
			date_default_timezone_set('Europe/London');

				$sql = "SELECT * FROM `article` ORDER BY `created`  DESC LIMIT 0,3 ";
				$result = mysqli_query($link, $sql);

					while($row = mysqli_fetch_array($result))
						{
		?>

		<div id="blok">
		<div id="blok-1">

			<?php
			    echo "<h1 id='news_title'>";
			    echo $row['title'];
				echo "</h1>";

  				echo "<p>";
    		    echo $row['intro'];

				echo "</br>";
    			echo "<a id='readmore' href=\"article.php?id=" . $row['id'] . "\">Lees meer</a>";


    			echo "</p>";

    			echo '</br>';


    	echo "</div>";
    	echo "</div>";

    		  }
		   ?>


	</div>

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
        echo " ";
    } else {
        echo "    <p>
        	   <a href='new_article.php'>New Article</a>
            <p>";
    }

    ?>

</article>
