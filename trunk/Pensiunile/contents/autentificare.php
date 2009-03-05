<?php
//--------------------------------------------------------------------
//variabilele laute si setate in index.php

//echo "limba e: ".$GLOBALS['lang'];
$lang = $GLOBALS['lang'];
$page = $GLOBALS['page'];
$smarty = $GLOBALS['smarty'];

//--------------------------------------------------------------------

//get lista cu judete
$row_set = get_all_judete();
$i=1;
while($judet = mysql_fetch_array($row_set)){
	$array_judete_id[$i] = $judet['id'];
	$array_judete[$i] = $judet['nume'];
	$i++;
}


//get lista cu zone_turistice
$row_set = get_all_zone_turistice();
$i=1;
while($zona_turistica = mysql_fetch_array($row_set)){
	$array_zone_turistice_id[$i] = $zona_turistica['id'];
	$array_zone_turistice[$i] = $zona_turistica['nume'];
	$i++;
}

//get lista cu statiuni
$row_set = get_all_statiuni();
$i=1;
while($statiune = mysql_fetch_array($row_set)){
	$array_statiuni_id[$i] = $statiune['id'];
	$array_statiuni[$i] = $statiune['nume'];
	$i++;
}

//get lista cu tipul categoriei (nr. margarete)
$row_set = get_all_margarete();
$i=1;
while($categorie = mysql_fetch_array($row_set)){
	$array_categorie_id[$i] = $categorie['id'];
	$array_categorie[$i] = $categorie['nume'];
	$i++;
}



$titlu_pag = "Pensiunile din Romania";


//--------------------------------------------------------------------
//setare variabile din template
//assign titlul pagini

$smarty->assign('titlu_pag', $titlu_pag);

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

smarty_display($page, $lang, $smarty);

//$smarty->display('inregistrare_pensiune_ro.tpl');

?>