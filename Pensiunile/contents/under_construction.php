<?php
//--------------------------------------------------------------------
//variabilele laute si setate in index.php

//echo "limba e: ".$GLOBALS['lang'];
$lang = $GLOBALS['lang'];
$file_name = $GLOBALS['file_name'];
$smarty = $GLOBALS['smarty'];

//$user_current = unserialize($_SESSION['user_current']);

//--------------------------------------------------------------------
//setarea fisierelor css si javascript
$jsfiles = array('script.js');//, 'javascript/cookies.js');
$cssfiles = array('master.css');

//--------------------------------------------------------------------
//setare variabile din template

$smarty->assign('jsfiles', $jsfiles);
$smarty->assign('cssfiles', $cssfiles);

$array_categorie_id = array(0,1,2,3,4,5);
$array_categorie = array('-','*','**','***','****','*****');


//------------------------------------------------------------------

//afiseaza pagina (.TPL)
//echo $file_name."_".$lang;
smarty_display($file_name, $lang, $smarty);

?>