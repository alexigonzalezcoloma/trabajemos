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
					alert("Producto eliminado");
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
		var $productoproveedor = $('#producto-proveedor').val();
		var $productonombre = $('#producto-nombre').val();
		var $productostock = $('#producto-stock').val();
		var $productoprecioneto = $('#producto-precioneto').val();
		var $productoprecio = $('#producto-precio').val();
		var $productolistacompra = $('#producto-listacompra').val();
		var $productodescripcion = $('#producto-descripcion').val();
		
		if($IDproducto!="" && $productoproveedor!="" && $productonombre!="" && $productostock!="" && $productoprecioneto!="" && $productoprecio!="" && $productolistacompra!="" && $productodescripcion!=""){
			$.ajax({ 
				type: "POST",
				data:{id1:$(this).attr('id'),id_producto:$IDproducto,rut_prov:$productoproveedor,nom_producto:$productonombre,stock:$productostock,precio_neto:$productoprecioneto,precio:$productoprecio,lista_compra:$productolistacompra,descripcion:$productodescripcion},
				url: "php/actions/saveProductos.php",             
				dataType: "html",                 
				success: function(response){ 
					$("#content-1-body").html(response);
				}
			})
		}		
	});

	$('#add-new-producto').click(function(){
		var $productonombre = $('#producto-nombre').val();
		var $productostock = $('#producto-stock').val();
		var $productoprecioneto = $('#producto-precioneto').val();
		var $productoprecio = $('#producto-precio').val();
		var $productodescripcion = $('#producto-descripcion').val();
		
		if($productonombre!="" && $productostock!="" && $productoprecioneto!="" && $productoprecio!="" && $productodescripcion!=""){
			$.ajax({ 
				type: "POST",
				data:{nom_producto:$productonombre,stock:$productostock,precio_neto:$productoprecioneto,precio:$productoprecio,descripcion:$productodescripcion},
				url: "php/actions/newProductos.php",             
				dataType: "html",                 
				success: function(response){ 
					$("#content-1-body").html(response);
				}
			})
		}		
	});

	$('#add-producto').click(function(){
		
			$.ajax({ 
				type: "POST",
				url: "php/actions/addProductos.php",             
				dataType: "html",                 
				success: function(response){ 
					$("#content-1-body").html(response);
				}
			})		
	});
});



