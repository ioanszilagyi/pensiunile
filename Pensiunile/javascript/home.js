//window.onload = initAll;
addLoadListener(init);
//addLoadListener(init_inregistrare_pensiune);
//addLoadListener(initAll);

function init(){


    var search_btn = document.getElementById('search_btn');
    search_btn.onclick = search_pensiune;//(search_field);//search_field, selected_zona, selected_judet, selected_statiune, selected_categorie);
}


function search_pensiune(){

   var pensiune;

    var show_results = document.getElementById('show_results');//div-ul in care afisam rezultatele
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

        xhr.onreadystatechange = function () {
            //alert(xhr.readyState);

            if (xhr.readyState == 4) {
                //alert(xhr.status);
                if (xhr.status == 200 || xhr.status == 304){
                    //update user inferface
                    show_results.innerHTML = "";

                    if (xhr.responseText) {

                       //show_results.innerHTML = xhr.responseText;
                       pensiune = eval( '(' + xhr.responseText + ')' );

                        //alert (pensiune.results[0].name.value);

                        if(pensiune.results.length != 0){
                            //alert(pensiune.results.length);
                            for(i=0; i<pensiune.results.length; i++){
                                //construieste interfata
                                show_results.appendChild(createDisplayTablePensiune(pensiune.results[i], pensiune.labels));
                            }
                        } else {
                            alert ("Rezultatul intors nu are nici o inregistrare.")
                        }

                    } else {
                        alert("e o problema cu formatul raspunsului")
                    }
                } else {
                    //not ok
                    alert('Nu s-a primit nici un raspuns....')
                }

            }

        }

        xhr.send();


        //alert("return false");
        return false;
    }
    //alert("return true");
    return true;
}

function createDisplayTablePensiune(pensiune_curenta, labels){

    //var	show_results = document.getElementById('show_results');//div-ul in care afisam rezultatele
    //alert(pensiune_curenta.name);
    var table = document.createElement('table');
    var tbody = document.createElement('tbody')
    table.setAttribute('width','1000');
    table.className = "table_show_results";
    //table.setAttribute('class','table_show_results');
    //table.setAttribute('className','table_show_results');

    table.appendChild(tbody);
    //randul 1
    var tr1 = document.createElement('tr');
    tbody.appendChild(tr1);

    var td11 = document.createElement('td');
    td11.innerHTML = "numele pensiunii e: ";//+pensiune_curente.name.value;
    tr1.appendChild(td11);
    td11.setAttribute('rowSpan', '4');
    td11.setAttribute('width', '100');
    td11.setAttribute('height', '75');
    td11.innerHTML = '<img src="'+pensiune_curenta.photo_file+'" alt="'+pensiune_curenta.photo_title+'" />';

    var td12 = document.createElement('td');
    tr1.appendChild(td12);
    td12.setAttribute('colSpan','5');
    td12.className = "titlu_pensiune";
    td12.innerHTML = '<a href="http://'+pensiune_curenta.web+'">'+pensiune_curenta.name+'</a>'

    //randul 2
    var tr2 = document.createElement('tr');
    tbody.appendChild(tr2);

    var td21 = document.createElement('td');
    tr2.appendChild(td21);
    td21.className = "text_evidentiat_link";
    td21.setAttribute('width', '200');//latimea coloanei Descriere, photos
    td21.innerHTML = '<a href="'+pensiune_curenta.name+'/description/" onClick="alert(\''+pensiune_curenta.description+'\');return false;">'+labels.description+'</a>';

    var td22 = document.createElement('td');
    tr2.appendChild(td22);
    td22.className = "text";
    td22.innerHTML = labels.address;

    var td23 = document.createElement('td');
    tr2.appendChild(td23);
    td23.className = "text_evidentiat";
    td23.setAttribute('width', '300');//latimea coloanei unde punem adresa
    td23.innerHTML = pensiune_curenta.address+', '+pensiune_curenta.loc+', '+pensiune_curenta.jud;

    var td24 = document.createElement('td');
    tr2.appendChild(td24);
    td24.className ='text';
    td24.innerHTML = labels.zona_turistica;

    var td25 = document.createElement('td');
    tr2.appendChild(td25);
    td25.className = 'text_evidentiat';
    td25.innerHTML = pensiune_curenta.zona_turistica;

    //randul 3
    var tr3 = document.createElement('tr');
    tbody.appendChild(tr3);

    var td31 = document.createElement('td');
    tr3.appendChild(td31);
    td31.className = 'text_evidentiat_link';
    td31.innerHTML = '<a href="'+pensiune_curenta.name+'/photos/" onClick="alert(\''+pensiune_curenta.id+'\');return false;">'+labels.main_photo+'</a>';

    var td32 = document.createElement('td');
    tr3.appendChild(td32);
    td32.className = 'text';
    td32.innerHTML = labels.phone;

    var td33 = document.createElement('td');
    tr3.appendChild(td33);
    td33.className = 'text_evidentiat';
    td33.innerHTML = pensiune_curenta.phone;

    var td34 = document.createElement('td');
    tr3.appendChild(td34);
    td34.className = 'text';
    td34.innerHTML = labels.ratings;

    var td35 = document.createElement('td');
    tr3.appendChild(td35);
    td35.className = 'text_evidentiat';
    //td35.innerHTML = pensiune_curenta.ratings +" ("+pensiune_curenta.nr_votes+"  votes.)";

    for (var i=1; i<=5; i++){

        if (i<=pensiune_curenta.ratings){
            td35.innerHTML += '<img src="images/star.png" alt="star"/>';
        } else {
            td35.innerHTML += '<img src="images/star-gri.png" alt="star-gri"/>';
        }
    }
    td35.innerHTML += " ("+pensiune_curenta.nr_votes+" "+labels.votes+")";

    //randul 4
    var tr4 = document.createElement('tr');
    tbody.appendChild(tr4);

    var td41 = document.createElement('td');
    tr4.appendChild(td41);
    td41.className = 'text_evidentiat';
    for (var j=1; j<=pensiune_curenta.category; j++){
        td41.innerHTML += '<img src="images/margareta.png" alt="margareta"/>';
    }

    var td42 = document.createElement('td');
    tr4.appendChild(td42);
    td42.className = 'text';
    td42.innerHTML = labels.mail;

    var td43 = document.createElement('td');
    tr4.appendChild(td43);
    td43.className = 'text_evidentiat';
    td43.innerHTML = pensiune_curenta.email;

    var td44 = document.createElement('td');
    tr4.appendChild(td44);
    td44.className = 'text';
    td44.innerHTML = labels.prices;

    var td45 = document.createElement('td');
    tr4.appendChild(td45);
    td45.className = 'text_evidentiat';
    td45.innerHTML = pensiune_curenta.price_min +" - "+pensiune_curenta.price_max + " EURO";//vom seta moneda in alta parte

    return table;
//show_results.appendChild(table);
}




//Codul pentru pagina inregistrare_pensiune
//-------------------------------------------------------------------------

var xhr = false;
var myDataLabel = new Array();
var myDataValue = new Array();
var element = "";

//function init_inregistrare_pensiune() {
//
//    //document.getElementById("searchField").onkeyup = searchSuggest;
//    //document.getElementById("select_judet").onchange = get_localitati_judet;
//
//    if (window.XMLHttpRequest) {
//        xhr = new XMLHttpRequest();
//    }
//    else {
//        if (window.ActiveXObject) {
//            try {
//                xhr = new ActiveXObject("Microsoft.XMLHTTP");
//            }
//            catch (e) { }
//        }
//    }
//
//    get_judete_tara();
//}

//function get_judete_tara(){
//    element = "judet";
//    var selected_tara = document.getElementById("tara").value;
//    //alert(selected_tara);
//
//    if (xhr) {
//        xhr.onreadystatechange = setDataArray;
//        xhr.open("GET", "includes/makeXML.php?name=get_judete&value="+selected_tara, true);
//        xhr.send(null);
//    }
//    else {
//        alert("Sorry, but I couldn't create an XMLHttpRequest");
//    }
//
//}
//
//function get_localitati_judet(){
//    element = "localitate";
//    var selected_judet = document.getElementById("select_judet").value;
//    //alert(selected_judet);
//
//    if (xhr) {
//        xhr.onreadystatechange = setDataArray;
//        xhr.open("GET", "includes/makeXML.php?name=get_localitati&value="+selected_judet, true);
//        xhr.send(null);
//    }
//    else {
//        alert("Sorry, but I couldn't create an XMLHttpRequest");
//    }
//
//}


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

