function ValidarLogin(form){
	if(form.user.value == ""){
		alert("Debe ingresar un usuario.");
		form.user.focus();
		return false;
	}
	if(form.password.value == ""){
		alert("Ingrese su contraseña");
		form.password.focus();
		return false;
	}
	return true;
}

function Ajax(url, divRes, param) {
    //alert(param);
    $.ajax({
        type: "POST",
        cache: 'false',
        url: url,
        data: {'param': param},
        success: function(data) {
            //alert(data);
            $(divRes).html(data);
        }
    });
}