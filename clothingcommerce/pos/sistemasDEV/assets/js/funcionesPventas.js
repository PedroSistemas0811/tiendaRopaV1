function buscaArticulos() {
        var claveArticulo = $('#sku1').val();
        var descArticulo = $('#descrip1').val();
        $.ajax({
          url: 'data/muestra_catalogo.php',                    
          type: 'post',
          data: {
            claveArticulo:claveArticulo,
            descArticulo:descArticulo,
            },
        success: function (data) {
            $('#datosart').html(data);
        },
        error: function(){
            alert('No hay datos para mostrar');
        }
        });
    }
 function verInfoProducto(dar){
     articuloEditar = new Productos();
     articuloEditar=datosArticulo[dar];
     $('#texto_btnGuardar').text("Actualizar");
     $('#txtCodigoArticulo').val(articuloEditar.clave_prod).prop("disabled",true);
     $('#txt_modeloArticulo').val(articuloEditar.modelo);
     $('#txt_marcaArticulo').val(articuloEditar.marca);
     $('#txt_tallaArticulo').val(articuloEditar.talla);
     $('#txt_descripcionArticulo').val(articuloEditar.descripcion);
     $('#txt_colorArticulo').val(articuloEditar.color);
     $('#txt_precioArticulo').val(articuloEditar.precio);
     $('#txt_FechaModArticulo').val(articuloEditar.usu_fecha.substr(0,10));
     $('#txt_comentarioArticulo').val(articuloEditar.extra);
     
     if (articuloEditar.activo === "1"){
       $('#selectActivoProducto').val('SI');  
     }else{
         $('#selectActivoProducto').val('NO');
     }
     
     
     $('#bsqAModal').modal('hide');
   
 }
  function limpiarPrincipal(){
     articuloEditar = new Productos();
     $('#texto_btnGuardar').text("Guardar");
     $('#txtCodigoArticulo').val('').prop("disabled",false);
     $('#txt_modeloArticulo').val('');
     $('#txt_marcaArticulo').val('');
     $('#txt_tallaArticulo').val('');
     $('#txt_descripcionArticulo').val('');
     $('#txt_colorArticulo').val('');
     $('#txt_precioArticulo').val('');
     $('#txt_FechaModArticulo').val('');
     $('#txt_comentarioArticulo').val('');
     
     
     $('#bsqAModal').modal('hide');
   
 }
 function updateProducto(){
    var claveInput = $('#txtCodigoArticulo').val();
    var articuloPosicion='vacio';
    for (var i = 0; i < datosArticulo.length; i++) {
        if (datosArticulo[i].clave_prod === claveInput){
            articuloPosicion = i;
           break;
        }
    }
    if (articuloPosicion !== 'vacio'){
        datosArticulo[articuloPosicion].modelo = $('#txt_modeloArticulo').val();
		datosArticulo[articuloPosicion].talla = $('#txt_tallaArticulo').val();
		datosArticulo[articuloPosicion].descripcion = $('#txt_descripcionArticulo').val();
		datosArticulo[articuloPosicion].color = $('#txt_colorArticulo').val();
		datosArticulo[articuloPosicion].precio = $('#txt_precioArticulo').val();
		datosArticulo[articuloPosicion].extra = $('#txt_comentarioArticulo').val();
		if ($('#selectActivoProducto').val() === 'SI'){
		    datosArticulo[articuloPosicion].activo = "1";
		}else{
		    datosArticulo[articuloPosicion].activo = "0";
		}
		
        $.ajax({
			url: 'data/editar_catalogo.php',
			type: 'post',
			dataType: 'json',
			data: {
				arrArticulo:JSON.stringify(datosArticulo[articuloPosicion]),
			},
			success: function (data) {
				if(data.valid == true){
				    Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: data.msg ,
                    showConfirmButton: true
		    	    })
		    	    limpiarPrincipal();
				}
			},
			error: function(){
				Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: 'Error : Error al enviar los datos del articulo.',
                showConfirmButton: true
			})
			}
		});
       
    }else{
          Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: 'Error 500: No se encontro el articulo que desea guardar',
                showConfirmButton: true
			})
    }
   
 }