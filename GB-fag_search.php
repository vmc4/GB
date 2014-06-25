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
                       
                       <div class="Title" style="margin-top:-20px; margin-bottom:20px;">    	
                        <form action="GB-fag_search.php">
                            <select id="advSystem" name="advSystem" onchange="" style="margin:auto;">
        						<option></option>
								<option>Playstation 4</option>
								<option>Xbox One</option>
								<option>Wii U</option>
                                <option>Playstation 3</option>
								<option>Xbox 360</option>
								<option>Nintendo Wii</option>
                                <option>Other</option>
							</select>
                            <select id="advGenre" name="advGenre" onchange="">
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
                            <input type="checkbox" name="searchType" value="Most Recent">
                            <input type="checkbox" name="searchType" value="Most Viewed">
                            <input type="submit">
                        </form>
						</div>
				
                        <?php 
    					$hostname = "GBgames.db.9966757.hostedresource.com";
						$username = "GBgames";
  					    $dbname = "GBgames";
   		 				$password = "Canada00!";
    					$con = mysqli_connect($hostname, $username, $password, "GBgames");
    							
    							
    							if (!$con)
    								{
    								die ('Could not connect: ' . mysqli_error());
    								}
    								else
    								{
    								
    								}
                                    
                        $searching = $_GET['searchGame'];
                        
                        $advSystem = $_GET['advSystem'];
                        $advGenre = $_GET['advGenre'];
                        $searchType = $_GET['searchType'];
                        $orderBy;
                        
                        if ($searchType == "Most Recent") {
                            $orderBy= 'ORDER BY Date_Added DESC';
                        }
                        else if($searchType == "Most Viewed") {
                            $orderBy='ORDER BY Views DESC';
                        }
                        
                        if ($advSystem != "" && $advGenre != "") {
                            $result= mysqli_query($con, "SELECT * from GBlistings WHERE Genre='$advGenre' and System='$advSystem' $orderBy");   
                        }
                        else if ($advSystem !="" && $advGenre =="") {
                             $result= mysqli_query($con, "SELECT * from GBlistings WHERE System='$advSystem' $orderBy");
                        }
                        else if ($advGenre !="" && $advSystem=="") {
                             $result= mysqli_query($con, "SELECT * from GBlistings WHERE Genre='$advGenre' $orderBy");
                        }
                        else {
                             $result= mysqli_query($con, "SELECT * from GBlistings $orderBy");
                        }
                        
					
						
                        echo 'Search Results For:&nbsp;&nbsp;'.$_GET['searchGame']; 
						
						
						
                        
                        
						while($row=mysqli_fetch_array($result)) {
                            echo '<div class="Long-list">
    						<div class="Listing">
								<div class="Search-thumbnail">
									*Game Picture*
								</div>
								<div class="Listing-title">
						 			<a href="GB-listing.php" style="font-size:20pt">'.$row['Game_Name'].'</a>
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
									&nbsp;<a href="'.$row['Account_Id'].'">Fix Link->Account</a>
								</p>
							</div>
						</div>';
							
							echo "<br>";
							}
							
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