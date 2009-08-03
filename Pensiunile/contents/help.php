<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//--------------------------------------------------------------------
//variabilele laute si setate in index.php

//echo "limba e: ".$GLOBALS['lang'];
$lang = $GLOBALS['lang'];
$file_name = $GLOBALS['file_name'];
$smarty = $GLOBALS['smarty'];
//--------------------------------------------------------------------
//ia datele despre userul curent din sesiune
$user_current = unserialize($_SESSION['user_current']);

$titlu_pag = "Administrate your account - Pensiunile din Romania";

$jsfiles = array('script.js','administrate.js');
$cssfiles = array('master.css', 'administrate.css');


$smarty->assign('titlu_pag', $titlu_pag);

//$smarty->assign('user', $user_current->name);

$smarty->assign('jsfiles', $jsfiles);
$smarty->assign('cssfiles', $cssfiles);

//$smarty ->assi


//------------------------------------------------------------------
//afiseaza pagina (.TPL)
smarty_display($file_name, $lang, $smarty);
?>
