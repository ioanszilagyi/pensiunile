<?php

//session_start();

require_once('includes/connection.php');
require_once('includes/functions.php');
require_once('includes/config.php');


//---------------------------------------------------------------------------
// put full path to Smarty.class.php

require_once(SMARTY);// setat in config.php
$smarty = new Smarty();
$smarty->template_dir = TEMPLATES; // 'templates/templates';setat in config.php
$smarty->compile_dir = TEMPLATES_C; //'templates/templates_c';
$smarty->cache_dir = CACHE; //'templates/cache';
$smarty->config_dir = CONFIG; //'templates/configs';

//$lang = "en";
//$file_name = "show_results";

//------------------------------------------------------------------------------
//verifica dace este selectata limba
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
function set_language(){
	global $lang;
	$lang = get_language();
	if ($lang == "ro" || $lang == "hu" || $lang == "en" || $lang == "fr" || $lang == "de") {
		setcookie("lang", $lang);
	} else {
		$lang = "en";
		setcookie("lang", $lang);
	}	
}

set_language();
//------------------------------------------------------------------------------
//selecteaza pagina ceruta (.PHP)

if (!isset($_GET['page']) || empty($_GET['page'])){
	$page = 1;
} else {
	if(intval($_GET['page']) != 0){
		$page = intval($_GET['page']);
	} else {
		$page = 1;
	}
	
}
//ia datele din baza de date despre pagina respectiva
$file_data = get_file_data($page);

//setam variabila globala file_name
$file_name = $file_data['file_name'];

//incarcam pagina respectiva
require_contents_file($file_data['file_name']);

//session_destroy();
?>