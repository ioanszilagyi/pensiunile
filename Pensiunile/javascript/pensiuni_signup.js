addLoadListener(init);

var name_pensiune;
var insert_pensiune_btn;
var description;
var contact_person;
var phone;
var email;

function init(){
	
	name_pensiune = document.getElementById('name_pensiune');
        description = document.getElementById('description');
	contact_person = document.getElementById('contact_person');
	phone = document.getElementById('phone');
	email = document.getElementById('email');
	

       	insert_pensiune_btn = document.getElementById('insert_pensiune_btn');
        insert_pensiune_btn.onclick = check_fields;

        //alert("id-ul campului e: " + name_pensiune.id +" iar numele este: "+name_pensiune.name);
	//alert("id-ul campului e: " + submit_btn.id +" iar numele este: "+submit_btn.name);
        
}


//insert_pensiune_btn.click() = check_fields();


function check_fields(){

    //alert("bau");

	if( name_pensiune.value == ""){
            alert('completeaza numele pensiunii');
            return false;
	} else if (description.value == ""){
            alert("completeaza descrierea");
            return false;
        }else if(contact_person.value == ""){
            alert("completeaza persoana de contact");
            return false;
        }
        alert("pensiunea se va inregistra");
        return true;
}





function createXHR(){
	try {
		xhr = new XMLHttpRequest();
	} catch (error)
	{
		try {
			xhr = new ActiveXObject('Microsoft.XMLHTTP');
		} catch (error)
		{
			xhr = null;
			alert('Your Browser does not support XMLHttpRequest!');
		}
	}
	return xhr;
}




function search_pensiune(){
	var pensiune;

	var	show_results = document.getElementById('show_results');//div-ul in care afisam rezultatele
	var search_field = document.getElementById('search_field');
	var selected_zona = document.getElementById('selected_zona');
	var selected_judet = document.getElementById('selected_judet');
	var selected_statiune = document.getElementById('selected_statiune');
	var selected_categorie = document.getElementById('selected_categorie');
	
	//alert("ai dat click pe search sa cauti : " + search_field.value);// + " in zona: "+ selected_zona +" in judetul: " + selected_judet +" in statiunea: " + selected_statiune +" in categoria: " + selected_categorie);	
	var xhr = createXHR();
	
	if (xhr != null){
		
		show_results.innerHTML = "<h3 align = 'center'>searching....</h3>";
		
		xhr.open('GET', 'contents/search.php?search_field='+search_field.value+'&selected_zona='+selected_zona.value+'&selected_judet='+selected_judet.value+'&selected_statiune='+selected_statiune.value+'&selected_categorie='+selected_categorie.value, true);
		//alert(selected_categorie.value);
		xhr.send(null);
		
		xhr.onreadystatechange = function () {
			//alert(xhr.readyState);
			
			if (xhr.readyState == 4) {
				//alert(xhr.status);
				if (xhr.status == 200 || xhr.status == 304){
					//update user inferface
					show_results.innerHTML = "";
					
					if (xhr.responseText) {
												
						pensiune = eval( "(" + xhr.responseText + ")" );
						
						//alert (pensiune.results[0].name.value);
						
						if(pensiune.results.length != 0){
							
							for(i=0; i<pensiune.results.length; i++){
								//construieste interfata
								show_results.appendChild(createDisplayTablePensiune(pensiune.results[i], pensiune.labels));
							
							};
						} else {alert ("Rezultatul intors nu are nici o inregistrare.")};
						
					} else {
						alert("e o problema cu formatul raspunsului");
			        }
				} else {
					//not ok
					alert('Nu s-a primit nici un raspuns....');
				}
				
			}
					
		};
		
		
	//alert("return false");		
		return false;
	}
	//alert("return true");
	return true;
}


function addLoadListener(fn) {
	
	//if(typeof window.addEventListener != null) {
	if(window.addEventListener) {	
		window.addEventListener('load', fn, false);
		
	//} else if(typeof document.addEventListener != undefined) {
		
		//document.addEventListener('load', fn, false);
		
	//} else if (typeof window.attachEvent != undefined){
	} else if (window.attachEvent){
		
		window.attachEvent('onload', fn);
		
	} else {
		var oldfn = window.onload;
		
		if(typeof window.onload != 'function') {
			window.onload = fn;
			
		} else {
			
			window.onload = function () {
				oldfn();
				fn();
				
			};
		}
	}
}







//Codul pentru pagina inregistrare_pensiune
//-------------------------------------------------------------------------

var xhr = false;
var myDataLabel = new Array();
var myDataValue = new Array();
var element = "";

function init1() {

	//alert('bine ai venit pe pagina inregistrare pensiune');
	//document.getElementById("searchField").onkeyup = searchSuggest;
	//document.getElementById("select_judet").onchange = get_localitati_judet;

	if (window.XMLHttpRequest) {
		xhr = new XMLHttpRequest();
	}
	else {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e) { }
		}
	}

	//get_judete_tara();	
}

function get_judete_tara(){
	element = "judet";
	var selected_tara = document.getElementById("tara").value;
	//alert(selected_tara);

	if (xhr) {
		xhr.onreadystatechange = setDataArray;
		xhr.open("GET", "includes/makeXML.php?name=get_judete&value="+selected_tara, true);
		xhr.send(null);
	}
	else {
		alert("Sorry, but I couldn't create an XMLHttpRequest");
	}

}

function get_localitati_judet(){
	element = "localitate";
	var selected_judet = document.getElementById("select_judet").value;
	//alert(selected_judet);

	if (xhr) {
		xhr.onreadystatechange = setDataArray;
		xhr.open("GET", "includes/makeXML.php?name=get_localitati&value="+selected_judet, true);
		xhr.send(null);
	}
	else {
		alert("Sorry, but I couldn't create an XMLHttpRequest");
	}

}


function setDataArray() {
	if (xhr.readyState == 4) {
		if (xhr.status == 200) {
			if (xhr.responseXML) {
				var allData = xhr.responseXML.getElementsByTagName("item");
				for (var i=0; i<allData.length; i++) {
					myDataLabel[i] = allData[i].getElementsByTagName("label")[0].firstChild;
					myDataValue[i] = allData[i].getElementsByTagName("value")[0].firstChild;
				}
			} else alert ("not a valid XML");
		}
		else {
			alert("There was a problem with the request " + xhr.status);
		}
	setData();
	}
	
}

function setData(){
	if(element == "judet"){
		setJudete();
	} else if(element == "localitate"){
		setLocalitati();
	}
}
function setJudete(){
	//document.getElementById("popups").innerHTML = "";
	//alert(myDataArray.length);
	document.getElementById("judet").innerHTML = "";
	for (var i=0; i<myDataLabel.length; i++) {
		var thisData = myDataLabel[i].nodeValue;
		var temp = document.createElement("option");
		temp.value = myDataValue[i].nodeValue
		temp.innerHTML = thisData;
		document.getElementById("judet").appendChild(temp);

	}
	myDataValue = [];
	myDataLabel = [];
	get_localitati_judet();//pentru a se incarca prima data lista cu localitati
}

function setLocalitati(){
	//alert("Afiseaza localitatile");
	document.getElementById("localitate").innerHTML = "";
	for (var i=0; i<myDataLabel.length; i++) {
		var thisData = myDataLabel[i].nodeValue;
		var temp = document.createElement("option");
		temp.value = myDataValue[i].nodeValue
		temp.innerHTML = thisData;
		document.getElementById("localitate").appendChild(temp);

	}
	myDataValue = [];
	myDataLabel = [];

}

