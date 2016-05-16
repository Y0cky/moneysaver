<div class="container">
	
	<?php
	
	$dbh = new PDO("mysql:host=localhost;dbname=moneysaver", "root", "server");
	 $stmt = $dbh->prepare("SELECT * FROM transaction WHERE account=:account");
	 $stmt->bindParam(':account', $_GET["account"]);
	 $stmt->execute();

    echo '<table class="table">';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Datum</th>';
    echo '<th>recv</th>';
    echo '<th>inflow</th>';
    echo '<th>outflow</th>';
    echo '<th>zweck</th>';
    echo '<th>account</th>';
    echo '</tr>';
	 foreach($stmt->fetchAll() as $row){
	 	echo '<tr>';
	 		
	 		echo '<td>' . $row['ID'] . '</td>';
	 	   echo '<td>' . $row['datum'] . '</td>';
	 		echo '<td>' . $row['recv'] . '</td>';
	 		echo '<td>' . $row['inflow'] . '</td>';
			echo '<td>' . $row['outflow'] . '</td>';
			echo '<td>' . $row['zweck'] . '</td>';
			echo '<td>' . $row['account'] . '</td>';

	 		
	 		echo '</div>';
	 	echo '</tr>';
	 		
	 	}
	

    
	?>

	<div class="row" onclick="location.href='?page=addtransaction&account=<?php echo $_GET['account']; ?>'">	
		<div class="col-md-2 account addaccount">
			<h2>+</h2>		
		</div>
	</div>
</div>	
		