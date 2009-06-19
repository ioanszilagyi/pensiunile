<?php
//--------------------------------------------------------------------
//variabilele laute si setate in index.php

//echo "limba e: ".$GLOBALS['lang'];
$lang = $GLOBALS['lang'];
$file_name = $GLOBALS['file_name'];
$smarty = $GLOBALS['smarty'];

$key = $_GET['key'];

//echo $key;

$titlu_pag = "Inregistrare utilizator - Pensiunile din Romania";


//--------------------------------------------------------------------
//setare variabile din template
//assign titlul pagini

$smarty->assign('titlu_pag', $titlu_pag);
//incarca meniul
$smarty->assign('menu_file', "menu_".$lang.".tpl");

//------------------------------------------------------------------

//afiseaza pagina (.TPL)
smarty_display($file_name, $lang, $smarty);
//$smarty->display('inregistrare_pensiune_ro.tpl');

?>