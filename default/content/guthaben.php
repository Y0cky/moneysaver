<?php
	


	$dbh = new PDO("mysql:host=localhost;dbname=moneysaver", "root", "server");



	 $stmt = $dbh->prepare("SELECT accounts.user, users.user, SUM(accounts.guthaben/2) FROM accounts, users WHERE users.user = accounts.user
     
");

	// $stmt->bindParam(':user', $_SESSION["id"]);
	//$stmt->bindParam(':user', $_GET["user"]);
	//$stmt->bindParam(':guthaben', $_GET["guthaben"]);
	 
	 $stmt->execute();






    
	?>