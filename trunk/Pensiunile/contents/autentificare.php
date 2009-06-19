<?php
//--------------------------------------------------------------------
//variabilele laute si setate in index.php

//echo "limba e: ".$GLOBALS['lang'];
$lang = $GLOBALS['lang'];
$file_name = $GLOBALS['file_name'];
$smarty = $GLOBALS['smarty'];

//--------------------------------------------------------------------

$titlu_pag = "Pensiunile din Romania";


//--------------------------------------------------------------------
//setare variabile din template
//assign titlul pagini

$smarty->assign('titlu_pag', $titlu_pag);

$smarty->assign('menu_file', "menu_".$lang.".tpl");


$array_categorie_id = array(1,2,3,4,5);
$array_categorie = array('1 margareta','2 margarete','3 margarete','4 margarete','5 margarete');

$smarty->assign('id', $array_categorie_id);
$smarty->assign('names', $array_categorie);
$smarty->assign('selectedCategorie', "2");


$smarty->assign('idJudete', $array_judete_id);
$smarty->assign('namesJudete', $array_judete);
$smarty->assign('selectedJudete', "1");


$smarty->assign('idZonaTuristica', $array_zone_turistice_id);
$smarty->assign('namesZonaTuristica', $array_zone_turistice);
$smarty->assign('selectedZonaTuristica', "1");


$smarty->assign('idStatiune', $array_statiuni_id);
$smarty->assign('namesStatiune', $array_statiuni);
$smarty->assign('selectedStatiune', "1");

$smarty->assign('idCategorie', $array_categorie_id);
$smarty->assign('namesCategorie', $array_categorie);
$smarty->assign('selectedCategoriee', "1");


//------------------------------------------------------------------

$titlu_pag = "Pensiunile din Rom&acirc;nia - rezultat cautare";

//--------------------------------------------------------------------
//setare variabile din template
//assign titlul pagini

$smarty->assign('titlu_pag', $titlu_pag);

//------------------------------------------------------------------
//afiseaza pagina (.TPL)

smarty_display($file_name, $lang, $smarty);

//$smarty->display('autentificare_en.tpl');

?>