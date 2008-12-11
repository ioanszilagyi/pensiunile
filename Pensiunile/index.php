<?php
//session_start();

require_once('includes/connection.php');
require_once('includes/functions.php');
require_once('includes/config.php');

//------------------------------------------------------------------------------
//verifica dace este selectata limba, daca nu o retinem intr-o variabila pe client COOKIE
if (isset($_GET['lang']) && !empty($_GET['lang'])){
	setcookie("lang", $_GET['lang']);
	$lang = $_GET['lang'];
} else {
	if (isset($_COOKIE['lang']) && !empty($_COOKIE['lang'])){
		$lang = $_COOKIE['lang']; // se va lua limba din cookie, care se seteaza cu javascript

	} else {
		$lang = "en";// limba implicita, in caz ca site-ul nu exista în limba clientului.
	}	
}

//echo $lang;

//---------------------------------------------------------------------------
// put full path to Smarty.class.php

require_once(SMARTY);// setat in config.php
$smarty = new Smarty();
$smarty->template_dir = TEMPLATES; // 'templates/templates';setat in config.php
$smarty->compile_dir = TEMPLATES_C; //'templates/templates_c';
$smarty->cache_dir = CACHE; //'templates/cache';
$smarty->config_dir = CONFIG; //'templates/configs';

//------------------------------------------------------------------------------
//selecteaza pagina ceruta (.PHP)

if (!isset($_GET['page']) || empty($_GET['page'])){
	$page = "home";
} else {
	$page = $_GET['page'];
}
require_contents_file($page.".php");

//session_destroy();
?>