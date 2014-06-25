
    				
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Game Bizarre</title>
<link rel="stylesheet" type="text/css" href="Gb-css2.css"/>
<script src="GB-javascript.js" type="text/javascript"></script>
</head>
<body>
	<div class="Outer">
		<div class="Login"><a href="/GB-Sign.php">Sign In/Out</a>&nbsp;&nbsp;&nbsp;<a href="GB-account.php">My Account</a>
		</div> 
		<div class="Header">
		</div>
			<div class="nav">
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-index.php">Home</a>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-fag.php">Find A Game </a>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-mal.php">Make A Listing</a> 
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-library.php">Game Library</a> 
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			</div>
		<div class="Body">
			<div class="Banner">
			</div>
			<form name="search" action="GB-search.php" method="get">
				<div class="Search">
					<input name="searchGame" id="searchGame" type="text" style="height:20px; width:320px; border-radius:15px;
					margin:10px; margin-left:5px;"/>
					<input type="submit" value="SEARCH" style="width:100px;"/>
				</div>
			</form>
			<div class="Column-one">
				<table id="mal">
				<tr>
					<td class="link" onclick="location.href='GB-ps4.php'">Playstation 4</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-account.html'">Xbox ONE</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-wii.html'">Wii U</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-hand.html'">Playstation 3</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-retr.html'">Xbox 360</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-pc.html'">Nintendo Wii</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-genr.html'">Others</td>
				</tr>
				</table>
				<div class="side-Banner">
				</div>
			</div>
			<div class="Column-two">
				<div class="Content-border">
					<div class="Content">
						<div class="Content">
                        
                       
                        <div class="Title">		
                        <form action="GB-fag_search.php">
                            System <select id="advSystem" name="advSystem" onchange="" style="margin:auto;">
        						<option></option>
								<option>Playstation 4</option>
								<option>Xbox One</option>
								<option>Wii U</option>
                                <option>Playstation 3</option>
								<option>Xbox 360</option>
								<option>Nintendo Wii</option>
                                <option>Other</option>
							</select>
                           Genre <select id="advGenre" name="advGenre" onchange="">
                                <option></option>
        					    <option>Action/Adventure</option>
						        <option>Fighting</option>
						    	<option>Puzzle/Strategy</option>
						    	<option>Role-Playing</option>
						    	<option>Shooter</option>
						    	<option>Simulation</option>
                                <option>Sports</option>
						    	<option>Other</option>
						   	</select>
                            Sort by: &nbsp;&nbsp; Most Recent:<input type="checkbox" name="searchType" value="Most Recent">&nbsp;&nbsp;&nbsp;&nbsp;
                            Most Viewed<input type="checkbox" name="searchType" value="Most Viewed">
                            <input type="submit">
                        </form>
						</div>
                        
							<div style="margin-left:auto; margin-right:auto; width:97%;">
                
								<table class="Square-one">
									<th colspan="2" style="background-color:#0772a1; height:10%;"><a href="GB-ps4.php">Playstation 4</a></th>
                                    
                                    <?php 
    					require_once('connection.php');
                                    
                        $searching = $_GET['searchGame'];
                        
						
						$ps4New = mysqli_query($con, "SELECT * from Listings WHERE System='Playstation 4' ORDER BY Date_Added DESC LIMIT 3"); 
                        $oneNew = mysqli_query($con, "SELECT * from Listings WHERE System='Xbox One' ORDER BY Date_Added DESC LIMIT 3");
                        $wiiuNew = mysqli_query($con, "SELECT * from Listings WHERE System='Wii U' ORDER BY Date_Added DESC LIMIT 3");
                        $ps3New = mysqli_query($con, "SELECT * from Listings WHERE System='Playstation 3' ORDER BY Date_Added DESC LIMIT 3");
                        $x360New = mysqli_query($con, "SELECT * from Listings WHERE System='Xbox 360' ORDER BY Date_Added DESC LIMIT 3");
                        $wiiNew = mysqli_query($con, "SELECT * from Listings WHERE System='Wii' ORDER BY Date_Added DESC LIMIT 3");
                
                        
                        
						while($row=mysqli_fetch_array($ps4New)) {
                            echo '<tr style="height:30%; border:1px lightgrey groove;">
    									<td style="width:30%; border:1px lightgrey groove;"><a href="">'.$row['Game_Name'].'</a></td>
										<td style="width:70%;"><a href="">'.$row['System'].'</a></td>
									</tr>';
							
							echo "<br>";
							}
							
						?>
                                    
									
								</table>
								<table class="Square-two">
									<th colspan="2" style="background-color:#0772a1; height:10%;"><a href="GB-one.php">Xbox One</a></th>
									
                        <?php   while($row=mysqli_fetch_array($oneNew)) {
                            echo '<tr style="height:30%; border:1px lightgrey groove;">
        								<td style="width:30%; border:1px lightgrey groove;"><a href="">'.$row['Game_Name'].'</a></td>
										<td style="width:70%;"><a href="">'.$row['System'].'</a></td>
									</tr>';
						
							}
							
						?>
                                    
                                    
                                    
								</table>
								<table class="Square-three">
									<th colspan="2" style="background-color:#0772a1; height:10%;"><a href="GB-wiiu.html">Wii U</a></th>
									
                                         <?php   while($row=mysqli_fetch_array($wiiuNew)) {
                            echo '<tr style="height:30%; border:1px lightgrey groove;">
            							<td style="width:30%; border:1px lightgrey groove;"><a href="">'.$row['Game_Name'].'</a></td>
										<td style="width:70%;"><a href="">'.$row['System'].'</a></td>
									</tr>';
							
							}
							
						?>
                                    
								</table>
								<table class="Square-one">
									<th colspan="2" style="background-color:#0772a1; height:10%;"><a href="GB-ps3.php">Playstation 3</a></th>
									
                                         <?php   while($row=mysqli_fetch_array($ps3New)) {
                            echo '<tr style="height:30%; border:1px lightgrey groove;">
                						<td style="width:30%; border:1px lightgrey groove;"><a href="">'.$row['Game_Name'].'</a></td>
										<td style="width:70%;"><a href="">'.$row['System'].'</a></td>
									</tr>';
							
							echo "<br>";
							}
							
						?>
                                    
								</table>
								<table class="Square-two">
									<th colspan="2" style="background-color:#0772a1; height:10%;"><a href="GB-xbox.html">Xbox 360</a></th>
									
                                         <?php   while($row=mysqli_fetch_array($x360New)) {
                            echo '<tr style="height:30%; border:1px lightgrey groove;">
                						<td style="width:30%; border:1px lightgrey groove;"><a href="">'.$row['Game_Name'].'</a></td>
										<td style="width:70%;"><a href="">'.$row['System'].'</a></td>
									</tr>';
							
							echo "<br>";
							}
							
						?>
                                    
								</table>
								<table class="Square-three">
									<th colspan="2" style="background-color:#0772a1; height:10%;"><a href="GB-wii.html">Nintendo Wii</a></th>
								
                                <?php   while($row=mysqli_fetch_array($wiiNew)) {
                            echo '<tr style="height:30%; border:1px lightgrey groove;">
                    					<td style="width:30%; border:1px lightgrey groove;"><a href="">'.$row['Game_Name'].'</a></td>
										<td style="width:70%;"><a href="">'.$row['System'].'</a></td>
									</tr>';
							
							echo "<br>";
							}
							
						?>
								</table>
							</div>
						</div>	
					</div>
                    
                            
                            
							
							
							
							
						</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="Sitemap-border">
				<div class="Sitemap">
				 	<table class="Sitemap">
				 		<tr>
				 			<td style="font-size:14pt;">Find A Game</td>
				 			<td style="font-size:14pt;">My Account</td>
				 			<td style="font-size:14pt;">About Game Bizarre</td>
				 		</tr>
				 		<tr>
				 			<td><a href="GB-fag.php">Advanced Search</a></td>
				 			<td><a href="GB-account.php">My Profile</a></td>
				 			<td>How It Works</td>
				 		</tr>
				 		<tr>
				 			<td>Recently Added</td>
				 			<td><a href="GB-sign.php">Sign In</a></td>
				 			<td>Contact Us</td>
				 		</tr>
				 		<tr>
				 			<td>What's Hot</td>
				 			<td><a href="GB-mac.php">Create An Account</a></td>
				 			<td>Privacy Policy</td>
				 		</tr>
				 	</table>
				</div>
			</div>
		</div>
	</body>
</html>