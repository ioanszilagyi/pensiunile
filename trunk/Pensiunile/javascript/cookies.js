//addLoadListener(checkCookie);

function getCookie(c_name){
	if (document.cookie.length>0){
		c_start = document.cookie.indexOf(c_name + "=");
		if (c_start!=-1){
			c_start=c_start + c_name.length+1;
			c_end=document.cookie.indexOf(";",c_start);
			if (c_end==-1) c_end=document.cookie.length;
			return unescape(document.cookie.substring(c_start,c_end));
		}
	}
	return "";
}

function setCookie(c_name,value,expiredays){
	var exdate=new Date();
	exdate.setDate(exdate.getDate()+expiredays);
	document.cookie=c_name+ "=" +escape(value)+
	((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
}

function checkCookie(){
	lang=getCookie('lang');
	if (lang!=null && lang!=""){
		//alert("limba browserului e "+navigator.language);//alert('limba browserului e '+lang+'!');
	} else {
		//set language
		//lang=prompt('Please enter your language:',"");
		if (lang!=null && lang!="")
		{
			setCookie('lang',lang,365);
		}
	}
/*
username=getCookie('username');
if (username!=null && username!="")
  {
  alert('Welcome again '+username+'!');
  }
  else 
  {
  username=prompt('Please enter your name:',"");
  if (username!=null && username!="")
    {
    setCookie('username',username,365);
    }
  }
*/

}

function addLoadListener(fn) {
	
	if(typeof window.addEventListener != null) {
		
		Window.addEventListener('load', fn, false);
		
	} else if(typeof document.addEventListener != undefined) {
		
		document.addEventListener('load', fn, false);
	} else if (typeof window.attachEvent != undefined){
		
		Window.attachEvent('load', fn);
		
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



