<?php
//--------------------------------------------------------------------
//variabilele laute si setate in index.php

//echo "limba e: ".$GLOBALS['lang'];
$lang = $GLOBALS['lang'];
$smarty = $GLOBALS['smarty'];
$file_name = $GLOBALS['file_name'];

//--------------------------------------------------------------------
//get lista cu statiuni

/*$row_set = get_all_statiuni();
$i=0;
$array_statiuni_id[$i] = "0";
$array_statiuni[$i] = "------------------------------";
$i=1;
while($statiune = mysql_fetch_array($row_set)){
	$array_statiuni_id[$i] = $statiune['id'];
	$array_statiuni[$i] = $statiune['nume'];
	//echo $array_statiuni[$i];
	//echo $statiune['nume'];
	$i++;
}


//--------------------------------------------------------------------
//get lista cu zone turistice

$row_set = get_all_zone_turistice();
$i=0;
$array_zone_turistice_id[$i] = "0";
$array_zone_turistice[$i] = "------------------------------";
$i=1;
while($zona_turistica = mysql_fetch_array($row_set)){
	$array_zone_turistice_id[$i] = $zona_turistica['id'];
	$array_zone_turistice[$i] = $zona_turistica['nume'];
	$i++;
}



/*

//--------------------------------------------------------------------
//get lista cu judete

$row_set = get_all_judete();
$i=0;
$array_judete_id[$i] = "0";
$array_judete[$i] = "------------------------------";
$i=1;
while($judet = mysql_fetch_array($row_set)){
	$array_judete_id[$i] = $judet['id'];
	$array_judete[$i] = $judet['nume'];
	$i++;
}

//--------------------------------------------------------------------
//get lista cu localitati pentru un judet selectat

$selected_judet = 6;

$row_set = get_localitati_judet($selected_judet);

$i=0;
$array_localitati_id[$i] = "0";
$array_localitati[$i] = "------------------------------";
$i=1;

while($localitate = mysql_fetch_array($row_set)){
	$array_localitati_id[$i] = $localitate['id'];
	$array_localitati[$i] = $localitate['nume'];
	$i++;
}
*/

//$nume_pensiune = "numele pensiunii/pension name";
//$categoria = "categoria/catogory";

//--------------------------------------------------------------------
//setare variabile din template
//assign titlul pagini
/*$array_categorie_id = array(1,2,3,4,5);
$array_categorie = array('1 margareta','2 margarete','3 margarete','4 margarete','5 margarete');

$smarty->assign('id', $array_categorie_id);
$smarty->assign('names', $array_categorie);
$smarty->assign('selectedCategorie', "2");


$smarty->assign('idStatiuni', $array_statiuni_id);
$smarty->assign('namesStatiuni', $array_statiuni);
$smarty->assign('selectedStatiuni', "0");


$smarty->assign('idZoneTuristice', $array_zone_turistice_id);
$smarty->assign('namesZoneTuristice', $array_zone_turistice);
$smarty->assign('selectedZoneTuristice', "0");


/*
$smarty->assign('idJudete', $array_judete_id);
$smarty->assign('namesJudete', $array_judete);
$smarty->assign('selectedJudete', "0");


$smarty->assign('idLocalitate', $array_localitati_id);
$smarty->assign('namesLocalitate', $array_localitati);
$smarty->assign('selectedLocalitate', "0");
*/

//------------------------------------------------------------------

//afiseaza pagina (.TPL)

smarty_display($file_name, $lang, $smarty);


//$smarty->display('inregistrare_pensiune_ro.tpl');

?>