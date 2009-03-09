//window.onload = initAll;

addLoadListener(init);
addLoadListener(initAll);

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

function init(){
	
	
	var search_btn = document.getElementById('search_btn');
	search_btn.onclick = search_pensiune;//(search_field);//search_field, selected_zona, selected_judet, selected_statiune, selected_categorie);
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
		
		xhr.open('GET', 'contents/search.php?search_field=' + search_field.value + '&selected_zona='+ selected_zona.value +'&selected_judet='+ selected_judet.value + '&selected_statiune='+ selected_statiune.value  +'&selected_categorie = ' + selected_categorie.value, true);
		
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
						
						//alert (pensiune.results[0]);
						
						for(i=0; i<pensiune.results.length; i++){
						
							createDisplayTablePensiune(pensiune.results[i]);
						
						};
						
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

function createDisplayTablePensiune(pensiune_curenta){
	var	show_results = document.getElementById('show_results');//div-ul in care afisam rezultatele
	
	//alert(pensiune_curenta.name);
	
	var table = document.createElement('table');
	
	table.setAttribute('width','1000');
	table.setAttribute('class','afisare_cautare');
	
    var tr = document.createElement('tr');
    
    table.appendChild(tr);
    
  //coloana 0--------------------------------------------------
    
    var td_img = document.createElement('td');
    var img = document.createElement('img');
    img.src = pensiune_curenta.main_photo;
    img.alt = pensiune_curenta.name;
    
    tr.appendChild(td_img);
    td_img.appendChild(img);
    
  //coloana 1--------------------------------------------------
    
    var td1 = document.createElement('td');
    var div1 = document.createElement('div');
    var table1 = document.createElement('table');
    
    tr.appendChild(td1);
    td1.appendChild(div1);
    div1.appendChild(table1);
    div1.setAttribute('class','despartire_informatii');
    
    var tr11 = document.createElement('tr');
	var tr12 = document.createElement('tr');
	
	table1.appendChild(tr11);
	table1.appendChild(tr12);
	
	var td_name = document.createElement('td');
	var td_name_value = document.createElement('td');
	
	tr11.appendChild(td_name);
	tr11.appendChild(td_name_value);
	
	var td_categ = document.createElement('td');
	var td_categ_value = document.createElement('td');
	
	tr12.appendChild(td_categ);
	tr12.appendChild(td_categ_value);
	
	td_name.innerHTML = "Pensiunea: ";
	td_categ.innerHTML = "Categoria: ";
	
	td_name.setAttribute('class','text');
	td_categ.setAttribute('class','text');
	
	td_name_value.innerHTML = pensiune_curenta.name;
	td_categ_value.innerHTML = pensiune_curenta.categ+" margarete.";
	
	td_name_value.setAttribute('class','titlu_pensiune');
	td_categ_value.setAttribute('class','text_evidentiat');

	//coloana 2--------------------------------------------------
	
    var td2 = document.createElement('td');
    var div2 = document.createElement('div');
    var table2 = document.createElement('table');
    
    tr.appendChild(td2);
    td2.appendChild(div2);
    div2.appendChild(table2);
    div2.setAttribute('class','despartire_informatii');
    
    var tr21 = document.createElement('tr');
	var tr22 = document.createElement('tr');
	var tr23 = document.createElement('tr');
	
	table2.appendChild(tr21);
	table2.appendChild(tr22);
	table2.appendChild(tr23);
	
	var td_zt = document.createElement('td');
	var td_zt_value = document.createElement('td');
	
	tr21.appendChild(td_zt);
	tr21.appendChild(td_zt_value);
	
	var td_jud = document.createElement('td');
	var td_jud_value = document.createElement('td');
	
	tr22.appendChild(td_jud);
	tr22.appendChild(td_jud_value);
	
	var td_loc = document.createElement('td');
	var td_loc_value = document.createElement('td');
	
	tr23.appendChild(td_loc);
	tr23.appendChild(td_loc_value);
		
	td_zt.innerHTML = "Zona turistica: ";
	td_jud.innerHTML = "Judetul: ";
	td_loc.innerHTML = "Localitatea: ";
	
	td_zt.setAttribute('class','text');
	td_jud.setAttribute('class','text');
	td_loc.setAttribute('class','text')
	
	td_zt_value.innerHTML = pensiune_curenta.zt;
	td_jud_value.innerHTML = pensiune_curenta.jud;
	td_loc_value.innerHTML = pensiune_curenta.loc;
	
	td_zt_value.setAttribute('class','text_link');
	td_jud_value.setAttribute('class','text_link');
	td_loc_value.setAttribute('class','text_link');

	//coloana 3--------------------------------------------------
	
    var td3 = document.createElement('td');
    var div3 = document.createElement('div');
    var table3 = document.createElement('table');
    
    tr.appendChild(td3);
    td3.appendChild(div3);
    div3.appendChild(table3);
    div3.setAttribute('class','despartire_informatii');
    
    var tr31 = document.createElement('tr');
	var tr32 = document.createElement('tr');
	var tr33 = document.createElement('tr');
	
	table3.appendChild(tr31);
	table3.appendChild(tr32);
	table3.appendChild(tr33);
	
	var td_tel = document.createElement('td');
	var td_tel_value = document.createElement('td');
	
	tr31.appendChild(td_tel);
	tr31.appendChild(td_tel_value);
	
	var td_mail = document.createElement('td');
	var td_mail_value = document.createElement('td');
	
	tr32.appendChild(td_mail);
	tr32.appendChild(td_mail_value);
	
	var td_web = document.createElement('td');
	var td_web_value = document.createElement('td');
	
	tr33.appendChild(td_web);
	tr33.appendChild(td_web_value);
		
	td_tel.innerHTML = "Telefon: ";
	td_mail.innerHTML = "Mail: ";
	td_web.innerHTML = "Web: ";
	
	td_tel.setAttribute('class','text');
	td_mail.setAttribute('class','text');
	td_web.setAttribute('class','text')
	
	td_tel_value.innerHTML = pensiune_curenta.tel;
	td_mail_value.innerHTML = pensiune_curenta.mail;
	td_web_value.innerHTML = pensiune_curenta.web;
	
	td_tel_value.setAttribute('class','text_evidentiat');
	td_mail_value.setAttribute('class','text_link');
	td_web_value.setAttribute('class','text_link');

	
//coloana 4--------------------------------------------------
	
    var td4 = document.createElement('td');
    var div4 = document.createElement('div');
    var table4 = document.createElement('table');
    
    tr.appendChild(td4);
    td4.appendChild(div4);
    div4.appendChild(table4);
    div4.setAttribute('class','despartire_informatii');
    
    var tr41 = document.createElement('tr');
	var tr42 = document.createElement('tr');
	var tr43 = document.createElement('tr');
	
	table4.appendChild(tr41);
	table4.appendChild(tr42);
	table4.appendChild(tr43);
	
	var td_pret = document.createElement('td');
	var td_pret_value = document.createElement('td');
	
	tr41.appendChild(td_pret);
	tr41.appendChild(td_pret_value);
	
	var td_disp = document.createElement('td');
	var td_disp_value = document.createElement('td');
	
	tr42.appendChild(td_disp);
	tr42.appendChild(td_disp_value);
		
	td_pret.innerHTML = "Pret: ";
	td_disp.innerHTML = "Disponibilitate: ";
	
	td_pret.setAttribute('class','text');
	td_disp.setAttribute('class','text');
	
	td_pret_value.innerHTML = pensiune_curenta.pret;
	td_disp_value.innerHTML = pensiune_curenta.disp;
	
	td_pret_value.setAttribute('class','text_evidentiat');
	td_disp_value.setAttribute('class','text_evidentiat');
	
	//afisam tot tabelul in show_results
    show_results.appendChild(table);
    

}


function addLoadListener(fn) {
	
	if(typeof window.addEventListener != null) {
		
		window.addEventListener('load', fn, false);
		
	} else if(typeof document.addEventListener != undefined) {
		
		document.addEventListener('load', fn, false);
	} else if (typeof window.attachEvent != undefined){
		
		window.attachEvent('load', fn);
		
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

function initAll() {

	//document.getElementById("searchField").onkeyup = searchSuggest;
	document.getElementById("judet").onchange = get_localitati_judet;

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

	get_judete_tara();	
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
	var selected_judet = document.getElementById("judet").value;
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

function searchSuggest() {
	var str = document.getElementById("searchField").value;
	document.getElementById("searchField").className = "";
	if (str != "") {
		document.getElementById("popups").innerHTML = "";
	
		for (var i=0; i<statesArray.length; i++) {
			var thisState = statesArray[i].nodeValue;
	
			if (thisState.toLowerCase().indexOf(str.toLowerCase()) == 0) {
				var tempDiv = document.createElement("div");
				tempDiv.innerHTML = thisState;
				tempDiv.onclick = makeChoice;
				tempDiv.className = "suggestions";
				document.getElementById("popups").appendChild(tempDiv);
			}
		}
		var foundCt = document.getElementById("popups").childNodes.length;
		if (foundCt == 0) {
			document.getElementById("searchField").className = "error";
		}
		if (foundCt == 1) {
			document.getElementById("searchField").value = document.getElementById("popups").firstChild.innerHTML;
			document.getElementById("popups").innerHTML = "";
		}
	}
}

function makeChoice(evt) {
	var thisDiv = (evt) ? evt.target : window.event.srcElement;
	document.getElementById("searchField").value = thisDiv.innerHTML;
	document.getElementById("popups").innerHTML = "";
}

