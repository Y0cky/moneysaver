<?php

if(isset($_POST["username"], $_POST["password"])) {

  
     $dbh = new PDO("mysql:host=localhost;dbname=moneysaver", "root", "server");
  
   $username = $_REQUEST['username'];
   $password = $_REQUEST['password'];
  
  
  $stmt = $dbh->prepare("SELECT * FROM users WHERE username=:username");
  $stmt->bindParam(':username', $_POST["username"]);

  $stmt->execute();

 $row = $stmt->fetch(PDO::FETCH_ASSOC);

	if($row) {
	 	echo "benutzername bereits vergeben";
	 }else {
		$stmt = $dbh->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
   $stmt->bindParam(':username', $_POST["username"]);
	$stmt->bindParam(':password', $_POST["password"]);
	$stmt->execute();
	echo "Benutzer angelegt";
  
	}
}


?>

<form action="?page=register" method="POST" class="form-inline">
  <div class="form-group">
    <label for="username">Benutzername</label>
    <input name="username" type="text" class="form-control" id="username" placeholder="Benutzername">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Passwort">
  </div>
  <button type="submit" class="btn btn-default">Register</button>
  						<li><a href="?page=login">Bereits ein Konto?</a></li>


</form>
