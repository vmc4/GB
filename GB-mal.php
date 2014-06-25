<?php 
session_start();

setcookie('name','leroy', time()+3600,"/", ".gamebizarre.com", 0);
if (isset($_COOKIE['name'])) {
 echo 'welcome'.$_COOKIE['name'];   
}


$_SESSION['firstName'] = $_COOKIE['name'];
echo $_SESSION['firstName'];
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Game Bizarre</title>
<link rel="stylesheet" type="text/css" href="Gb-css2.css"/>
<script src="GB-javascript.js" type="text/javascript"></script>
</head>
<body>
    <div class="Outer">
		<div class="Login"><a href="/GB-sign.php">Sign In/Out</a>&nbsp;&nbsp;&nbsp;<a href="GB-account.php">My Account</a>
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
					<td class="link" onclick="location.href='GB-xone.html'">Xbox ONE</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-wiiu.html'">Wii U</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-ps3.html'">Playstation 3</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-360.html'">Xbox 360</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-wii.html'">Nintendo Wii</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-other.html'">Others</td>
				</tr>
				</table>
				<div class="side-Banner">
				</div>
			</div>
			<div class="Column-two">
				<div class="Content-border">
					<div class="Content">
						<div class="Content">
                       
                        
                    
                            
                                <div style="float:left; display:table;">
							<form action="GB-mal_confirm.php" name="mal" style="padding-left:40px;" method="get">
								<div style="height:50px; xborder:1px LightGrey groove; width:400px;
								margin-top:40px; float:left;">
									<sup>*</sup>Game Name
									<input type="text" style="width:400px;" name="gameName"
									id="gameName"/>
								</div>
								<div style="clear:both;">
								</div>
								<div>
									<div style="float:left; margin-top:10px;">
										<sup>*</sup>System<br/>
										<select id="systemName" name="systemName" onchange="systemOther()">
											<option></option>
											<option>Playstation 4</option>
											<option>Xbox One</option>
											<option>Wii U</option>
                                            <option>Playstation 3</option>
											<option>Xbox 360</option>
											<option>Nintendo Wii</option>
											<option>Other</option>
										</select>	
									</div>
									<div id="systemSpecify">
									<div id="otherSystem" name="otherSystem" style="float:left; display:inline-block; margin-top:12px;
									margin-left:15px; padding-right:-45px;
									padding-left:0px;">
									System
									<input id="otherSystem" name="otherSystem" type="text" style="width:125px; float:left; padding-left:">
									</div>
									<div id="gameGenre" style="margin-top:14px; float:left; margin-left:-65px;">
										<div>
										Genre<br/>
										<select name="gameGenre"> 
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
										</div>
									</div>
									</div>
								</div>
								<div style="clear:both;">
								</div>
								<div>
									<div style="height:100px; width:440px; border:1px LightGrey Groove;">
										<p style="color: LightGrey; font-size:15pt; margin-top:2px;
										margin-left:0px; margin:2px 0px;">
											Image Upload
										</p>
										<div style="margin-left:20px; margin-top:10px; float:left;">
											<sup>*</sup>Cover Image (preview)<br/>
											<input name="coverImage" type="file" value="Upload" 
											id="coverImage" style="width:200px;"/>
										</div>
										<div style="margin-left:20px; margin-top:10px; float:left;">
											Disk Condition<br/>
											<input name="diskCondition" type="file" value="Upload" style="width:200px;"/>
										</div>
								</div>
								<div style="display:table; width:440px; margin-top:20px; border:3px #043a6b solid;">
									<p style="margin:0px 0 5px 0; text-align:center; background-color:#043a6b; padding:5px;">
										Most Wanted (title and system)
									</p><br/>
									Game Name<br/>
									#1<input name="mw1" id="mw1" type="text" style="height:20px; width:275px;
									margin-bottom:10px;"/>
									<input name="mwSystem1" id="mwSystem1" type="text" style="height:20px; width:115px;
									margin-bottom:10px; margin-left:15px;"/><br/>
									#2<input name="mw2" id="mw2" type="text" style="height:20px; width:275px;
									margin-bottom:10px;"/>
									<input name="mwSystem2" id="mwSystem2" type="text" style="height:20px; width:115px;
									margin-bottom:10px; margin-left:15px;"/><br/>
									#3<input name="mw3" id="mw3" type="text" style="height:20px; width:275px;"/>
									<input name="mwSystem3" id="mwSystem3" type="text" style="height:20px; width:115px;
									 margin-left:15px;"/><br/>
								</div>	
							<div style="display:table; margin-top:20px;">
								Willing to accept offers for (select all):<br/>
								<div style="margin-left:40px;">
									<select id="acceptOne" name="acceptOne"/>
											<option></option> 
											<option>Playstation 4</option>
											<option>Xbox ONE</option>
											<option>Wii U</option>
											<option>Playstation 3</option>
											<option>Xbox 360</option>
											<option>Nintendo Wii</option>
									</select><br/>
									<select id="acceptTwo" name="acceptTwo"/>
											<option></option> 
											<option>Playstation 4</option>
											<option>Xbox ONE</option>
											<option>Wii U</option>
											<option>Playstation 3</option>
											<option>Xbox 360</option>
											<option>Nintendo Wii</option>
									</select><br/>
								</div>
							</div></br>
							Minimum dollar amount:
							<input id="minDollar" name="minDollar" type="number" style="width:75px;">
						</div>
						</div>
						<br/>
						<br/>
						<div style="margin-left:auto; margin-right:auto; width:70px;">
							<input type="submit" value="SUBMIT" style="width:70px;"/>
						</div>
						</form>
						</div>
						
						<div style="clear:both;">
						</div>
						<div style="clear:both;">
						</div>
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
				 			<td><a href="GB-info.php">How It Works</a></td>
				 		</tr>
				 		<tr>
				 			<td><a href="GB-search.php"></a>Recently Added</td>
				 			<td><a href="GB-sign.php">Sign In</a></td>
				 			<td><a href="GB-contact.php"></a>Contact Us</td>
				 		</tr>
				 		<tr>
				 			<td><a href="GB-search.php">What's Hot</a></td>
				 			<td><a href="GB-mac.php">Create An Account</a></td>
				 			<td>Privacy Policy</td>
				 		</tr>
				 	</table>
				</div>
			</div>
		</div>
	</body>
</html>