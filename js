
//Make a listing entry validation
function malValidate() {
var x = document.forms["mal"]["gameName"].value;
var systemSelect = document.forms["mal"]["systemName"].value;
var imageUpload = document.forms["mal"]["coverImage"].value;
var otherSystem = document.forms["mal"]["otherSystem"].value;
if (x==null || x=="")
	{
	alert("Please enter game name");
	}
else if (systemSelect=="")
	{
	alert("Please enter system name");
	}
else if (systemSelect=="Other" && otherSystem=="")
	{
	alert ("Please enter system name");
	}
else if (imageUpload==null || imageUpload=="")
	{
	alert ("Please upload cover image");
	}
else 
	{
	alert("Successfully Submitted!");
	}
}

//Make an account form validation
function macValidate() {
var username = document.forms["mac"]["userName"].value;
var userEmail = document.forms["mac"]["emailAdd"].value;
var confirmEmail = document.forms["mac"]["emailConfirm"].value;
var userPassword = document.forms["mac"]["password"].value;
var confirmPassword = document.forms["mac"]["passwordConfirm"].value;
if (username==null || username=="")
	{
	alert("Please enter username");
	}
else if (userEmail==null || userEmail=="")
	{
	alert("Please enter email address");
	}
else if (confirmEmail != userEmail )
	{
	alert("Email addresses do not match");
	}
else if (userPassword==null || userPassword=="")
	{
	alert("Please enter a password");
	}
else if (userPassword != confirmPassword)
	{
	alert("Passwords do not match");
	}
else 
	{
	alert("Successfully Submitted!");
	}
}

//Show/hide other system select
function systemOther() {
var system = document.forms["mal"]["systemName"].value;
if (system=="Other")
	{
	document.getElementById("otherSystem").style.visibility="visible";
	document.getElementById("gameGenre").innerHTML="<div style='margin-left:30px;'>Genre<br/><select name='gameGenre'><option></option><option>Action/Adventure</option><option>Fighting</option><option>Puzzle/Strategy</option><option>Role-Playing</option><option>Shooter</option><option>Simulation</option><option>Sports</option><option>Other</option></select></div>";
	}
else
	{
	document.getElementById("otherSystem").style.visibility="hidden";
	}
}

//Game Search
function gameSearch() {
var search = document.forms["search"]["searchGame"].value;
if (search==null || search!="")
	{
	alert("Game Search Successful");
	}
}

//Make an offer
function makeOffer () {
document.getElementById("Offer").innerHTML="<table class='Games-requested'><tr><td style='width:70%;'>Game Name</td><td style='width:30%;'>Game System</td></tr><tr><td style='width:70%;'>Game Name</td><td style='width:30%;'>Game System</td></tr><tr><td style='width:70%;'>Game Name</td><td style='width:30%;'>Game System</td></tr></table><div class='Bid-button' style='margin-right:20px; margin-top:20px;'><input name='Bid-button' type='button' value='Make An Offer' style='width:100%; height:100%'/></div>";
}

//Confirm Offer
function offerConfirm() {
var ofCon = confirm('Are you sure you want to submit this offer?');
if (ofCon==true) {
    document.getElementById('offer').submit();
}
}
