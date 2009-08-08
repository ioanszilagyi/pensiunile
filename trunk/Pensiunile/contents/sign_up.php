<?php
//--------------------------------------------------------------------
//variabilele laute si setate in index.php

//echo "limba e: ".$GLOBALS['lang'];
$lang = $GLOBALS['lang'];
$file_name = $GLOBALS['file_name'];
$smarty = $GLOBALS['smarty'];

$titlu_pag = "Inregistrare utilizator - Pensiunile din Romania";

//setarea fisierelor css si javascript
$jsfiles = array('user_signup.js', 'user_test.js');//, 'javascript/cookies.js');
$cssfiles = array('master.css', 'sign_forms.css');


//--------------------------------------------------------------------
//setare variabile din template
//assign titlul pagini

$smarty->assign('titlu_pag', $titlu_pag);

$smarty->assign('jsfiles', $jsfiles); 
$smarty->assign('cssfiles', $cssfiles); 

//------------------------------------------------------------------

//afiseaza pagina (.TPL)
smarty_display($file_name, $lang, $smarty);
//$smarty->display('inregistrare_pensiune_ro.tpl');

?>