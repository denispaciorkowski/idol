<article>
    
    <div id="content-blok">

	    				<?php
						    date_default_timezone_set('Europe/London');

							$sql = "SELECT * FROM `article` ORDER BY `created`  DESC ";
							$result = mysqli_query($link, $sql);

							while($row = mysqli_fetch_array($result))
							{ 
						?>
								
								<div id="blok">
								<div id="blok-1">
								
									<?php 
										echo "<h1>";
										echo $row['title'];
										echo "</h1>";

  										echo "<p>";
    									echo $row['intro'];
    									
										echo "</br>";
    									echo "<a href=\"article.php?id=" . $row['id'] . "\">Lees meer</a>";


    									echo "</p>";

    									echo '</br>';
    									echo $row['author'];

    								echo "</div>";
    								echo "</div>";
    									
    								}
									?>


	</div>
    <p>
	<a href="new_article.php">New Article</a>
    <p>
</article>