function validateForm(){
	var cont = true;
	if (!$('input[name=house]:checked').length > 0) {
    cont = false
	alert("false");
}
	if(! $('input[name="race"]:checked').length > 0){
	cont = false;
	alert("false");
	}
	if(! $('input[name="jedi"]:checked').length > 0){
	cont = false;
	alert("false");
	}
	if(! $('input[name="villain"]:checked').length > 0){
	cont = false;
	alert("false");
	}
	alert("true");
	return cont;


}