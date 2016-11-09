$(document).ready(function(){
	$('.delete-producto').click(function(){
		var respuesta = confirm("¿Está seguro que desea borrar?");
		if(respuesta){
			$.ajax({ 
				type: "POST",
				data:{id_producto:$(this).attr('id')},
				url: "php/actions/deleteProductos.php",             
				dataType: "html",                 
				success: function(response){ 
					$("#content-1-body").html(response);
					//setTimeout(function(){document.getElementById("info").innerHTML="";}, 3000);
				}
			})	
		}
	});
	
	$('.edit-producto').click(function(){
		$.ajax({ 
			type: "POST",
			data:{id_producto:$(this).attr('id')},
			url: "php/actions/editProductos.php",             
			dataType: "html",                 
			success: function(response){ 
				$("#content-1-body").html(response);
			}
		})	
	});
	
	$('.save-producto').click(function(){
		var $IDproducto = $('#producto-id').val();
		var $productonombre = $('#producto-nombre').val();
		var $productostock = $('#producto-stock').val();
		var $productoprecioneto = $('#producto-precioneto').val();
		var $productoprecio = $('#producto-precio').val();
		var $productolistacompra = $('#producto-listacompra').val();
		var $productodescripcion = $('#producto-descripcion').val();
		var $productoeliminado = $('#producto-eliminado').val();
		
		if($IDproducto!="" && $productonombre!="" && $productostock!="" && $productoprecioneto!="" && $productoprecio!="" && $productolistacompra!="" && $productodescripcion!="" && $productoeliminado!=""){
			$.ajax({ 
				type: "POST",
				data:{id1:$(this).attr('id'),id_producto:$IDproducto,nom_producto:$productonombre,stock:$productostock,precio_neto:$productoprecioneto,precio:$productoprecio,lista_compra:$productolistacompra,descripcion:$productodescripcion,eliminado:$productoeliminado},
				url: "php/actions/saveProductos.php",             
				dataType: "html",                 
				success: function(response){ 
					$("#content-1-body").html(response);
				}
			})
		}		
	});
});



