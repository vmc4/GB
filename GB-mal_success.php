					
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
		<div class="Login"><a href="GB-account.php">My Account</a>&nbsp;&nbsp;&nbsp;<a href="">Sign Out</a>
		</div> 
		<div class="Header">
		</div>
			<div class="nav">
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-index.php">Home</a>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-Fag.php">Find A Game </a>
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
    							
    							$gameName=$_GET['gameConfirm'];
								$systemName=$_GET['systemConfirm'];
								$gameGenre=$_GET['genreConfirm'];
								$acceptOne=$_GET['confirmOne'];
								$acceptTwo=$_GET['confirmTwo'];
								$minDollar=$_GET['dollarConfirm'];
    							$discImage=$_GET['coverConfirm'];
    							$discCondition=$_GET['discConfirm'];
    							$timeAdded = "UNIX_TIMESTAMP()";		
    							$AccountId = $_GET['lister'];			
   						
	
							$insert = mysqli_query($con, "INSERT INTO Listings(Date_Added, Listing_No, Account_Id, Game_Name, System,
									 						Genre, Accepting_Sys, Accepting_Sys2, Min_Dollar, Cov_Img, Disc_COnd)
							VALUES ($timeAdded, DEFAULT, '$accountId', '$gameName','$systemName', '$gameGenre', '$acceptOne', '$acceptTwo', '$minDollar', '$discImage', '$discCondition')");
									
								if ($insert)
									{
									echo "Your listing has been created! <br>
											You will recieve a confirmation email shortly.";
									}
								elseif (!$insert)
									{
									echo mysqli_error($con);
									die ('unable to insert' );
									}
                                    
                            $msg = "Username \n";
                            $msg .= "Thank you for creating your listing. Soon you will begin receiving offers from other members for your game.
                            Listing Details \n";
                            $msg .= "Game Name: $gameName \n";
                            $msg .= "System: $systemName \n";
                            $msg .= "Genre: $gameGenre \n";
                                     
                            $recipient = $_GET['userEmail'];
                            $subject = "Account Created";
                            $mailheaders = "From: Game Bizarre <admin@gamebizarre.com> \n";
                            
                            $send = mail($recipient, $subject, $msg, $mailheaders);
                            
								
								mysqli_close($con);
								?>
								
							<input type="button" onclick="location.href='Gb-index.php'" value="Go Home"/>
							
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
	</body>
</html>
					
					
