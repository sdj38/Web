
function confirmation(){
var forward = true;
  
	if($("input[name='user']").val == ""){
	alert("please enter a user name");
		forward = false;
	}
		return forward;


}