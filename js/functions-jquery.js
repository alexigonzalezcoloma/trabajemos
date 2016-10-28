$(document).ready(function(){
	$('.delete-user').click(function(){
		var respuesta = confirm("¿Está seguro que desea borrar?");
		if(respuesta){
			$.ajax({ 
				type: "POST",
				data:{rut:$(this).attr('id')},
				url: "php/actions/deleteClient.php",             
				dataType: "html",                 
				success: function(response){ 
					$("#content-1-body").html(response);
					//setTimeout(function(){document.getElementById("info").innerHTML="";}, 3000);
				}
			})	
		}
	});
	
	$('.edit-user').click(function(){
		$.ajax({ 
			type: "POST",
			data:{rut:$(this).attr('id')},
			url: "php/actions/editClient.php",             
			dataType: "html",                 
			success: function(response){ 
				$("#content-1-body").html(response);
			}
		})	
	});
	
	$('.save-user').click(function(){
		var $clientrut = $('#client-rut').val();
		var $clientname = $('#client-name').val();
		var $clientlastname = $('#client-lastname').val();
		var $clientphone = $('#client-phone').val();
		
		if($clientrut!="" && $clientname!="" && $clientlastname!="" && $clientphone!=""){
			$.ajax({ 
				type: "POST",
				data:{rut1:$(this).attr('id'),rut:$clientrut,nombre:$clientname,apellido:$clientlastname,telefono:$clientphone},
				url: "php/actions/saveClient.php",             
				dataType: "html",                 
				success: function(response){ 
					$("#content-1-body").html(response);
				}
			})
		}		
	});
});



