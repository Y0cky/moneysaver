<h1> Alle Transaktionen </h1>

<?php

	$dbh = new PDO("mysql:host=localhost;dbname=moneysaver", "root", "server");
	  if(isset($_POST['delete']) ) {

    $stmt = $dbh->prepare("DELETE FROM transaction WHERE ID = :id;");
    //schicke die abfrage ab
		 $stmt->bindParam(':id', $_POST["delete"]);
	 $bernd = $stmt->execute();

     
 }
	 
	 $stmt = $dbh->prepare("SELECT users.ID, transaction.id, transaction.datum, transaction.recv, transaction.inflow, transaction.outflow, transaction.account, transaction.zweck, accounts.name FROM transaction INNER JOIN users ON users.ID = transaction.user INNER JOIN accounts ON accounts.id = transaction.account WHERE users.ID =:id;");
	 $stmt->bindParam(':id', $_SESSION["id"]);
	 $stmt->execute();

    
 
    echo '<table class="table">';
    echo '<tr>';
 	 echo '<th>ID</th>';
    echo '<th>Datum</th>';
    echo '<th>recv</th>';
    echo '<th>inflow</th>';
    echo '<th>outflow</th>';
    echo '<th>account</th>';
    echo '<th>zweck</th>';
    echo '<th>loeschen</th>';
    echo '</tr>';
	 foreach($stmt->fetchAll() as $row){
	 
	
	 	echo '<tr>';
	 	
	 	   echo '<td>' .'<b>' . $row['id']  .'<b>' . '</td>'; 
	 	   echo '<td>' .'<b>' . $row['datum'] .'<b>' . '</td>'; 
	 		echo '<td>' . $row['recv'] . '</td>';
	 		echo '<td>' . $row['inflow'] . '</td>';
			echo '<td>' . $row['outflow'] . '</td>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' .'<b>' . $row['zweck'] . '</b>' . '</td>';
      	 echo "<td> <form  method=\"post\" action=\"?page=dashboard\"> <Input type=\"hidden\" name=\"delete\"  value=\"" . $row['id'] . "\"/><input type=\"submit\" value=\"löschen\"/></form> </td>" ;
	 		echo '</div>';
	 	echo '</tr>';

	 	}
    
	