//window.onload = initAll;
//addLoadListener(init);
//addLoadListener(init_inregistrare_pensiune);
//addLoadListener(initAll);

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

