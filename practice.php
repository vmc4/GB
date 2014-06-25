
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11.dtd">
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
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-Mal.html">Make A Listing</a> 
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="GB-For.html">Most Wanted</a> 
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			</div>
		<div class="Body">
			<div class="Banner">
			</div>
			<form name="search">
				<div class="Search">
					<input name="searchGame" type="text" style="height:20px; width:320px; border-radius:15px;
					margin:10px; margin-left:5px;"/>
					<input type="button" value="SEARCH" style="width:100px;" onclick="gameSearch()"/>
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
$con = mysql_connect("gbpractice.db.9966757.hostedresource.com","gbpractice","Goldilox4!");
if ($con)
  {
  echo "Success";
   }
else
  {
  die('Could not connect' . mysql_error());
  }

mysql_select_db('gbpractice', $con);

$game = $_GET["gameName"];
$system = $_GET["systemName"];
$otherSystem = $_GET["otherSystem"];
$genre = $_GET["gameGenre"];
$covImg = $_GET["coverImage"];
$disCon = $_GET["diskCondition"];
$mw1 = $_GET["mw1"];
$mw2 = $_GET["mw2"];
$mw3 = $_GET["mw3"];
$mwsystem1 = $_GET["mwSystem1"];
$mwsystem2 = $_GET["mwSystem2"];
$mwsystem3 = $_GET["mwSystem3"];
$chkbox1 = $_GET["acceptPS3"];
$chkbox2 = $_GET["accept360"];
$chkbox3 = $_GET["acceptWii"];
$acceptOther = $_GET["acceptOther"];
$minDollar = $_GET["minDollar"];
$date = DATE("y-m-d");

if ($system=="Other")
     {
     $insert = mysql_query("INSERT INTO Listings (Listing_No, Game_name, System_Name, Game_Genre, Cover_Image, Disk_Condition, MW_1, MW_2, MW_3, Systems_Accepted, Min_Dollar, Date_Added)
VALUES ('', '$game', '$otherSystem', '$genre', '$covImg', '$disCon', '$mw1 - $mwsystem1', '$mw2 - $mwsystem2', '$mw3 - $mwsystem3', '$chkbox1 $chkbox2 $chkbox3 $acceptOther', '$minDollar', '$date' )"); 
     }
else
     {
     $insert = mysql_query("INSERT INTO Listings (Listing_No, Game_name, System_Name, Game_Genre, Cover_Image, Disk_Condition, MW_1, MW_2, MW_3, Systems_Accepted, Date_Added)
VALUES ('', '$game', '$system', '$genre', '$covImg', '$disCon', '$mw1 - $mwsystem1', '$mw2 - $mwsystem2', '$mw3 - $mwsystem3', '$chkbox1 $chkbox2 $chkbox3 $acceptOther', '$date' )"); 
     }

if ($insert)
     {
     echo "Record added";
     } 
 else 
     {
     echo "<br/>Not  ". mysql_error();
     }

mysql_close($con);
?>
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