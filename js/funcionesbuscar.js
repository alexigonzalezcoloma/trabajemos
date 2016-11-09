$(document).ready(function(){
	$("#miBoton").click(function(){
		var $buscar = $("#busca").val();
		if($nombre!=""){
			$.ajax({
				type:"POST",
				data:{buscarProducto:$buscar},
				url:"php/buscarp.php",
				dataType:"html",
				success:function(response){
					$("#miRespuesta").html(response);
					$("#buscar").val('');
				}
			});	
		}
		else{
			alert("Falta un dato");
		}
	});
});