window.onload=init;

function init(){
	document.getElementById("submit").addEventListener('click',validate,false);

}

function validateNick(){
	var element = document.getElementById('nick');
	if(!element.checkValidity()){
		error(element);
		return false;
	}

	return true;
}

function validateContrasena(){
	var element = document.getElementById("contrasena");
	if(!element.checkValidity()){
		error(element);
		return false;
	}
	return true;
}

function validate(e){
	deleteError();
	if(validateNick() && validateContrasena()){
		return true;
	}else{
		e.preventDefault();
		return false;
	}
}

function error(element){
	deleteError();
	document.getElementById("errorMessage").innerHTML = 
	element.validationMessage;
	element.className="error";
	element.focus();
}

function deleteError(){
	var form = document.forms;
	for(var i=0;i<form.elements.length;i++){
		form.elements[i].className ="";
	}
}





/*

document.getElementById("submit").addEventListener('click',validar);

var nick = document.getElementById('nick').value;
var contrasena = document.getElementById('contrasena').value;

function validar(e){
if(nick === "" || contrasena ===""){
	console.log("Ingrese datos");
	e.preventDefault();
}else{
	return true;
}

}

*/
