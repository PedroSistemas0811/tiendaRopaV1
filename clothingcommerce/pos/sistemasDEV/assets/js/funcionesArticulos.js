$('#busquedaart1').click(function(event) {
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
    });
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
     muestracarrusel();
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
        saveIMG();
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
 function buscarArticulo(){
  var item_id = $('#txtCodigoArticulo').val();
   
  $.ajax({
    url: 'data/get_catalogo.php',
    type: 'post',
    dataType: 'json',
    data: {
      claveArticulo:item_id
    },
    success: function (data) {
      if (data.result){
        $('#txt_modeloArticulo').val(data.modelo);
        $('#txt_marcaArticulo').val(data.marca);
        $('#txt_tallaArticulo').val(data.talla);
        $('#txt_descripcionArticulo').val(data.descripcion);
        $('#txt_colorArticulo').val(data.color);
        $('#txt_precioArticulo').val(data.precio);
        
      }else{
          Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: 'Error 404. Error al mostrar el articulo.',
                showConfirmButton: true
      })
      }
     
      

    },
    error: function(){
      Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: 'Error 500: La clave ingresada no existe.',
                showConfirmButton: true
      })
    }
  });

}//end editModal

function saveIMG(){
 var formData = new FormData();
 var iventario = $('#txtCodigoArticulo').val(); 
 var files = $('#imageArticulo')[0].files[0];
 if ($('#imageArticulo')[0].files[0] =="") {
   alert('Debe seleccionar una imagen'); 
 }
 formData.append('inv',iventario);
 formData.append('file',files);
 $.ajax({
  url: 'data/addImagenArticulo.php',
  type: 'post',
  data: formData,
  contentType: false,
  processData: false,
  success: function(response) {
    if (response != 0) {
      alert('La imagen se ha cargado al sistema.'); 
    } else {
      alert('Formato de imagen incorrecto.');
    }
  }
});
}

function muestracarrusel()
{
  var activo="activo="+$('#txtCodigoArticulo').val();
  $.ajax({
    data: activo,
    url: 'viewCarrusel.php',
    type: 'post',
    success: function (data) {
      $('#carrusel').html(data);
    },
    error: function(){
      alert('No hay datos para mostrar');
    }
  });
}//end showAllItem

