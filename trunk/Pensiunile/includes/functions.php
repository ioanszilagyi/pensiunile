<?php
//functia de verificare a limbii setate in ordinea: variabila GET, cookie, setari browser.

function get_language(){
	if (isset($_GET['lang']) && !empty($_GET['lang'])){
		//setcookie("lang", $_GET['lang']);
		$lang = $_GET['lang'];
	} else {
		if (isset($_COOKIE['lang']) && !empty($_COOKIE['lang'])){
			$lang = $_COOKIE['lang']; // se va lua limba din cookie, care se seteaza cu javascript
		} else {
			$lang_detect = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
			$lang = substr($lang_detect, 0, 2);
			//echo $lang;
			//$lang = "en";// limba implicita, in caz ca site-ul nu exista �n limba clientului.
		}	
	}
	return $lang;
};

//--------------------------------------------------------------------------
//functia de afisare smarty (.TPL)
function smarty_display($file_name, $lang, $smarty){
	//echo $page."_".$lang.".tpl";
	if(file_exists(TEMPLATES.$file_name."_".$lang.".tpl")){
		$smarty->display($file_name."_".$lang.".tpl");
		
	} else {
		echo "Template-ul nu exista";
		//$smarty->display($page."_en.tpl");
	}
}

//--------------------------------------------------------------------------
//functia de selectare a paginii cerute cautata in baza de date

function get_file_data($file_id){
	if(is_int($file_id)){
		global $connection;
		$query = "SELECT * FROM `cnt_pages` WHERE id='{$file_id}' LIMIT 1";
		$row_set = mysql_query($query, $connection);
		confirm_query($row_set);
		$file_data = mysql_fetch_array($row_set);
		//$file_name = $file_data['file'];
		//return $file_name;
		
	} else {
		echo "Is not a number...";
	}
	return $file_data;
}

//--------------------------------------------------------------------------
//functia de selectare a paginii cerute (.PHP)

function require_contents_file($file){
	if(file_exists(CONTENTS.$file.".php")){
		require_once(CONTENTS.$file.".php");
	} else {
		echo "Pagina nu exista!!!";
	}
}


//function goto_page !!! is not ready yet

function goto_page($id_page){
    $file_data = get_file_data($id_page);
    require_contents_file($file_data['name']);

    header ('Location: ');
    //header ('Location:http://www.google.com');

}

//--------------------------------------------------------------------------
//functia de confirm la query

function confirm_query($result_set){
	if(!$result_set){
		die("Database query failed: ".mysql_error());
	}
}

//functia de autentificare user, care va intoarce boolean
function authenticate_user($username, $password){
    global $connection;
    
    $query =  "SELECT * FROM `cnt_users` WHERE email='{$username}' AND password='{$password}' LIMIT 1";

    $row_set = mysql_query($query, $connection);
    confirm_query($row_set);

    $user = mysql_fetch_object($row_set, "User");
    //$user = mysql_fetch_array($row_set);

    //intoarce Userul ca si un obiect de tip User.
    return $user;

    //return $row_set;
}

function get_role_for_user($user_id){
    global $connection;

}

//functie pentru verificarea drepturilor userurlui pentru stabilirea meniului
function get_menu($menu_id, $lang){
    global $connection;

    $query =  "
        SELECT
            `cnt_menu_links`.`page_id` AS page_id,
            `cnt_pages`.`title_".$lang."` AS label
        FROM `cnt_menu_links`
        LEFT JOIN `cnt_pages` ON `cnt_pages`.`id` = `cnt_menu_links`.`page_id`
        WHERE menu_id='{$menu_id}'
        ORDER BY `cnt_menu_links`.`order` ASC

    ";

    $row_set = mysql_query($query, $connection);
    confirm_query($row_set);

    $menu_array = array();

    while($menu = mysql_fetch_array($row_set)){
        $menu_array[$menu['label']] = $menu['page_id'];
    }

    return $menu_array;
}


//--------------------------------------------------------------------------
//get all judete

function get_all_judete(){
global $connection;
$query = 'SELECT * FROM `cnt_judete`';// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}

//--------------------------------------------------------------------------
//get judete by id_tara

function get_judete_tara($selected_tara){
global $connection;
$query = "SELECT * FROM `cnt_judete` WHERE country_id='{$selected_tara}' ORDER BY name ASC";// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}


//--------------------------------------------------------------------------
//get localitati by id_judet

function get_localitati_judet($selected_judet){
global $connection;
$query = "SELECT * FROM `cnt_localitati` WHERE judet_id='{$selected_judet}' ORDER BY name ASC";// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}
//--------------------------------------------------------------------------
//get all zone turistice

function get_all_zone_turistice(){
global $connection;
$query = 'SELECT * FROM `cnt_zone_turistice`';// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}
//--------------------------------------------------------------------------
//get all statiuni

function get_all_statiuni(){
global $connection;
$query = 'SELECT * FROM `cnt_statiuni`';// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}

//get all margarete

function get_all_margarete(){
global $connection;
$query = 'SELECT * FROM `cnt_categorii`';// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}

//--------------------------------------------------------------------------

//get all pensiuni

function get_all_pensiuni(){
global $connection;
$query = 'SELECT * FROM `cnt_pensiuni`';// LIMIT 0, 10 ';
$row_set = mysql_query($query, $connection);
confirm_query($row_set);
return $row_set;
}

//--------------------------------------------------------------------------

//LEFT JOIN (SELECT * FROM (SELECT pensiune_id, AVG(vot) AS rating, COUNT(pensiune_id) AS nr_votes FROM cnt_rating_pensiune GROUP BY pensiune_id) AS pensiuni_ratings) AS tabel_pensiuni_ratings ON `tabel_pensiuni_ratings`.`pensiune_id`=`cnt_pensiuni`.`id`


//get pensiune where....

function get_pensiuni($search_field, $selected_zona = "0", $selected_judet = "0", $selected_statiune = "0", $selected_categorie = "0"){
global $connection;
	 $query = "SELECT
			`cnt_pensiuni`.`id` AS id,
			`cnt_pensiuni`.`name` AS name,
			`cnt_photos`.`file` AS photo_file,
			`cnt_photos`.`title` AS photo_title,
			`cnt_pensiuni`.`category` AS category,
			`cnt_pensiuni`.`description` AS description,
			`cnt_pensiuni`.`price_min` AS price_min,
			`cnt_pensiuni`.`price_max` AS price_max,
			`cnt_pensiuni`.`address` AS address,
			`cnt_pensiuni`.`phone` AS phone,
			`cnt_pensiuni`.`email` AS email,
			`cnt_localitati`.`name` AS localitate,
			`cnt_judete`.`name` AS judet,
			`cnt_zone_turistice`.`name` AS zona_turistica,
			`pensiuni_ratings`.`rating` AS ratings,
			`pensiuni_ratings`.`nr_votes` AS nr_votes,
			`cnt_views_pensiune`.`visits` AS visits,
                        `cnt_pensiuni`.`web` AS web
			
			FROM `cnt_pensiuni`
			
			LEFT JOIN `cnt_pensiuni_detalii` ON `cnt_pensiuni`.`id` = `cnt_pensiuni_detalii`.`id`
			LEFT JOIN `cnt_views_pensiune` ON `cnt_pensiuni`.`id` = `cnt_views_pensiune`.`id`

                        LEFT JOIN `cnt_photos` ON `cnt_pensiuni`.`photo_id` = `cnt_photos`.`id`
			LEFT JOIN `cnt_users` ON `cnt_pensiuni`.`user_id` = `cnt_users`.`id`
			
			LEFT JOIN `cnt_localitati` ON `cnt_pensiuni`.`localitate_id` = `cnt_localitati`.`id`
			LEFT JOIN `cnt_judete` ON `cnt_localitati`.`judet_id` = `cnt_judete`.`id`			
			
			LEFT JOIN `cnt_statiuni` ON `cnt_pensiuni_detalii`.`statiune_id` = `cnt_statiuni`.`id`
			LEFT JOIN `cnt_zone_turistice` ON `cnt_pensiuni_detalii`.`zona_turistica_id` = `cnt_zone_turistice`.`id`

			LEFT JOIN (SELECT pensiune_id, AVG(vot) AS rating, COUNT(pensiune_id) AS nr_votes FROM cnt_rating_pensiune GROUP BY pensiune_id) AS pensiuni_ratings ON `pensiuni_ratings`.`pensiune_id`=`cnt_pensiuni`.`id`

			WHERE `cnt_pensiuni`.`name` LIKE '%{$search_field}%'";
			
			if ( $selected_zona != "0") {
				$query .= " AND `cnt_zone_turistice`.`id`='{$selected_zona}'"; 
			};
			if ( $selected_judet != "0") {
				$query .= " AND `cnt_judete`.`id`='{$selected_judet}'"; 
			};
			if ( $selected_statiune != "0") {
				$query .= " AND `cnt_statiuni`.`id`='{$selected_statiune}'"; 
			};
			if ($selected_categorie != "0") {
				$query .= " AND `cnt_pensiuni`.`category`='{$selected_categorie}'"; 
			};
			$query .= "LIMIT 0, 30"; // prima cifra starting from, nr de rezultate intoarse.
                        
	$row_set = mysql_query($query, $connection);
	confirm_query($row_set);
	return $row_set;
}

function insert_pensiune($name, $category, $description, $address, $postal_code, $localitate_id, $phone, $email, $web){
	global $connection;
	
	//echo "numele pensiuni e: ".$name; 
	
	$query = "INSERT INTO cnt_pensiuni (name, category, description, address, postal_code, localitate_id, phone, email, web) VALUES
	('{$name}', '{$category}', '{$description}', '{$address}', '{$postal_code}', '{$localitate_id}', '{$phone}', '{$email}', '{$web}')";
	
	$results = mysql_query($query, $connection);
	if($results){
		//succes
	} else {
		//error
		echo "a fost o eroare";
		echo mysql_error();
	}

}




function get_pensiuni_name($name) {
	global $connection;
	 $query = "SELECT
			`cnt_pensiuni`.`id` AS id,
			`cnt_pensiuni`.`name` AS name,

			`cnt_photos`.`file` AS photo_file,
			
			`cnt_pensiuni`.`category` AS category,
			
			`cnt_pensiuni`.`address` AS address,

			`cnt_localitati`.`name` AS localitate,
			`cnt_judete`.`name` AS judet,			

			`cnt_pensiuni`.`phone` AS phone,
			`cnt_pensiuni`.`email` AS email,
			`cnt_pensiuni`.`web` AS web
			
			FROM `cnt_pensiuni`

			LEFT JOIN `cnt_photos` ON `cnt_pensiuni`.`photo_id` = `cnt_photos`.`id`
			
			LEFT JOIN `cnt_localitati` ON `cnt_pensiuni`.`localitate_id` = `cnt_localitati`.`id`
			LEFT JOIN `cnt_judete` ON `cnt_localitati`.`judet_id` = `cnt_judete`.`id`			

			LEFT JOIN `cnt_users` ON `cnt_pensiuni`.`user_id` = `cnt_users`.`id`
			
			WHERE `cnt_pensiuni`.`name` LIKE '%{$name}%'";

	$row_set = mysql_query($query, $connection);
	confirm_query($row_set);
	return $row_set;
}

?>