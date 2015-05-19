<content>
    
    <div id="content-blok">
	    <div id="blok-1">
				<div id="blok-11">
	    			<h1>NEWS 1</h1>
	    		</div>
	    				<p>
						   <?php 
								$sql = "SELECT * FROM article WHERE id = '1'";
								$result = mysqli_query($link, $sql);

									while($row = mysqli_fetch_array($result)){
    							echo $row['title'];
    							echo $row['intro'];
    							echo $row['author'];

								}
							?>
	    				</p>
		</div>
		
		<div id="blok-2">
				<div id="blok-22">
					<h1>NEWS 2</h1>
				</div>
						<p>
						   <?php 
								$sql = "SELECT * FROM article WHERE id = '2'";
								$result = mysqli_query($link, $sql);

									while($row = mysqli_fetch_array($result)){
    							echo $row['title'];
    							echo $row['intro'];
    							echo $row['author'];

								}
							?>
						<p>
		</div>
		
		<div id="blok-3">
			<div id="blok-33">
				<h1>NEWS 3</h1>
			</div>
					<p>
						   						   <?php 
								$sql = "SELECT * FROM article WHERE id = '3'";
								$result = mysqli_query($link, $sql);

									while($row = mysqli_fetch_array($result)){
    							echo $row['title'];
    							echo $row['intro'];
    							echo $row['image'];
    							echo $row['author'];

								}
							?>				
					</p>
		</div>
	</div>

</content>