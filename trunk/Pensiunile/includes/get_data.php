<?php

require_once("connection.php");
require_once("functions.php");

//-----------------------------------------------------
//find GET values


if(isset($_GET['name']) && !empty($_GET['name'])){
	$name = $_GET['name'];
	//echo $name;
}	
if(isset($_GET['value']) && !empty($_GET['value'])){
	$value = $_GET['value'];
	//echo $value;
}

if($name == "get_judete"){
	//get judete
	get_judete($value);
} else if ($name == "get_localitati"){
	//get localitati
	get_localitati($value);
}


//-----------------------------------------------------
//$tara_id = 1;// Romania este tara implicita...

//-----------------------------------------------------
//get lista judete in functie de tara
function get_judete($selected_tara_id){
	$row_set = get_judete_tara($selected_tara_id);
	//generate_xml($row_set);
	//echo json_encode($row_set);
	//echo $row_set;
	generate_json($row_set);
}

//-----------------------------------------------------
//get lista localitati in functie de judet
function get_localitati($selected_judet_id){
	$row_set = get_localitati_judet($selected_judet_id);
	generate_xml($row_set);
}

//-----------------------------------------------------

//generate xml file

function generate_xml($row_set){
	header("Content-type: text/xml");
	echo "<?xml version=\"1.0\"?><choices xml:lang=\"EN\">";
	$i=1;
	while($data = mysql_fetch_array($row_set)){
		echo "<item>";
		echo "<label>".$data['name']."</label>";
		echo "<value>".$data['id']."</value>";
		echo "</item>";

		$i++;
	}

	echo "</choices>";
}

//generate json data

function generate_json($row_set){

	$i=1;
	while($data = mysql_fetch_array($row_set)){
		
		$data_row_name[$i] = $data['name'];
		$data_row_id[$i] = $data['id'];
		$i++;
	}

	echo json_encode($data_row_name);
	echo json_encode($data_row_id);
	
}

?>