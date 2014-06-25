    				
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
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-Fag.php">Find A Game </a>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-mal.php">Make A Listing</a> 
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-Lib.php">Library</a> 
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
					<td class="link" onclick="location.href='GB-Xbox1.html'">Xbox ONE</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-PS3.html'">Playstation 3</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-360.html'">Xbox 360</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-Wii.html'">Wii</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-Other.html'">Other</td>
				</tr>
				<tr>
					<td class="link" onclick="location.href='GB-genr.html'">Genres</td>
				</tr>
				</table>
				<div class="side-Banner">
				</div>
			</div>
			<div class="Column-two">
				<div class="Content-border">
					<div class="Content">
						<div class="Content">
							
                                <table style='height:150px; width:450px; border:1px groove lightgrey; margin:10px auto;'>       
                                    <th class='offerPage-pic' style='height:100%; width:35%; border:1px groove lightgrey;'>
                                        game img
                                    </th>
                                    <th style='height:100%; width:65%; border:1px groove lightgrey;'>
                                    
                                    <?php
                                        require_once('connection.php');
                                        
                                        $listingNo = $_GET['listing'];
                                        
                                        $result= mysqli_query($con, "SELECT * from Listings WHERE Listing_No='".$listingNo."'"); 
                       
        				while($row=mysqli_fetch_array($result)) {
                        
                            echo 'Game Name:'.$row['Game_Name'].'<br>
                                    System:'.$row['System'].'<br>
                                    Accepting:'.$row['Account_Id'].'<br>';
							
							echo "<br>";
							}
                                        
                       
                                   ?>
                                    </th>
                                </table>
                                    
                                <table style="height:250px; width:80%; border:1px lightgrey groove; margin: 15px auto;">
                                    <form action="GB-offer_success.php?listing='.$listingNo.'" id="offer" name="offer">
                                        <tr style="border:1px lightgrey groove;">
                                            <th colspan="2";>
                                            Offer Details
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="width:50%; border:1px lightgrey groove; margin:  auto;">
                                                Name<br>
                                                <input type="text" id="offerName" name="offerName">
                                                </input>
                                            </th>
                                            <th style="width:50%; border:1px lightgrey groove; margin: auto;">
                                                System<br>
                                                <input type="text" id="offerSystem" name="offerSystem">
                                                </input>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="width:50%; border:1px lightgrey groove; margin:  auto;">
                                                Genre<br>
                                                <input type="text" name="offerGenre" id="offerGenre">
                                                </input>
                                            </th>
                                            <th style="width:50%; border:1px lightgrey groove; margin: auto;">
                                                Dollar Offer<br>
                                                <input type="text" name="dollarOffer" id="dollarOffer">
                                                </input>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="width:50%; border:1px lightgrey groove; margin:  auto;">
                                                Cov Img<br>
                                                <input type="file">
                                                </input>
                                            </th>
                                            <th style="width:50%; border:1px lightgrey groove; margin: auto;">
                                                Disc Cond<br>
                                                <input type="file" name="offerCondition" id="offerCondition" style="margin:auto;">
                                                </input>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="2" style="margin:auto; background-color:blue;">
                                                <input style="margin:auto;" type="button" value="Submit Offer" onclick="offerConfirm()"></input>
                                            </th>
                                        </tr>
                                    </table>
                                   
                                    </form>
                                    
                                
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