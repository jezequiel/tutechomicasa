$(document).ready(function(){
	
	var email_regexp = /^[a-zA-Z0-9._-]+([+][a-zA-Z0-9._-]+){0,1}[@][a-zA-Z0-9._-]+[.][a-zA-Z]{2,6}$/;
	var pass_regexp = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{8,10})$/;
	var nombre_regexp = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
	var numero_regexp = /^(-)?[0-9]*$/;
	
	// variables de login
	var return_user_login;
	var return_pass_login;
	
	// variables de registro
	var return_mail;
	var return_pass;
	var rep_pass;
	var return_nomb;
	var return_tel1;
	var return_tel2;
	
	
	/* Verificar login*/
	$("#btn_login").live("click",function(){
		var usuario = $("#login #email").val();
		var password = $("#login #pass").val();
		
		return_user_login = validar(usuario.match(email_regexp));
		return_pass_login = validar(password.length > 0);
		
		if(return_user_login == false){alert("los caracteres ingresados no constituyen una direccion de mail valida")}
		if(return_pass_login == false){alert("el campo contraseña no debe estar vacio")}
		
		(return_user_login == true && return_pass_login == true) ? enviar_login() : alert("error de login");
	});
	
	/* Verificar registro */
	$("#procesar_registro").live("click",function(){
		var nombre = $("#registro #nombre").val();
		var email = $("#registro #email").val();
		var pass = $("#registro #pass").val();
		var tel1 = $("#registro #tel01").val();
		var tel2 = $("#registro #tel02").val();		
		
		return_mail = validar(email.match(email_regexp));		
		return_pass = validar(pass.match(pass_regexp));
		rep_pass = validar(pass == $("#registro #repass").val());
		return_nomb = validar(nombre.match(nombre_regexp));
		return_tel1 = validar(tel1.match(numero_regexp));
		return_tel2 = validar(tel2.match(numero_regexp));
		
		if(return_mail == false){alert("los caracteres ingresados no constituyen una direccion de mail valida");}
		if(return_pass == false){
			alert("el password ingresado es incorrecto, solo se permiten entre 8 y 10 caracteres alfanumericos");
		}else{
			if(rep_pass == false){
				alert("los passwords no coinciden");
			}
		}
		if(return_nomb == false){alert("el campo nombre esta vacio o usted ingreso caracteres extraños");}
		if(return_tel1 == false || return_tel2 == false){alert("los campos de telefono solo aceptan numeros, tampoco deben estar vacios")}
		
		(return_mail == true && return_pass == true && rep_pass == true && return_nomb == true && return_tel1 == true && return_tel2 == true) ? enviar_registro() : alert("error en el registro");
		
	});

	
	/**************   Funciones generales y particulares    ******************/
	function validar(condicional){
		var parametro = eval(condicional);
		if(parametro){
			return true;
		}else{
			return false;
		}
	}
	
		
	function procesaRespuesta(){alert("exito en el registro, bienvenido a tutechomicasa.com.ar");}
	function error_insercion(){alert("error en la insercion");}
	function enviar_registro(){
		$.ajax({
			//url: '/Seminario/php/controllers/registro_controller.php',
			url: 'www.google.com.ar',
			type: 'POST',
			async: true,
			data: 'nombre='+nombre+'&email='+email+'&pass='+pass+'&tel01='+tel1+'&tel02='+tel2,
			success: procesaRespuesta(),
			error: function (xhr, ajaxOptions, thrownError){
                   alert(xhr.status);
                   alert(thrownError);
               }    
		});	
	}

});