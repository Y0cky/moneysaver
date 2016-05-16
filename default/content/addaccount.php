<?php

 
  if(isset($_POST['name'])){
	  $dbh = new PDO("mysql:host=localhost;dbname=moneysaver", "root", "server");
	 
		$stmt = $dbh->prepare("INSERT INTO accounts (name, user, guthaben) VALUES (:name, :user, :guthaben)");
	   $stmt->bindParam(':name', $_POST["name"]);
		$stmt->bindParam(':user', $_SESSION["id"]);
		$stmt->bindParam(':guthaben', $_POST["guthaben"]);
		$stmt->execute();
		header('Location: ?page=accounts');
	}
	
	?>
	
	<form action="?page=addaccount" method="POST" class="form-inline">
  <div class="form-group">
    <label for="namee">Name</label>
    <input id="name" name="name" type="text" class="form-control" id="name" placeholder="Name">
    <input id="guthaben" name="guthaben" type="text" class="form-control" id="guthaben" placeholder="guthaben">
    <button type="submit" class="btn btn-default">Hinzufuegen</button>
    </form>
    </div>
    
    