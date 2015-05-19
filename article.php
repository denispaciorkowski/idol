<article>
    
    <div id="content-blok">
	    <div id="blok-1">
				<div id="blok-11">
	    			<h1>
						   <?php 
								$sql = "SELECT * FROM article WHERE id = '1'";
								$result = mysqli_query($link, $sql);

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
	</div>
</article>