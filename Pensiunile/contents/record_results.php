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

$titlu_pag = "Record Results";

//setarea fisierelor css si javascript
//$jsfiles = array('user_signup.js', 'user_test.js');//, 'javascript/cookies.js');
$cssfiles = array('master.css');


//--------------------------------------------------------------------
//setare variabile din template
//assign titlul pagini

$smarty->assign('titlu_pag', $titlu_pag);

//$smarty->assign('jsfiles', $jsfiles);
$smarty->assign('cssfiles', $cssfiles);

session_destroy();
header ('Location:?page=1');


smarty_display($file_name, $lang, $smarty);


?>
