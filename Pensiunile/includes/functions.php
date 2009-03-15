<?php
//functia de verificare a limbii setate in ordinea: variabila GET, cookie, setari browser.

function get_language(){
	if (isset($_GET['lang']) && !empty($_GET['lang'])){
		//setcookie("lang", $_GET['lang']);
		$lang = $_GET['lang'];
	} else {
		if (isset($_COOKIE['lang']) && !empty($_COOKIE['lang'])){
			$lang = $_COOKIE['lang']; // se va lua limba din cookie, care se seteaza cu javascript
		} else {
			$lang_detect = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
			$lang = substr($lang_detect, 0, 2);
			//echo $lang;
			//$lang = "en";// limba implicita, in caz ca site-ul nu exista în limba clientului.
		}	
	}
	return $lang;
};

//--------------------------------------------------------------------------
//functia de afisare smarty (.TPL)
function smarty_display($file_name, $lang, $smarty){
	//echo $page."_".$lang.".tpl";
	if(file_exists(TEMPLATES.$file_name."_".$lang.".tpl")){
		$smarty->display($file_name."_".$lang.".tpl");
		
	} else {
		echo "Template-ul nu exista";
		//$smarty->display($page."_en.tpl");
	}
}

//--------------------------------------------------------------------------
//functia de selectare a paginii cerute cautata in baza de date

function get_file_data($file_id){
	if(is_int($file_id)){
		global $connection;
		$query = "SELECT * FROM `frm_pages` WHERE id='{$file_id}' LIMIT 1";
		$row_set = mysql_query($query, $connection);
		confirm_query($row_set);
		$file_data = mysql_fetch_array($row_set);
		//$file_name = $file_data['file'];
		//return $file_name;
		
	} else {
		echo "Is not a number...";
	}
	return $file_data;
}

//--------------------------------------------------------------------------
//functia de selectare a paginii cerute (.PHP)

function require_contents_file($file){
	if(file_exists(CONTENTS.$file.".php")){
		require_once(CONTENTS.$file.".php");
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
$query = "SELECT * FROM `cnt_judete` WHERE country_id='{$selected_tara}' ORDER BY name ASC";// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}


//--------------------------------------------------------------------------
//get localitati by id_judet

function get_localitati_judet($selected_judet){
global $connection;
$query = "SELECT * FROM `cnt_localitati` WHERE judet_id='{$selected_judet}' ORDER BY name ASC";// LIMIT 0, 10 ';
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
$query = "SELECT * FROM `cnt_pensiuni` WHERE `name` LIKE '%{$search_field}%' "; 
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}

function get_pensiuni_name($name) {
	global $connection;
	 $query = "SELECT
			`cnt_pensiuni`.`id` AS id,
			`cnt_pensiuni`.`name` AS name,

			`cnt_photos`.`file` AS photo_file,
			
			`cnt_pensiuni`.`category` AS category,
			
			`cnt_pensiuni`.`address` AS address,

			`cnt_localitati`.`name` AS localitate,
			`cnt_judete`.`name` AS judet,			

			`cnt_pensiuni`.`phone` AS phone,
			`cnt_pensiuni`.`email` AS email,
			`cnt_pensiuni`.`web` AS web
			
			FROM `cnt_pensiuni`

			LEFT JOIN `cnt_photos` ON `cnt_pensiuni`.`photo_id` = `cnt_photos`.`id`
			
			LEFT JOIN `cnt_localitati` ON `cnt_pensiuni`.`localitate_id` = `cnt_localitati`.`id`
			LEFT JOIN `cnt_judete` ON `cnt_localitati`.`judet_id` = `cnt_judete`.`id`			

			LEFT JOIN `cnt_users` ON `cnt_pensiuni`.`user_id` = `cnt_users`.`id`
			
			WHERE `cnt_pensiuni`.`name` LIKE '%{$name}%' ";

	$row_set = mysql_query($query, $connection);
	confirm_query($row_set);
	return $row_set;
}

?>