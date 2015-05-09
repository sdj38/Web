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