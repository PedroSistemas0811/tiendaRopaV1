
function eMsg(params){
	alert("Error: "+params+"");
}//end eMsg
function mayus(e) {
	e.value = e.value.toUpperCase();
}
muestraArticulosVentas();

 function buscarArticulo(){
  var item_id = $('#txtCodigoArticulo').val();
  if (item_id!==''){
    $.ajax({
    url: 'data/get_catalogo.php',
    type: 'post',
    dataType: 'json',
    data: {
      claveArticulo:item_id
    },
    success: function (data) {
      if (data.encontrado){
        $('#text_modeloArticulo').val(data.modelo);
        $('#text_marcaArticulo').val(data.marca);
        $('#text_tallaArticulo').val(data.talla);
        $('#text_descripArticulo').val(data.descripcion);
        $('#text_colorArticulo').val(data.color);
        $('#text_precioArticulo').val(data.precio);
        $cantidadArticulo = document.querySelector("#txt_CantidadArticulo");
        $cantidadArticulo.focus();
      }else{
          limpiaArticuloVentas();
          Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: 'No encontrado 404. No se encontró el articulo.',
                showConfirmButton: true
      })
      
      }
     
      

    },
    error: function(){
       limpiaArticuloVentas();
      Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: 'Error 500: La clave ingresada no existe.',
                showConfirmButton: true
      })
    }
  });  
  }
  

}//end editModal

function limpiaArticuloVentas(){
        
        $('#txtCodigoArticulo').val('');
        $('#text_modeloArticulo').val('');
        $('#text_marcaArticulo').val('');
        $('#text_tallaArticulo').val('');
        $('#text_descripArticulo').val('');
        $('#text_colorArticulo').val('');
        $('#text_precioArticulo').val('');
}
//login
$(document).on('submit', '#form-login', function(event) {
	event.preventDefault();	/* Act on the event */
	var un = $('#un').val();
	var up = $('#up').val();
	console.log(up);
	$.ajax({
		url: 'data/login_user.php',
		type: 'post',
		dataType: 'json',
		data: {
			un:un,
			up:up
		},
		success: function (data) {
			if(data.logged==true){
				Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Acceso correcto',
                showConfirmButton: false,
                timer: 2000
                    })
				window.location = data.url;				

			}else{
			     
			    Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: data.msg,
                showConfirmButton: true
               // timer: 2000
                    })
				$('#un').val("");
				$('#up').val("");
				$('#un').focus();
			}
		},
		error: function(){
		     Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: 'Error inesperado',
                showConfirmButton: false,
                timer: 2000
                    })
		}
	});
});

function showAllItem(){
	var fechainicial = $('#fechainicial').val();
	var fechafinal = $('#fechafinal').val();
    $.ajax({
		url: 'data/muestra_apartados.php',
		type: 'post',
		data: {
			fechainicial:fechainicial,
			fechafinal:fechafinal,
		},
		success: function (data) {
      $('#div_datosApartados').html(data);
    },
    error: function(){
      alert('No hay datos para mostrar');
    }
  });
}//end showAllItem



function muestraArticulosVentas(){
	var fechainicial = $('#fechainicial').val();
	var fechafinal = $('#fechafinal').val();
    $.ajax({
		url: 'data/muestra_apartados.php',
		type: 'post',
		data: {
			fechainicial:fechainicial,
			fechafinal:fechafinal,
		},
		success: function (data) {
      $('#div_articulosVenta').html(data);
    },
    error: function(){
      alert('No hay datos para mostrar');
    }
  });
}//end showAllItem

function gotoPuntoVenta(regresa){
    if(regresa){
       $('#div_puntoVenta').show();
	   $('#div_contenidoInicial').hide(); 
    }else{
        $('#div_puntoVenta').hide();
	   $('#div_contenidoInicial').show();  
    }
	
}

function limpiaForm(form){
	document.getElementById(form).reset();
}
$(document).ready(function(){
	verificar();
	
});
function verificar (){
        window.onload = function(){
  var fecha = new Date(); //Fecha actual
  var mes = fecha.getMonth()+1; //obteniendo mes
  var mesi = fecha.getMonth(); //obteniendo mes
  var dia = fecha.getDate(); //obteniendo dia
  var ano = fecha.getFullYear(); //obteniend
  if(dia<10)
    dia='0'+dia; //agrega cero si el menor de 10
  if(mes<10)
    mes='0'+mes //agrega cero si el menor de 10
    if(mesi<10)
    mesi='0'+mesi //agrega cero si el menor de 10
    document.getElementById('fechainicial').value=ano+"-"+mesi+"-"+dia;
    document.getElementById('fechafinal').value=ano+"-"+mes+"-"+dia;
    showAllItem();
    }
    
    }
    $('#buscararticulos').click(function(event) {
    	verificar();    
    });
    
    
    $('#busquedacentros1').click(function(event) {        
    	var centro = $('#centrofaf').val();
    	var nombre = $('#nombref').val();
    	var ciudad = $('#ciudadf').val();
    	$('#datoscentros').load('data/tablacentros.php?centro='+$('#centrofaf').val()+'&nombre='+$('#nombref').val()+'&ciudad='+$('#ciudadf').val()).val();
    	

    });
 

    
    $('#buscar_articulo').click(function(event) {
    	/* Act on the event */
    	$('#modal-itembsqart').find('.modal-title').text('Buscar articulo');
    	$('#modal-itembsqart').modal('show');
    	$('#submit-item').val('add');
    });
