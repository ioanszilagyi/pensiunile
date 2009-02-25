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
	
	var search_btn = Document.getElementById('search_btn');		
	search_btn.onclick = search_pensiune;//(search_field);//search_field, selected_zona, selected_judet, selected_statiune, selected_categorie);
}


function search_pensiune(){
	var	show_results = Document.getElementById('show_results');//div-ul in care afisam rezultatele
	var search_field = Document.getElementById('search_field');
	var selected_zona = Document.getElementById('selected_zona');
	var selected_judet = Document.getElementById('selected_judet');
	var selected_statiune = Document.getElementById('selected_statiune');
	var selected_categorie = Document.getElementById('selected_categorie');

	
	//alert("ai dat click pe search sa cauti : " + search_field.value);// + " in zona: "+ selected_zona +" in judetul: " + selected_judet +" in statiunea: " + selected_statiune +" in categoria: " + selected_categorie);	
	
	var xhr = createXHR();

	if (xhr != null){
		
		show_results.innerHTML = "<h3 align = 'center'>searching....</h3>";
		
		xhr.open('GET', 'contents/search.php?search_field=' + search_field.value + '&selected_zona='+ selected_zona.value +'&selected_judet='+ selected_judet.value + '&selected_statiune='+ selected_statiune.value  +'&selected_categorie = ' + selected_categorie.value, true);
		xhr.onreadystatechange = function(){
			//alert(xhr.readyState);
			if (xhr.readyState == 4) {
				//alert(xhr.status);
				if (xhr.status == 200 || xhr.status == 304){
					//update user inferface
					show_results.innerHTML = "";
					
					if (xhr.responseXML) {
						var allData = xhr.responseXML.getElementsByTagName("pensiune");
						//alert(allData.length);
						var textHTML = "";
						
						var tabel = Document.createElement('tabel');
						
						var tr = Document.createElement('tr');
							
						var td = Document.createElement('td');
						var p = Document.createElement('h3');
						var textNode = Document.createTextNode("Numele Pensiunii");
						p.appendChild(textNode);
						td.appendChild(p);
						tr.appendChild(td);
						
						var td0 = Document.createElement('td');
						var p0 = Document.createElement('h3');
						var textNode0 = Document.createTextNode("Descriere");
						p0.appendChild(textNode0);
						td0.appendChild(p0);
						tr.appendChild(td0);
						
						tabel.appendChild(tr);	

						
						
						for (var i=0; i<allData.length; i++) {
							
							var tr = Document.createElement('tr');
							
							var td1 = Document.createElement('td');
							var p1 = Document.createElement('p');
							var textNode1 = Document.createTextNode(allData[i].getElementsByTagName("nume")[0].firstChild.nodeValue);
							p1.appendChild(textNode1);
							td1.appendChild(p1);
							tr.appendChild(td1);
							
							var td2 = Document.createElement('td');
							var p2 = Document.createElement('p');
							var textNode2 = Document.createTextNode(allData[i].getElementsByTagName("descriere")[0].firstChild.nodeValue);
							p2.appendChild(textNode2);
							td2.appendChild(p2);
							tr.appendChild(td2);
							
							//textHTML = "<p>"+allData[i].getElementsByTagName("nume")[0].firstChild.nodeValue+"</p>";
							//td.innerHTML = textHTML;
							
							tabel.appendChild(tr);
									
							
						}
						
						show_results.appendChild(tabel);
						//show_results.innerHTML = textHTML;
						
						//tabel.style.border = "thin solid";
						//tabel.createAttribute('class');
						tabel.class = "result";
											
					}
					
				
				} else {
					//not ok
					alert('Nu s-a primit nici un raspuns....');
				}
				
			}
		
		};
		
		xhr.send(null);
	//alert("return false");		
		return false;
	}
	//alert("return true");
	return true;
}





function addLoadListener(fn) {
	
	if(typeof window.addEventListener != null) {
		
		window.addEventListener('load', fn, false);
		
	} else if(typeof document.addEventListener != undefined) {
		
		Document.addEventListener('load', fn, false);
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

