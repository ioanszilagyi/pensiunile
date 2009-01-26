<?php

//require_once('../vo/pensiune.php');
require_once('../includes/connection.php');
require_once('../includes/functions.php');


$search_field = $_GET['search_field'];

$search_field = $_GET['search_field'];
$selected_zona = $_GET['selected_zona'];
$selected_judet = $_GET['selected_judet'];
$selected_categorie = $_GET['selected_categorie'];


$row_set = get_pensiuni($search_field, $selected_zona, $selected_judet, $selected_categorie);

header("Content-type: text/xml");
echo "<?xml version=\"1.0\"?><pensiuni xml:lang=\"EN\">";


$i=1;
while($pensiune = mysql_fetch_array($row_set)){
	//$array_pensiune_id[$i] = $pensiune['id'];
	//$array_pensiune_nume[$i] = $pensiune['nume'];
	//$array_pensiune_descriere[$i] = $pensiune['descriere'];
	//$array_pensiune_localitate[$i] = $pensiune['id_localitate'];
	
	echo "<pensiune>";
	echo "<id>".$pensiune['id']."</id>";
	echo "<nume>".$pensiune['nume']."</nume>";
	echo "<descriere>".$pensiune['descriere']."</descriere>";
	echo "</pensiune>";

	
	$i++;
}

echo "</pensiuni>";

?>