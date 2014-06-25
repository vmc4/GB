
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
							
    							require_once('connection.php');
   							
    							if (!$con)
    								{
    								die ('Could not connect: ' . mysqli_error());
    								}
	
                            $userFirstName=$_COOKIE['name'];
                            $userLastName=$_SESSION['firstName'];
                            $userEmail=$_GET['userEmail'];
                            $userUsername=$_GET['userUsername'];
                            $userLog=$_GET['userLog'];
                            $dateAdded="NOW()";
                            
                            
    
							$insert=mysqli_query($con, "INSERT INTO Users(Account_Id, First_Name, Last_Name,
                                                    Username, User_Log, User_Email)
							VALUES(DEFAULT, '$userFirstName','$userLastName', '$userUsername', '$userLog', '$userEmail')");
									
								
                                    if ($insert)
    								{
									echo "Your account has been created! <br>
											You will recieve a confirmation email shortly.";
									}
								elseif (!$insert)
									{
									echo mysqli_error($con);
									die ('unable to insert' );
									}
                                    
                            $msg = "Name: ".$_GET['userFirstName']." ".$_GET['userLastName']."\n";
                            $msg .= "Email: ".$_GET['userEmail']."\n";
                            $msg .= "Please confirm your email address. Soon you will be able to 
                            get the most bang for your gaming buck.";
                            $msg .= '<html></br>';
                            $msg .= '<a href="GB-mac_success.php?username='.$userUsername.'"><b>Create Account</b></a></html>';
                                     
                            $recipient = $_GET['userEmail'];
                            $subject = "Account Created";
                            $headers  = 'MIME-Version: 1.0' . "\r\n";
                            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                            $headers = "From: Game Bizarre <admin@gamebizarre.com> \n";
                            
                            $send = mail($recipient, $subject, $msg, $headers);
                            
                            if(!mail) {
                                echo mysqli_error($send);
                            }
                            else {
                            
                            }
                                     
                            
								
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