<?php
class Pensiune {
	
	public $id = 0;
	public $name = "Nume implicit";
	public $photo = "/photos/no-image.png";
	
	public $description = "Aceasta este o descriere scurta.";
	public $category = "2";
	
	public $address = "Str. Principala nr. 1";
	
	//public $contry = "Romania";
	public $jud = "Bihor";
	public $loc = "Oradea";
	public $zona_turistica = "Ardeal";
	
	public $phone = "+40 720 123456";
	public $email = "nume@pensiunile.ro";
	public $web = "www.pensiunile.ro";
	
	public $ratings = "70%(150 votes)"; // se va calula in procente %
	public $price_min = 50; // pret minim
	public $price_max = 100; // pret maxim
	public $nr_votes = 0;
        public $visits = 0;
	public function __construct(){
		
		
	}
	
}


?>