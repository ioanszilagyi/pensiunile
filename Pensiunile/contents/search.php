<?php

//require_once('../vo/pensiune.php');
require_once('../includes/connection.php');
require_once('../includes/functions.php');

require_once('../vo/pensiune.php');

$lang = get_language();

$search_field = $_GET['search_field'];
$selected_zona = $_GET['selected_zona'];
$selected_judet = $_GET['selected_judet'];
$selected_categorie = $_GET['selected_categorie'];


//$row_set = get_pensiuni($search_field, $selected_zona, $selected_judet, $selected_categorie);

$row_set = get_pensiuni_name($search_field);

assign_values($row_set, $lang);

//header("Content-type: text/json");

function assign_values($row_set, $lang){
	if($lang == "ro") {
	echo '{
    "labels": {
        "id": "id",
        "main_photo": "Poze",
        "name": "Nume",
		"description":"Descriere",
        "category": "Categorie",
		"address":"Adresa:",
        "zona_turistica": "Zona turistica:",
        "jud": "Judetul",
        "loc": "Localitatea",
        "phone": "Telefon:",
        "mail": "e-mail:",
        "web": "Web",
		"ratings":"Rata:",
        "price": "Plaja de preturi:",
    },
    "results": [';
	} else {	
		echo '{
	    "labels": {
	        "id": "id",
	        "main_photo": "Photos",
	        "name": "Name",
			"description":"Description",
	        "categ": "Category",
			"address":"Address:",
	        "zona_turistica": "Turistic Area:",
	        "jud": "County",
	        "loc": "Locality",
	        "phone": "Phone:",
	        "mail": "e-mail:",
	        "web": "Web address",
			"ratings":"Ratings:",
	        "price": "Price Range:",
	    },
	    "results": [';
	};
	$i=1;
	
	while($pensiune = mysql_fetch_array($row_set)){
		
		if($i>1){echo ",";} 
		
		$pensiune[$i] = new Pensiune;
		
		$pensiune[$i]->id = $pensiune['id'];
		$pensiune[$i]->name = $pensiune['name'];
		$pensiune[$i]->photo = $pensiune['photo_file'];
		
		$pensiune[$i]->category = $pensiune['category'];
		
		$pensiune[$i]->address = $pensiune['address'];
		
		$pensiune[$i]->jud = $pensiune['judet'];
		$pensiune[$i]->loc = $pensiune['localitate'];
		
		//$pensiune[$i]->zona_turistica = "Zona Turistica";
		
		$pensiune[$i]->phone = $pensiune['phone'];
		$pensiune[$i]->email = $pensiune['email'];
		
		$pensiune[$i]->web = $pensiune['web'];
		
		//$pensiune[$i]->ratings = $pensiune['ratings'];
		//$pensiune[$i]->price = $pensiune['price'];
		echo json_encode($pensiune[$i]);
		$i++;
		
	}
	echo '] }';
	
	
}

/*

$pensiune = new Pensiune;

$pensiune->id = 1;
$pensiune->main_photo = "images/imagine-lipsa.png";
$pensiune->name = "Pensiunea Transilvania";
$pensiune->categ = 3;
$pensiune->zt = "Zona Turistica";
$pensiune->jud = "Bihor";
$pensiune->loc = "Oradea";
$pensiune->tel = "+40712345678";
$pensiune->mail = "contact@pensiunile.ro";
$pensiune->web = "www.pensiunile.ro";
$pensiune->pret = "70 RON";
$pensiune->disp = "Disponibil";


header("Content-type: text/json");


//echo json_encode($pensiune);

echo '{
    "labels": {
        "id": "ID",
        "main_photo": "Imagine",
        "name": "Nume",
        "categ": "Categorie",
        "zt": "Zona turistica",
        "jud": "Judetul",
        "loc": "Localitatea",
        "tel": "Telefon",
        "mail": "e-mail",
        "web": "Web",
        "pret": "Pret",
        "disp": "Disponibilitate" 
    },
    "results": [
        {
            "id": "1",
            "main_photo": "images/imagine-lipsa.png",
            "name": "Pensiunea Transilvania 1",
            "categ": "4",
            "zt": "zona mea",
            "jud": "bihor",
            "loc": "oradea",
            "tel": "1234546",
            "mail": "mail@eu.com",
            "web": "www.pens.ro",
            "pret": "70 RON",
            "disp": "disponibil" 
        },
        {
            "id": "2",
            "main_photo": "images/imagine-lipsa.png",
            "name": "Pensiunea Transilvania 2",
            "categ": "4",
            "zt": "zona mea",
            "jud": "bihor",
            "loc": "oradea",
            "tel": "1234546",
            "mail": "mail@eu.com",
            "web": "www.pens.ro",
            "pret": "120 RON",
            "disp": "disponibil" 
        },
        {
            "id": "3",
            "main_photo": "images/imagine-lipsa.png",
            "name": "Pensiunea Transilvania 3",
            "categ": "4",
            "zt": "zona mea",
            "jud": "bihor",
            "loc": "oradea",
            "tel": "1234546",
            "mail": "mail@eu.com",
            "web": "www.pens.ro",
            "pret": "150 RON",
            "disp": "disponibil" 
        } 
    ] 
}';


/*

header("Content-type: text/xml");
echo "<?xml version=\"1.0\"?><pensiuni xml:lang=\"EN\">";


$i=1;
while($pensiune = mysql_fetch_array($row_set)){
	//$array_pensiune_id[$i] = $pensiune['id'];
	//$array_pensiune_nume[$i] = $pensiune['nume'];
	//$array_pensiune_descriere[$i] = $pensiune['descriere'];
	//$array_pensiune_localitate[$i] = $pensiune['id_localitate'];
	
	echo "<pensiune>";
	echo "<id>".$pensiune['id']."</id>";
	echo "<nume>".$pensiune['nume']."</nume>";
	echo "<descriere>".$pensiune['descriere']."</descriere>";
	echo "</pensiune>";

	
	$i++;
}

echo "</pensiuni>";
*/
?>