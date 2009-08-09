<?php

session_start();

require_once('includes/connection.php');
require_once('includes/functions.php');
require_once('includes/config.php');
require_once 'vo/user.php';

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
//verifica dace este selectata limba, daca nu o vom seta acum cu limba implicita en

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

//instantiem obiectul user_current care va fi de tipul clasei User();

if(!isset($_SESSION['user_current']) || empty($_SESSION['user_current'])){
    
    $user_current = new User();
    $_SESSION['user_current'] = serialize($user_current);

} else {

    $user_current = unserialize($_SESSION['user_current']);

}


$smarty->assign('email_currentUser', $user_current->email);
$smarty->assign('name_currentUser', $user_current->name);
$smarty->assign('phone_currentUser', $user_current->phone);


//se va stabili meniul principal de sus din antet de aici,
//in functie de limba selectata
//in functie de permisiunea userului curent
if(isset($_SESSION['authenticated']) && $_SESSION['authenticated']){
        $menu1_array = get_menu($user_current->role_id, $lang);
    
} else {

    $menu1_array = get_menu("1", $lang);

}


$menu_footer = get_menu("5", $lang);

$smarty->assign('menu1', $menu1_array);
$smarty->assign('menu_footer', $menu_footer);

//------------------------------------------------------------------------------
//selecteaza pagina ceruta (.PHP)

if (!isset($_GET['page']) || empty($_GET['page'])){
	$page_id = 1;
} else {
	if(intval($_GET['page']) != 0){
		$page_id = intval($_GET['page']);
	} else {
		$page_id = 1;
	}
	
}
//setam pagina "under construction" by default
//$page_id = 10;

//goto_page($page_id);

//ia datele din baza de date despre pagina respectiva
$file_data = get_file_data($page_id, $lang);

//setam variabila globala file_name
$file_name = $file_data['file_name'];

$file_title = $file_data['title_'.$lang];
$smarty->assign('titlu_pag', $file_title);

//incarcam pagina respectiva
require_contents_file($file_data['file_name']);

//session_destroy();
?>