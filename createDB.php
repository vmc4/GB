<?php 

$con=mysqli_connect('localhost','fliu','L89mnPQ@!');

if (mysqli_connect_errno()) {
  echo "connection failed" . mysqli_connect_error();
}


// $createDB="CREATE DATABASE GameBiz";
// if (mysqli_query($con,$createDB)) {
  // echo "Database created";
// } else {
  // echo mysqli_error($con);
// }

$createTable1= "USE GameBiz; 
CREATE TABLE Temp_Account(Username VARCHAR(30)
Date_Added DATETIME,Account_Id int(11),First_Name TEXT,Last_Name TEXT, Username VARCHAR(30), User_Email VARCHAR(40), User_Log VARCHAR(15)
)";

$createTable2= "USE GameBiz; 
CREATE TABLE Users(
Date_Added INT(11),Last_Login DATETIME,Account_Id INT(11),First_Name TEXT,Last_Name TEXT, Username VARCHAR(30), User_Email VARCHAR(40), 
User_Log VARCHAR(15),User_Info VARCHAR(15),Profile_Pic VARCHAR(50), Library VARCHAR(50),User_Rating TINYINT(4),Transactions TINYINT(4)
)";

$createTable3= "USE GameBiz; 
CREATE TABLE Listings(
Date_Added BIGINT(20), Listing_No INT(11),Views SMALLINT(6),Account_Id SMALLINT(6), Game_Name VARCHAR(75), System VARCHAR(25),
Genre VARCHAR(20),Accepting_Sys VARCHAR(25), Accepting_Sys VARCHAR(25),Min_Dollar TINYINT(4),Cov_Img VARCHAR(75),Disc_Cond VARCHAR(75)
)";

$createTable4= "USE GameBiz; 
CREATE TABLE Offers(
Date_Added BIGINT(20),Offer_No,Listing_No SMALLINT(6),Lister INT(11),Offeror INT(11), Game_Name VARCHAR(75), System VARCHAR(25),
Genre VARCHAR(20),Cov_Img VARCHAR(75),Disc_Cond VARCHAR(75),Dollar_Offer TINYINT(4)
)";

if (mysqli_query($con,$createTable1)) {
echo "success";
}
else {
echo mysqli_error($con);
}

if (mysqli_query($con,$createTable2)) {
echo "success";
}
else {
echo mysqli_error($con);
}

if (mysqli_query($con,$createTable3)) {
echo "success";
}
else {
echo mysqli_error($con);
}

if (mysqli_query($con,$createTable4)) {
echo "success";
}
else {
echo mysqli_error($con);
}
?>
