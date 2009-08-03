addLoadListener(initAll);
//var nodeChangingArea;
var editFormDiv;
var editFormTable;
function initAll() {
	//document.getElementsByTagName("form")[1].onsubmit = nodeChanger;
	//nodeChangingArea = document.getElementById("modifiable");
        editFormDiv = document.getElementById("editFormDiv");
        editFormTable = document.getElementById("editFormTable");
        
}
function edit(className, rootElementNode){
    var nodeName = "P";
    var nodes = new Array();
    nodes = findClassName(className, nodeName, rootElementNode);
    if(nodes.length >0){
        for(i in nodes){
            changeNode("input", "p", nodes[i], className);
        }
    } else alert("you already edit it");

}

function save(className, rootElementNode){
    var nodeName = "INPUT"
    var nodes = new Array();
    nodes = findClassName(className, nodeName, rootElementNode);
    if(nodes.length > 0){
        for(i in nodes){
            changeNode("p", "input", nodes[i], className);
        }
    } else alert("you already locked it");

}

function changeNode(newNode, oldNode, node, className){

    var parentNode = node.parentNode;
    var nNode = document.createElement(newNode);

    if(oldNode=="p"){
        nNode.value = node.firstChild.nodeValue;
    } else {
        var textNode = document.createTextNode(node.value);
        nNode.appendChild(textNode);
    }
    nNode.className = className;
    parentNode.replaceChild(nNode,node);
}


function findClassName( strClassName, nodeName, obj ) {
    //alert(obj);
    var arrayElements = new Array();
    var arrayClassElements = new Array();

    arrayElements = obj.getElementsByTagName(nodeName);
    for (var i=0; i < arrayElements.length; i++){
        if (arrayElements[i].className == strClassName){
            arrayClassElements.push(arrayElements[i]);
        }
    }
    return arrayClassElements;
}