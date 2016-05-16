<div class="container">
	
	<?php
	
	$dbh = new PDO("mysql:host=localhost;dbname=moneysaver", "root", "server");
	 $stmt = $dbh->prepare("SELECT * FROM accounts WHERE user=:user");
	 $stmt->bindParam(':user', $_SESSION["id"]);
	 $stmt->execute();
	 $counter = 0;
	 foreach($stmt->fetchAll() as $row){
	 		if($counter % 5 == 0){
	 			$closed = false;
				echo '<div class="row">';	 		
	 		}
	 		
	 		echo '<div class="col-md-2 account" onclick="location.href=\'?page=transactions&account=' . $row['ID'] . '\'">';
	 		echo '<h2>' . $row['name'] . '</h2>';
	 		echo '</div>';
	 		
	 		if($counter % 5 == 4){
	 			$closed = true;
				echo '</div>';	 		
	 		}
	 		$counter++;
		}
		
	//	if(!$closed){
			echo '</div>';		
		//}
	?>

	<div class="row" onclick="location.href='?page=addaccount'">	
		<div class="col-md-2 account addaccount">
			<h2>+</h2>		
		</div>
	</div>
</div>