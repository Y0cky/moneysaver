
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

include_once("header.php");

// erlaubte Seiten
$validPages = array(
		"login",
		"register",
		"logout",
		"dashboard",
		"accounts",
		"addaccount",
		"transactions",
		"addtransaction",
		"guthaben",
		"stand"
	);




if(in_array($_GET["page"], $validPages)){
	include_once("content/" . $_GET["page"] . ".php"); 
}	

include_once("footer.php");



?>

							<ul>
    						<li><a href="?page=register">Account erstellen</a></li></ul>
