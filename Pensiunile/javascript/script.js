//window.onload = initAll;

addLoadListener(init);
addLoadListener(initAll);

function init(){
	
	var search_btn = document.getElementById('search_btn');
		
	search_btn.onclick = search_pensiune;//(search_field);//search_field, selected_zona, selected_judet, selected_statiune, selected_categorie);
	
	//alert ('pagina sa incarcat');
	//alert ('selected_zona e ' + selected_zona.value);
}


function search_pensiune(){//, selected_zona, selected_judet, selected_statiune, selected_categorie){
	
	var search_field = document.getElementById('search_field');
	var selected_zona = document.getElementById('selected_zona');
	var selected_judet = document.getElementById('selected_judet');
	var selected_statiune = document.getElementById('selected_statiune');
	var selected_categorie = document.getElementById('selected_categorie');

	
	//alert("ai dat click pe search sa cauti : " + search_field.value);// + " in zona: "+ selected_zona +" in judetul: " + selected_judet +" in statiunea: " + selected_statiune +" in categoria: " + selected_categorie);	
	
	var xhr = false;
	
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
	
	if (xhr != null){
		
		xhr.open('GET', 'contents/search.php?search_field=' + search_field.value + '&selected_zona='+ selected_zona.value +'&selected_judet='+ selected_judet.value + '&selected_statiune='+ selected_statiune.value  +'&selected_categorie = ' + selected_categorie.value, true);
		
		xhr.onreadystatechange = function(){
			//alert(xhr.readyState);
			if (xhr.readyState == 4) {
				//alert(xhr.status);
				if (xhr.status == 200 || xhr.status == 304){
					
					//update user inferface
					//alert('am primit raspunsul...');
					
					show_results = document.getElementById('show_results');
					
					//show_results.innerHTML = "<h1>Am primit ceva raspuns....</h1>";
					
					
					
					if (xhr.responseXML) {
						var allData = xhr.responseXML.getElementsByTagName("pensiune");
						//alert(allData.length);
						for (var i=0; i<allData.length; i++) {
							
							show_results.innerHTML += "<p>"+allData[i].getElementsByTagName("nume")[0].firstChild.nodeValue+"</p>";
							
							//myDataNumePensiune[i] = allData[i].getElementsByTagName("nume")[0].firstChild;
							//myDataDescrierePensiune[i] = allData[i].getElementsByTagName("descriere")[0].firstChild;
							//var p = document.createElement("p");
							//var text = document.createTextNode("textul meu");
							
							//p.appendChild(text);
							
							//show_results = document.getElementById('show_results');
							//show_results.innerHTML = "am primit ceva mesaj";
							//show_results.appendChild(p);
							
							/*
							var thisData = myDataLabel[i].nodeValue;
							
							var temp = document.createElement("option");
							temp.value = myDataValue[i].nodeValue
							temp.innerHTML = thisData;
							document.getElementById("localitate").appendChild(temp);

							*/
							
							
						}
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

