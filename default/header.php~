<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<style type="text/css">
.account {
	height: 100px;
	background-color: #eee;
	margin: 5px;
}

.addaccount {
	background-color: lightgreen;
}

.account h2 {
	font-size: 2em;
	text-align: center;
	line-height: 2em;
}
</style>
</head>

<body> 

<div class="container"> 
	<div class="page-header">
		<h1>moneysaver<span class="glyphicon glyphicon-euro" aria-hidden="true"></span></h1>
		<?php
		error_reporting(E_ALL & ~E_NOTICE);

				
				if($_SESSION && $_SESSION['id']) {
					echo '<div class="pull-right">';
					echo "Willkommen, " . $_SESSION['id'];	
					echo '<a href="?page=logout" name="logout" class="btn btn-danger">Logout</a>';
					echo '</div>';

					
				
					
					?>
					
					<ul class="nav nav-tabs">
					<button type="button" class="btn btn-success"><a href="?page=accounts"><?php 	
	
	$dbh = new PDO("mysql:host=localhost;dbname=moneysaver", "root", "server");
	$stmt = $dbh->prepare(" SELECT DISTINCT (accounts.guthaben - SUM(transaction.outflow) + SUM(transaction.inflow)) AS summe FROM accounts INNER JOIN users ON accounts.user = users.ID INNER JOIN transaction ON transaction.user = users.ID WHERE users.ID =:id;");
 $stmt->bindParam(":id", $_SESSION['id']);

	$stmt->execute();
	
foreach($stmt->fetchAll() as $row){
	 	
	 		echo  $row['summe'] ;
	 	   
	 		
	 		
	 	}






 ?>Euro</button>
</a>
					  <li role="presentation" class="active"><a href="?page=dashboard">Dashboard</a></li>

					  <li role="presentation" class="dropdown">
						<li><a href="?page=accounts">Accounts</a></li>
   				   
						
					  </ul>
					   <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">

  						<li><a href="#">Another link</a></li>
  						<li><a href="#">Seite 2</a></li>
   				   <li><a href="#">Seite 3</a></li>
     				 	 <li><a href="#">Seite 4</a></li>
						
					</ul>
				
      
					
					<?php
		
				}
			?>		
	</div> 