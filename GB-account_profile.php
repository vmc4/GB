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
                       
                    <table style="float:left; margin:auto 0; height:500px; margin:0 15px;">
                        <tr>
                            <td style="height:25%;">
                                <a href="GB-account_profile.php">Profile</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="height:25%;">
                                <a href="GB-account_settings.php">Account Settings</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="height:25%;">
                                <a href="GB-account_listings.php">Listings</a>
                            </td>
                        </tr>
                         <tr>
                            <td style="height:25%;">
                                <a href="GB-account_offers.php">Offers</a>
                            </td>
                        </tr>
                    </table>
                    
                    <div style="width:80%; height:500px; border:1px lightgrey groove; float:left;">
                        
                        <div class="Profile-pic">
        					Prof-pic
						</div>
						<div class="Account-title">
						</div>
						<div class="Member-since">
							Member Since: </br>
							**Return sign-up date**
						</div>
						<div class="Trade-activity">
							<a href="Gb-search.php">My Listings</a>
						</div>
						<div style="float: left; margin-left:0px;">
							<input type="button" value="Send user a message" 
							style="text-align:center; margin-top:40px; float:left"/>
							<input type="button" value="Propose a Trade" style="margin-top:40px; 
							margin-left:30px; float:left;"/>	
						</div>
						<div class="Game-collection" style="overflow:auto;">
							<p style="text-align:center; font-size:16px;">(User's Name) Game Library-->tabs=member reviews (onclick=history), library...</p>
					       
                           <table style="width:100%">
							
					<?php 
    					require_once('connection.php');
                                    
                        $searching = $_GET['searchGame'];
                        
						
						$result= mysqli_query($con, "SELECT * from Listings WHERE Account_Id=".$_GET['account']."");
							
						while($row=mysqli_fetch_array($result)) {
						    echo '<tr style="height:35px;">
                                    <td style="width:33%; text-align:center;">
                                      '.$row['Game_Name'].'
                                    </td>
                                    <td style="width:33%; text-align:center;">
                                      '.$row['System'].'
                                    </td>
                                    <td  style="width:33%; text-align:center;">
                                      '.$row['Genre'].'
                                    </td>
                                  </tr>';
						}
                                  
                     ?>
							</table>
                            
                        
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