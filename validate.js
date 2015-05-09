function validateForm(){
	var cont = true;
	if (!$('input[name=house]:checked').length > 0) {
    cont = false
	
}
	if(! $('input[name="race"]:checked').length > 0){
	cont = false;
	
	}
	if(! $('input[name="jedi"]:checked').length > 0){
	cont = false;
	
	}
	if(! $('input[name="villain"]:checked').length > 0){
	cont = false;
	
	}
	if(!cont){
            alert("please answer all the questions!")
        }
	return cont;


}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

function checkCookie() {
    var taken = getCookie("taken");
    if (taken != "") {
          window.location.href="results.php";
    } else {
       
        }
    }

    

