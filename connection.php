<?php
            $hostname = "GameBiz.db.9966757.hostedresource.com";
            $username = "GameBiz";
            $dbname = "GameBiz";
   		 
            $password = "Canada00!";
    		$con = mysqli_connect($hostname, $username, $password, "GameBiz");
    							
    							
    							if (!$con)
    								{
    								die ('Could not connect: ' . mysqli_error());
    								}
    								
?>