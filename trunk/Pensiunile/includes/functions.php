<?php
//--------------------------------------------------------------------------
//functia de afisare smarty (.TPL)
function smarty_display($page, $lang, $smarty){
	//echo $page."_".$lang.".tpl";
	if(file_exists(TEMPLATES.$page."_".$lang.".tpl")){
		$smarty->display($page."_".$lang.".tpl");
	} else {
		echo "Template-ul nu exista";
		//$smarty->display($page."_en.tpl");
	}
}
//--------------------------------------------------------------------------
//functia de selectare a paginii cerute (.PHP)

function require_contents_file($file){
	if(file_exists(CONTENTS.$file)){
		require_once(CONTENTS.$file);
	} else {
		echo "Pagina nu exista!!!";
	}
}

//--------------------------------------------------------------------------
//functia de confirm la query

function confirm_query($result_set){
	if(!$result_set){
		die("Database query failed: ".mysql_error());
	}
}

//--------------------------------------------------------------------------
//get all judete

function get_all_judete(){
global $connection;
$query = 'SELECT * FROM `cnt_judete`';// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}

//--------------------------------------------------------------------------
//get judete by id_tara

function get_judete_tara($selected_tara){
global $connection;
$query = "SELECT * FROM `cnt_judete` WHERE id_tara='{$selected_tara}' ORDER BY nume ASC";// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}


//--------------------------------------------------------------------------
//get localitati by id_judet

function get_localitati_judet($selected_judet){
global $connection;
$query = "SELECT * FROM `cnt_localitati` WHERE id_judet='{$selected_judet}' ORDER BY nume ASC";// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}
//--------------------------------------------------------------------------
//get all zone turistice

function get_all_zone_turistice(){
global $connection;
$query = 'SELECT * FROM `cnt_zone_turistice`';// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}
//--------------------------------------------------------------------------
//get all statiuni

function get_all_statiuni(){
global $connection;
$query = 'SELECT * FROM `cnt_statiuni`';// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}

//get all margarete

function get_all_margarete(){
global $connection;
$query = 'SELECT * FROM `cnt_categorii`';// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}

//--------------------------------------------------------------------------

//get all pensiuni

function get_all_pensiuni(){
global $connection;
$query = 'SELECT * FROM `cnt_pensiuni`';// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}

//--------------------------------------------------------------------------

//get pensiune where....

function get_pensiuni($search_field, $selected_zona, $selected_judet, $selected_categorie){
global $connection;
//$query = 'SELECT * FROM `cnt_pensiuni` WHERE nume LIKE';// LIMIT 0, 10 ';
$query = "SELECT * FROM `cnt_pensiuni` WHERE `nume` LIKE '%{$search_field}%' "; 
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}

?>