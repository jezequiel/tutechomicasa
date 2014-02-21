function validRegistro() {
	var errorMsg = "";
	if (document.getElementById("nombre").value.length == 0) {
		errorMsg += "- Debe especificar un nombre    \n";
	}
	//if (document.getElementById("email") != null) {
	//	if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("email").value))){
	//		errorMsg += "- La direccion de email ingresada no es correcta    \n";
	//	}
	//}
	if (document.getElementById("pass").value.length == 0) {
		errorMsg += "- Debe especificar un password    \n";
	}else {
		if (document.getElementById("repass").value.length == 0) {
			errorMsg += "- Debe confirmar el password ingresado    \n";
		}else {
			if (document.getElementById("pass").value != document.getElementById("repass").value) {
				errorMsg += "- El password ingresado y su confirmacion no coinciden    \n";
			}
		}
	}
	if (errorMsg.length != 0) {
		alert(errorMsg);	
	}else {
		document.getElementById("registro").submit();	
	}
}

function validLogin() {
	var errorMsg = "";
	if (document.getElementById("email") != null) {
		if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("email").value))){
			errorMsg += "- La direccion de email ingresada no es correcta    \n";
		}
	}
	if (document.getElementById("pass").value.length == 0) {
		errorMsg += "- Debe especificar un password    \n";
	}
	if (errorMsg.length != 0) {
		alert(errorMsg);	
	}else {
		document.getElementById("login").submit();	
	}
}
