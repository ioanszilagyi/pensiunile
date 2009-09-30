<?php
//--------------------------------------------------------------------
//variabilele laute si setate in index.php

//echo "limba e: ".$GLOBALS['lang'];
$lang = $GLOBALS['lang'];
$file_name = $GLOBALS['file_name'];
$smarty = $GLOBALS['smarty'];

//$user_current = unserialize($_SESSION['user_current']);

//--------------------------------------------------------------------

$titlu_pag = "Pensiunile din Romania";

//setarea fisierelor css si javascript
$jsfiles = array('script.js','home.js');//, 'javascript/cookies.js');
$cssfiles = array('master.css', 'home.css');

//--------------------------------------------------------------------
//setare variabile din template
//assign titlul pagini

$smarty->assign('titlu_pag', $titlu_pag);

$smarty->assign('jsfiles', $jsfiles);
$smarty->assign('cssfiles', $cssfiles);

//------------------------------------------------------------------


if(isset($_GET['hostel']) || !(empty($_GET['hostel']))){ //TODO - verifica ca e numar... integer
    $hostel_id = $_GET['hostel'];
} else {
    $hostel_id = 1;

}
//get pensiune
$row_set = get_pensiune($hostel_id);

$i=1;

while($hostel = mysql_fetch_array($row_set)){
	$hostel_id[$i] = $hostel['id'];
	$hostel_name[$i] = $hostel['name'];
	$hostel_photo_file[$i] = $hostel['photo_file'];
	$hostel_category[$i] = $hostel['category'];
	$hostel_address[$i] = $hostel['address'];
	$hostel_localitate[$i] = $hostel['localitate'];
	$hostel_judet[$i] = $hostel['judet'];
	$hostel_phone[$i] = $hostel['phone'];
	$hostel_email[$i] = $hostel['email'];
	$hostel_web[$i] = $hostel['web'];
	$hostel_zip[$i] = $hostel['zip'];
	$hostel_price_min[$i] = $hostel['price_min'];
	$hostel_price_max[$i] = $hostel['price_max'];
	$i++;
}

$smarty->assign('id',$hostel_id[1]);
$smarty->assign('name',$hostel_name[1]);
$smarty->assign('photo_file',$hostel_photo_file[1]);
$smarty->assign('category',$hostel_category[1]);
$smarty->assign('address',$hostel_address[1]);
$smarty->assign('localitate',$hostel_localitate[1]);
$smarty->assign('judet',$hostel_judet[1]);
$smarty->assign('phone',$hostel_phone[1]);
$smarty->assign('email',$hostel_email[1]);
$smarty->assign('web',$hostel_web[1]);
$smarty->assign('zip',$hostel_zip[1]);
$smarty->assign('price_min',$hostel_price_min[1]);
$smarty->assign('price_max',$hostel_price_max[1]);
//---------------------

//afiseaza pagina (.TPL)
//echo $file_name."_".$lang;
smarty_display($file_name, $lang, $smarty);

?>