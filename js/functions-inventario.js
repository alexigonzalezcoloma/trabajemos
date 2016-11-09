$(document).ready(function){
	$(#buscar).click(function)({
	var $busca=$(#"busca").val()
		if($busca!=""){
			$.ajax({
			type:"POST",
				data:{busca:$busca},
				url:"boceto1.php",
				dataType:"php",
				
				success:function(response){
					$("#miRespuesta").php(response);
					$("#busca").val('');
				}
			});	
		}
		else{
			alert("Falta un dato");
		}
<<<<<<< HEAD
	});
});

$(document).ready(function(){ //cuando el html fue cargado iniciar  
    //actualiza cada x segundos  
    var contador = 1;  
    setInterval(function() {$('#content').load('index.php',{action:"refreshGrid"});  
                            console.log("ABM load "+contador++ +"");}, 120000 );  
    //añado la posibilidad de editar al presionar sobre edit  
    $('.edit').live('click',function(){  
        //this = es el elemento sobre el que se hizo click en este caso el link  
        //obtengo el id que guardamos en data-id  
        var id=$(this).attr('data-id');  
        //preparo los parametros  
        params={};  
        params.id=id;  
        params.action="editClient";  
        $('#popupbox').load('index.php', params,function(){  
            $('#block').show();  
            $('#popupbox').show();  
        })  
  
    })  
  
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
=======
	})
})

$(document).ready(function(){ //cuando el html fue cargado iniciar  
    //actualiza cada x segundos  
    var contador = 1;  
    setInterval(function() {$('#content').load('index.php',{action:"refreshGrid"});  
                            console.log("ABM load "+contador++ +"");}, 120000 );  
    //añado la posibilidad de editar al presionar sobre edit  
    $('.edit').live('click',function(){  
        //this = es el elemento sobre el que se hizo click en este caso el link  
        //obtengo el id que guardamos en data-id  
        var id=$(this).attr('data-id');  
        //preparo los parametros  
        params={};  
        params.id=id;  
        params.action="editClient";  
        $('#popupbox').load('index.php', params,function(){  
            $('#block').show();  
            $('#popupbox').show();  
        })  
  
    })  
  
    $('.delete').live('click',function(){  
        //obtengo el id que guardamos en data-id  
        var id=$(this).attr('data-id');  
        //preparo los parametros  
        params={};  
        params.id=id;  
        params.action="deleteClient";  
        $('#popupbox').load('index.php', params,function(){  
            $('#content').load('index.php',{action:"refreshGrid"});  
        })  
  
    })  
>>>>>>> origin/master
  
    $('#new').live('click',function(){  
        params={};  
        params.action="newClient";  
        $('#popupbox').load('index.php', params,function(){  
            $('#block').show();  
            $('#popupbox').show();  
        })  
    })  
  
    $('#client').live('submit',function(){  
        var params={};  
        params.action='saveClient';  
        params.id=$('#id').val();  
        params.nombre=$('#nombre').val();  
        params.apellido=$('#apellido').val();  
        params.fecha=$('#fecha').val();  
        params.pais=$('#pais').val();  
        $.post('index.php',params,function(){  
            $('#block').hide();  
            $('#popupbox').hide();  
            $('#content').load('index.php',{action:"refreshGrid"});  
        })  
        return false;  
    })  
  
  
    // boton cancelar, uso live en lugar de bind para que tome cualquier boton  
    // nuevo que pueda aparecer  
    $('#cancel').live('click',function(){  
        $('#block').hide();  
        $('#popupbox').hide();  
    })    
}) 
