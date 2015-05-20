<content>
    
    <div id="content-blok">

<<<<<<< HEAD:article.php
	    				<?php
						    date_default_timezone_set('Europe/London');

							$sql = "SELECT * FROM `article` ORDER BY `created` DESC LIMIT 0, 3";
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
=======
									while($row = mysqli_fetch_array($result)){
    							echo $row['title'];

    						}
    						?>	    				
	    			</h1>
	    		</div>	<p>
						   <?php 
								$sql = "SELECT * FROM article WHERE id = '1'";
								$result = mysqli_query($link, $sql);

									while($row = mysqli_fetch_array($result)){
    							echo $row['intro'];
    							echo '</br>';
    							echo $row['author'];

								}
							?>
						</p>
				<a href="article.php?id=<?=$row['id']?>">Lees meer</a>
		</div>
		
		<div id="blok-2">
				<div id="blok-22">
					<h1>
						   <?php 
								$sql = "SELECT * FROM article WHERE id = '2'";
								$result = mysqli_query($link, $sql);

									while($row = mysqli_fetch_array($result)){
    							echo $row['title'];
    						}
    						?>							
					</h1>
				</div>	<p>
						   <?php 
								$sql = "SELECT * FROM article WHERE id = '2'";
								$result = mysqli_query($link, $sql);

									while($row = mysqli_fetch_array($result)){
    							echo $row['intro'];
    							echo '</br>';
    							echo $row['author'];

								}
							?>
						</p>
		</div>
		
		<div id="blok-3">
			<div id="blok-33">
				<h1>
						   <?php 
								$sql = "SELECT * FROM article WHERE id = '3'";
								$result = mysqli_query($link, $sql);

									while($row = mysqli_fetch_array($result)){
    							echo $row['title'];
    						}
    						?>						
				</h1>
			</div>
					<p>
						   <?php 
								$sql = "SELECT * FROM article WHERE id = '3'";
								$result = mysqli_query($link, $sql);

									while($row = mysqli_fetch_array($result)){
    							echo $row['intro'];
    							echo '</br>';
    							echo $row['author'];

								}
							?>		
					</p>
		</div>
>>>>>>> 315b67fe8f5c5936b1a20b2f40b9019775aa2cb6:content.php
	</div>
</content>
