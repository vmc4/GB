    <?php
    echo $_COOKIE['name'];
    ?>
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
                       
                        <form name="mac" action="GB-mac_temp.php" style="padding-left:40px; width:60%;">
    						<div style="float:left; margin-top:10px;">
								First Name<br/>
								<input name="userFirstName" id="userFirstName" type="text" style="width:200px;"/>
							</div>
							<div style="margin-top:10px; float:left; display:inline-block; 
							margin-left:20px;">
								Last Name<br/>
								<input name="userLastName" id="userLastName" type="text" style="width:200px;"/>
							</div>
							<div style="height:50px; xborder:1px LightGrey groove; width:400px;
							margin-top:20px; float:left;">
								Username<br>
								<input type="text" style="width:250px;" name="userUsername" id="userUsername"/>
							</div>
							<div style="clear:both;">
							</div>
							<div style="float:left; margin-top:10px;">
								Email address<br/>
								<input name="userEmail" id="userEmail" type="text" style="width:200px;"/>
							</div>
							<div style="margin-top:10px; float:left; display:inline-block; 
							margin-left:20px;">
								Confirm Email<br/>
								<input name="emailConfirm" type="text" style="width:200px;"/>
							</div>
							<div style="clear:both;">
							</div>
							<div style="margin-top:20px; float:left;">
								Password<br/>
								<input type="text" id="userLog" name="userLog" style="width:200px;"/>
							</div>
							<div style="margin:20px; float:left;">
								Confirm Password<br/>
								<input type="text" name="logConfirm" id="logConfirm" style="width:200px;"/>
							</div>
							<div style="margin-left:auto; margin-right:auto; width:70px;">
								<input type="submit" value="SUBMIT" style="width:70px;"
								onclick="macValidate()"/>
							</div>
						</form>
						<div style="float:right; width: 250px; height:100%; border:1px lightgrey groove;">
								Already have an account?<br>
								<input type="button" onclick="location.href='GB-sign.php'">
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