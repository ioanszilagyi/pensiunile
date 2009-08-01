<?php
//--------------------------------------------------------------------
//variabilele laute si setate in index.php

//echo "limba e: ".$GLOBALS['lang'];
$lang = $GLOBALS['lang'];
$file_name = $GLOBALS['file_name'];
$smarty = $GLOBALS['smarty'];
//--------------------------------------------------------------------
//ia datele despre userul curent din sesiune
$user_current = unserialize($_SESSION['user_current']);

$titlu_pag = "Sign In - Pensiunile din Romania";

//setarea fisierelor css si javascript
//$jsfiles = array('script.js');//, 'javascript/cookies.js');
$cssfiles = array('master.css', 'sign_forms.css');




//echo $username;
//echo $password;
//echo $authenticate;

//$authenticate = authenticate_user($username, $password);

function check_authenticate(){
    //verificam daca exista userul si se autentifica
    
    return true;
}

if(isset($_POST['authenticate'])){

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $authenticate = $_POST['authenticate'];

    if(check_authenticate()){

    $user_current->name = $user_name;
    $user_current->id = 1;
    $_SESSION['user_current'] = serialize($user_current);


    //$user_current = unserialize($_SESSION['user_current']);

        //$user_current->name = $user_name;

        header ('Location:?page=4'); 
    }
}


//--------------------------------------------------------------------
//setare variabile din template
//assign titlul pagini

$smarty->assign('titlu_pag', $titlu_pag);

$smarty->assign('user', $user_current->name);

$smarty->assign('jsfiles', $jsfiles); 
$smarty->assign('cssfiles', $cssfiles); 

$smarty->assign('menu_file', "menu_".$lang.".tpl");

//------------------------------------------------------------------
//afiseaza pagina (.TPL)

smarty_display($file_name, $lang, $smarty);

//$smarty->display('autentificare_en.tpl');

?>