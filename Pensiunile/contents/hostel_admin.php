<?php
//--------------------------------------------------------------------
//variabilele laute si setate in index.php

//echo "limba e: ".$GLOBALS['lang'];
$lang = $GLOBALS['lang'];
$file_name = $GLOBALS['file_name'];
$smarty = $GLOBALS['smarty'];
//$user_current = $GLOBALS['user_current'];

$user_current = unserialize($_SESSION['user_current']);

if($user_current->id == 0 || $user_current->id == ""){
    
         header ('Location:?page=1');
    
}

//echo $user_current->name;

//--------------------------------------------------------------------
//get lista cu statiuni

$row_set = get_all_statiuni();
$i=0;
$array_statiuni_id[$i] = "0";
$array_statiuni[$i] = "------------------------------";
$i=1;
while($statiune = mysql_fetch_array($row_set)){
	$array_statiuni_id[$i] = $statiune['id'];
	$array_statiuni[$i] = $statiune['name'];
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
	$array_zone_turistice[$i] = $zona_turistica['name'];
	$i++;
}





//--------------------------------------------------------------------
//get lista cu judete

$row_set = get_all_judete();
$i=0;
$array_judete_id[$i] = "0";
$array_judete[$i] = "--------------";
$i=1;
while($judet = mysql_fetch_array($row_set)){
	$array_judete_id[$i] = $judet['id'];
	$array_judete[$i] = $judet['name'];
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
	$array_localitati[$i] = $localitate['name'];
	$i++;
}

if(isset($_POST['insert_pensiune_btn'])){

$name = $_POST['name'];
$category = $_POST['category'];
$description = $_POST['description'];
$address = $_POST['address'];
$postal_code = $_POST['postal_code'];
$localitate_id = $_POST['localitate_id'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$web = $_POST['web'];
$insert_pensiune_btn = $_POST['insert_pensiune_btn'];
} else $insert_pensiune_btn = "";

//echo "valoarea pensiune_btn este: ".$insert_pensiune_btn;

if($insert_pensiune_btn !=""){
	//comanda de inregistrare pensiune. Ar trebui facut inainte niste verificari si in php
        //insert_pensiune($name, $category, $description, $address, $postal_code, $localitate_id, $phone, $email, $web);
        
        //$_GET['page']=8;

        header ('Location:?page=8');
}

$titlu_pag = "Inregistrare pensiuni";

//setarea fisierelor css si javascript
$jsfiles = array('pensiuni_signup.js');//, 'javascript/cookies.js');
$cssfiles = array('master.css', 'sign_forms.css');
//userul curent
//$smarty->assign('user', $user_current->name);

//$nume_pensiune = "numele pensiunii/pension name";
//$categoria = "categoria/catogory";

//--------------------------------------------------------------------
//setare variabile din template
//assign titlul pagini

$smarty->assign('titlu_pag', $titlu_pag);

$smarty->assign('jsfiles', $jsfiles); 
$smarty->assign('cssfiles', $cssfiles); 

$array_categorie_id = array(1,2,3,4,5);
$array_categorie = array('1 margareta','2 margarete','3 margarete','4 margarete','5 margarete');

$smarty->assign('id', $array_categorie_id);
$smarty->assign('names', $array_categorie);
$smarty->assign('selectedCategorie', "0");


$smarty->assign('idStatiuni', $array_statiuni_id);
$smarty->assign('namesStatiuni', $array_statiuni);
$smarty->assign('selectedStatiuni', "0");


$smarty->assign('idZoneTuristice', $array_zone_turistice_id);
$smarty->assign('namesZoneTuristice', $array_zone_turistice);
$smarty->assign('selectedZoneTuristice', "0");



$smarty->assign('idJudete', $array_judete_id);
$smarty->assign('namesJudete', $array_judete);
$smarty->assign('selectedJudete', "0");


$smarty->assign('idLocalitate', $array_localitati_id);
$smarty->assign('namesLocalitate', $array_localitati);
$smarty->assign('selectedLocalitate', "0");


//------------------------------------------------------------------

//afiseaza pagina (.TPL)

smarty_display($file_name, $lang, $smarty);


//$smarty->display('inregistrare_pensiune_ro.tpl');

?>