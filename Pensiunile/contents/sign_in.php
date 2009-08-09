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

function check_authenticate($user_name, $password){
    //verificam daca exista userul si se autentifica
    $user_current = authenticate_user($user_name, $password);

    if($user_current){

        $_SESSION['user_current'] = serialize($user_current);
        $_SESSION['authenticated'] = true;

        header ('Location:?page=2');

    } else {
        global $smarty;

        $smarty->assign('failed_message', "Try Again");
    }
    
    //return true;
}

//$authenticate = $_POST['authenticate'];

if(isset($_POST['authenticate'])){

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    check_authenticate($user_name, $password);

    
//    if(check_authenticate($user_name, $password)){
//
//
//    //$user_current = unserialize($_SESSION['user_current']);
//
//        //$user_current->name = $user_name;
//
        
//    }
}


//--------------------------------------------------------------------
//setare variabile din template
//assign titlul pagini

$smarty->assign('titlu_pag', $titlu_pag);

//$smarty->assign('user', $user_current->name);

//$smarty->assign('jsfiles', $jsfiles);
$smarty->assign('cssfiles', $cssfiles); 

//------------------------------------------------------------------
//afiseaza pagina (.TPL)

smarty_display($file_name, $lang, $smarty);

//$smarty->display('autentificare_en.tpl');

?>