    				
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
		<div class="Login"><a href="GB-Sign.php">Sign In</a>&nbsp;&nbsp;&nbsp;<a href="GB-mac.php">Register</a>&nbsp;&nbsp;&nbsp;
		<a href="GB-account.php">My Account</a>
		</div> 
		<div class="Header">
		</div>
			<div class="nav">
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-index.php">Home</a>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-Fag.php">Find A Game </a>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-Mal.php">Make A Listing</a> 
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-Mw.php">Most Wanted</a> 
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			</div>
		<div class="Body">
			<div class="Banner">
			</div>
			<form name="search" action="Gb-search.php" method="get">
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
						
			$hostname = "gamebizusers.db.9966757.hostedresource.com";
            $username = "gamebizusers";
            $dbname = "gamebizusers";
            $password = "Canada00!";
							
						
						
								
    							$con = mysqli_connect($hostname, $username, $password, "gamebizusers");
    							
    							
    							if (!$con)
    								{
    								die ('Could not connect: ' . mysqli_error());
    								}
    								else
    								{
    								echo "connected"; 
    								}
    								
    							$firstName=$_GET['firstName'];
    							$lastName=$_GET['lastName'];
    							$userName=$_GET['userName'];
    							$userEmail=$_GET['userEmail'];
    							$userPassword=$_GET['userPassword'];
    							$dateCreated="NOW()";
    							$profilePic="Profile Pic";
    							
    							$userInsert = mysqli_query ($con, "INSERT INTO Accounts
    							(Account_Id, Date_Added, First_Name,Last_Name,User_Name,User_Email,User_Password, Profile_Pic)
    							VALUES
    				(DEFAULT,'$dateCreated','$firstName','$lastName','$userName','$userEmail','$userPassword','$profilePic')");
    							
    							if($userInsert) {
    							echo 'Account successfully created!';
    							}
    							else {
    							mysqli_error($userInsert);
    							die('not added');
    							}
    						
    						/*begin building mail string
							$msg = "Name:   ".$_GET['firstName'].$_GET['lastName']."\n";
							$msg .= "E-mail:   ".$_GET['userEmail']."\n";
							$msg .= "Username:  ".$_GET['userName']."\n";
							
							$recipient= "bigpapa4108@msn.com";
							$subject= "Game Bizarre Account";
							$mailHeaders= "From:  My Website <admin@gamebizarre.com> \n";
							$mailHeaders .= "Reply-To:  ".$_GET['userEmail']."\n";
							
							
							if (mail($recipient, $subject, $msg, $mailHeaders)) {
							echo 'email sent';
							}*/		
						?>
							
							
							
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
				 			<td>PS3 Games</td>
				 			<td><a href="GB-mac.php">Create An Account</a></td>
				 			<td>Privacy Policy</td>
				 		</tr>
				 	</table>
				</div>
			</div>
		</div>
	</body>
</html>