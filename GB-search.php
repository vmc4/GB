					
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Game Bizarre | Playstation 3</title>
<link rel="stylesheet" type="text/css" href="Gb-css2.css"/>
<script src="GB-javascript.js" type="text/javascript"></script>
</head>
<body>
	<div class="Outer">
		<div class="Login"><a href="GB-Sign.php">Sign In/Sign Up</a>&nbsp;&nbsp;&nbsp;
		<a href="GB-account.php">My Account</a>
		</div> 
		<div class="Header">
		</div>
			<div class="nav">
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-index.php">Home</a>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-fag.php">Find A Game </a>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-mal.php">Make A Listing</a> 
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-Mw.php">Most Wanted</a> 
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
					<td class="link" onclick="location.href='GB-ps3.html'">Playstation 3</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-account.html'">Xbox 360</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-wii.html'">Nintendo Wii</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-hand.html'">Handhelds</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-retr.html'">Retro Systems</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-pc.html'">PC Games</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-genr.html'">Genres</td>
				</tr>
				</table>
			</div>
			<div class="Column-two">
				<div class="Content-border">
					<div class="Content">

<?php 
						require_once('connection.php');
                                    
                        $game = $_GET['searchGame'];
                        $system = $_GET['searchSystem'];
                        $genre = $_GET['searchGenre'];
                        $result;
                        
                        switch (x) {
                            case $game!="":
                                $result= mysqli_query($con, "SELECT * from Listings WHERE Game_Name='".$game."'"); 
                                break;
                            case $system !="":
                                $result= mysqli_query($con, "SELECT * from Listings WHERE System='".$system."'"); 
                                break;
                            case $genre !="":
                                $result= mysqli_query($con, "SELECT * from Listings WHERE Genre='".$genre."'"); 
                                break;
                            default:
                                $result= mysqli_query($con, "SELECT * from Listings ORDER BY Date_Added DESC"); 
                                break;
                        }
						 
						
                        echo 'Search Results For:&nbsp;&nbsp;'.$_GET['searchGame']; 
						
						
						
                        
                        
						while($row=mysqli_fetch_array($result)) {
                            echo '<div class="Long-list">
    						<div class="Listing">
								<div class="Search-thumbnail">
									*Game Picture*
								</div>
								<div class="Listing-title">
						 			<a href="GB-listing.php?listing='.$row['Listing_No'].'" style="font-size:20pt">'.$row['Game_Name'].'</a>
                                     <br><a href style="font-size:12pt">'.$row['System'].'</a>
								</div>
								<div class="Time-remaining_mini">Time Remaining: 
								</div>
								<div class="Bids">
									# of Bids
								</div>
								<div style="float:left; border:1px lightgrey groove; font-size:18px; clear:right; margin:5px 220px 5px 5px;">
                                Accepting Offers For:'." &nbsp; &nbsp; ".$row['Accepting_Sys']."&nbsp; &nbsp;&nbsp; &nbsp; ".$row['Accepting_Sys2'].'
                                </div>
								<p style="float:left; font-size:18px; clear:right; margin-right:220px;
								margin-top:10px;">
									&nbsp;<a href="GB-account.php?account='.$row['Account_Id'].'">Fix Link->Account</a>
								</p>
							</div>
						</div>';
							
							echo "<br>";
							}
							
						?><br>
                        
        
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
				 			<td><a href="Gb-fag.php">Advanced Search</a></td>
				 			<td><a href="Gb-account.php">My Profile</a></td>
				 			<td>How It Works</td>
				 		</tr>
				 		<tr>
				 			<td>Recently Added</td>
				 			<td><a href="Gb-sign.php">Sign In</a></td>
				 			<td>Contact Us</td>
				 		</tr>
				 		<tr>
				 			<td>PS3 Games</td>
				 			<td><a href="Gb-mac.php">Create An Account</a></td>
				 			<td>Privacy Policy</td>
				 		</tr>
				 	</table>
				</div>
				</div>
			</div>
		</div>
	</body>
</html>