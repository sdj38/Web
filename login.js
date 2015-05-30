
function confirmation(){
var forward = true;
    if($("input[name='confirm']").val() != $("input[name='pswd']").val()){
		alert("passwords dont match");
		forward = false;
	}
	if($("input[name='user']").val() == ""){
	alert("please enter a user name");
		forward = false;
	}
		return forward;


}
