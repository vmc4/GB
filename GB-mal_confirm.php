
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
		<div class="Login"><a href="GB-Sign.html">Sign In/Sign Up</a>&nbsp;&nbsp;&nbsp;
		<a href="GB-account.html">My Account</a>
		</div> 
		<div class="Header">
		</div>
			<div class="nav">
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-index.html">Home</a>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-Fag.html">Find A Game </a>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-Mal.php">Make A Listing</a> 
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-Mw.php">Most Wanted</a> 
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			</div>
		<div class="Body">
			<div class="Banner">
			</div>
			<form name="search" action="Gb-search.php">
				<div class="Search">
					<input name="searchGame" type="text" style="height:20px; width:320px; border-radius:15px;
					margin:10px; margin-left:5px;"/>
					<input type="button" value="SEARCH" style="width:100px;" onclick="gameSearch()"/>
				</div>
			</form>
			<div class="Column-one">
				<table id="mal">
				<tr>
					<td class="link" onclick="location.href='GB-ps3.html'">Playstation 4</td>
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
					<td class="link" onclick="location.href='GB-pc.html'">Handheld's</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-genr.html'">Retro's</td>
				</tr>
				</table>
			</div>
			<div class="Column-two">
				<div class="Content-border">
					<div class="Content">
					<div style="width:100%; text-align:center; margin-bottom:-35px;">
						Confirm Listing
					</div>
					<form action="GB-mal_success.php" method="get">
						<div id="Image-preview">
							Image Uploads
						</div>
						<div id="Title-confirm">
							Game Name:<input type="text" style="width:250px;" name="gameConfirm" value="<?php echo $_GET["gameName"];?>">
						</div>
						<div id="System-confirm">
							System:<input type="text" style="width:250px;" name="systemConfirm" value="<?php echo $_GET["systemName"];?>">
						</div>
						<div id="Genre-confirm">
						Genre:<input type="text" style="width:250px;" name="genreConfirm" value="<?php echo $_GET["gameGenre"];?>">
						</div>
						<table id="Mw-confirm">
							<tr>
								<th colspan="2">Most Wanted</th>
							</tr>
							<tr>
								<td id="Mw-game">GAME</td>		<!--switch id to class--!>
								<td id="Mw-system">SYSTEM</td>
							</tr>
							<tr>
								<td id="Mw-game">#1<input type="text" style="width:225px;" name="coverConfirm" value="<?php echo $_GET["coverImage"]; ?>"</td>
								<td id="Mw-system"><input type="text" name="discConfirm" value="<?php echo $_GET["diskCondition"];?>" </td>
							</tr>
						</table>
						<div id="Accepted-confirm">
							Accepting games for:
											<div style="float:right;">
												
												<select id="confirmOne" name="confirmOne" value="<? $_GET['acceptOne'];?>"/>
													<option></option> 
													<option>Playstation 4</option>
													<option>Xbox ONE</option>
													<option>Wii U</option>
													<option>Playstation 3</option>
													<option>Xbox 360</option>
													<option>Nintendo Wii</option>
												</select><br/>
												<select id="confirmTwo" name="confirmTwo" value="<? $_GET['acceptTwo'] ?>"/>
													<option></option> 
													<option>Playstation 4</option>
													<option>Xbox ONE</option>
													<option>Wii U</option>
													<option>Playstation 3</option>
													<option>Xbox 360</option>
													<option>Nintendo Wii</option>
												</select><br/>
												
											</div>
					
						</div>
						<div id="Min-dollar">
							Minimum Dollar Offer Accepted:<input name="dollarConfirm" type="number" value="<?php echo $_GET["minDollar"];?>">
						</div>
						<div style="width:200px; margin:auto; margin-top:50px;">
						<input type="submit" value="Submit"/>
						</div>
						</form>
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
				 			<td>Quick Search</td>
				 			<td>My Profile</td>
				 			<td>How It Works</td>
				 		</tr>
				 		<tr>
				 			<td>Recently Added</td>
				 			<td>Sign In</td>
				 			<td>Contact Us</td>
				 		</tr>
				 		<tr>
				 			<td>PS3 Games</td>
				 			<td>Create An Account</td>
				 			<td>Privacy Policy</td>
				 		</tr>
				 	</table>
				 	<div style="width:100px; height:100px; border:1px lightgrey groove; float:right;">
				 	</div>
				</div>
				</div>
			</div>
		</div>
	</body>
</html>