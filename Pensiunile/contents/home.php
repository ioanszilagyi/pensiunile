<?php
//--------------------------------------------------------------------
//variabilele laute si setate in index.php

//echo "limba e: ".$GLOBALS['lang'];
$lang = $GLOBALS['lang'];
$file_name = $GLOBALS['file_name'];
$smarty = $GLOBALS['smarty'];

//--------------------------------------------------------------------

//get lista cu judete

$row_set = get_all_judete();
$i=1;
$array_judete_id[0] = 0;
$array_judete[0] = "-";

while($judet = mysql_fetch_array($row_set)){
	$array_judete_id[$i] = $judet['id'];
	$array_judete[$i] = $judet['name'];
	$i++;
}


//get lista cu zone_turistice

$row_set = get_all_zone_turistice();
$i=1;

$array_zone_turistice_id[0] = 0;
$array_zone_turistice[0] = "-";

while($zona_turistica = mysql_fetch_array($row_set)){
	$array_zone_turistice_id[$i] = $zona_turistica['id'];
	$array_zone_turistice[$i] = $zona_turistica['name'];
	$i++;
}

//get lista cu statiuni

$row_set = get_all_statiuni();
$i=1;
$array_statiuni_id[0] = 0;
$array_statiuni[0] = "-";

while($statiune = mysql_fetch_array($row_set)){
	$array_statiuni_id[$i] = $statiune['id'];
	$array_statiuni[$i] = $statiune['name'];
	$i++;
}

//get lista cu tipul categoriei (nr. margarete)
$row_set = get_all_margarete();
$i=1;

$array_categorie_id[0] = 0;
$array_categorie[0] = "-";

while($categorie = mysql_fetch_array($row_set)){
	$array_categorie_id[$i] = $categorie['id'];
	$array_categorie[$i] = $categorie['name'];
	$i++;
}


$titlu_pag = "Pensiunile din Romania";



//--------------------------------------------------------------------
//setare variabile din template
//assign titlul pagini

$smarty->assign('titlu_pag', $titlu_pag);

$smarty->assign('menu_file', "menu_".$lang.".tpl");

$array_categorie_id = array(0,1,2,3,4,5);
$array_categorie = array('-','*','**','***','****','*****');

$smarty->assign('id', $array_categorie_id);
$smarty->assign('names', $array_categorie);
$smarty->assign('selectedCategorie', "0");


$smarty->assign('idJudete', $array_judete_id);
$smarty->assign('namesJudete', $array_judete);
$smarty->assign('selectedJudete', "0");


$smarty->assign('idZonaTuristica', $array_zone_turistice_id);
$smarty->assign('namesZonaTuristica', $array_zone_turistice);
$smarty->assign('selectedZonaTuristica', "0");


$smarty->assign('idStatiune', $array_statiuni_id);
$smarty->assign('namesStatiune', $array_statiuni);
$smarty->assign('selectedStatiune', "0");

$smarty->assign('idCategorie', $array_categorie_id);
$smarty->assign('namesCategorie', $array_categorie);
$smarty->assign('selectedCategorie', "0");


//------------------------------------------------------------------

//afiseaza pagina (.TPL)
//echo $file_name."_".$lang;
smarty_display($file_name, $lang, $smarty);

?>