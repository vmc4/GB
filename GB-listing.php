    				
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
                       
                        
                    <?php 
        				require_once('connection.php');
    							
    							
    							if (!$con)
    								{
    								die ('Could not connect: ' . mysqli_error());
    								}
    								else
    								{
    								 
    								}
						
                        $listingNo = $_GET['listing'];
				    	$result= mysqli_query($con, "SELECT * from Listings WHERE Listing_No='".$listingNo."'"); 
                       
    					while($row=mysqli_fetch_array($result)) {
                            echo '<div class="Game-pic">
    						<img src="mw3.jpeg">
						</div>
						<div class="Game-title">
						<a href="GB-search.php?searchGame='.$row['Game_Name'].'">'.$row['Game_Name'].'</a>
						</div>
						<div class="Game-System">
                          <a href="GB-search.php?searchSystem='.$row['System'].'"> '.$row['System'].'</a><br><br>
                             <a href="GB-search.php?searchGenre='.$row['Genre'].'">'.$row['Genre'].' </a><br><br>
                             Time Left
						</div>
						<div class="Make-offer">
                        '.$row['Accepting_Sys'].'<br><br>
                        '.$row['Accepting_Sys2'].'<br><br>
                        
						</div>
						<div class="Time-remaining-listing">
						</div>
						<table id="Games-offered" class="Games-offered">
							<tr>
								<td><input type="text" style="width:150%;"></td>
								<td><input type="text" style="width:45%; margin-left:60px;"></td>
							</tr>
							<tr>
								<td style="text-align:center;">
									<select>
										<option>And</option>
										<option>Or</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><input type="text" style="width:150%;"></td>
								<td><input type="text" style="width:45%; margin-left:60px;"></td>
							</tr>
							<tr>
								<td style="text-align:center">
									<select>
										<option>And</option>
										<option>Or</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><input type="text" style="width:150%;"></td>
								<td><input type="text" style="width:45%; margin-left:60px;"></td>
							</tr>
						</table>
						<div style="float:left;" id="Offer">
							<div style="background-color:#043a6b; float:left; height:80px; width:310px;
							border:1px lightgrey groove;border-radius:15px; margin-right:0px; 
							margin-top:27px; margin-left:-175px;">
								<a href ="GB-offer.php?listing='.$listingNo.'">Make an Offer</a>
							</div>
						</div>';
							
							echo "<br>";
							}
							
						
                        ?>
					
                    
						<div class="Game-collection">
							*Tabs - Game reviews, similar games, user reviews *
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