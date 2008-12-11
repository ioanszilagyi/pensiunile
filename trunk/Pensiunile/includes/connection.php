<?php

require("constants.php");


//1. create db connection

$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
if(!$connection) {
	die("Nu s-a conectat la baza de date: ".mysql_error());
}

//2. select a database to use

$db_select = mysql_select_db(DB_NAME, $connection);

if(!$db_select) {
	die("Selectare baza de date nereusita: ".mysql_error());
}


?>
