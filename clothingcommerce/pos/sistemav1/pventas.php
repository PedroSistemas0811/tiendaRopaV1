<?php 
require_once('include/session.php'); 
require_once('class/modeloVentas.php');

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/quemepongonegro.jpeg">

  <title>Inicio - ¿Que me Pongo?</title>

  <!-- Custom fonts for this template-->

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('navbar.php');?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include('header.php');?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" id="div_contenidoInicial" >

          <!-- Page Heading -->



          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-md-12 mb-1">
              <div class="card border-left-success shadow h-100 py-1">
                <div class="card-body">
                 <div class="row no-gutters align-items-center">
                   <div class="col mr-1">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-0">Fecha Inicial</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                     <input type="date" name="fechainicial"  id="fechainicial" class="col-sm-12  form-control" required>                                        
                   </div>

                 </div>

               <div class="col mr-1">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-0">Fecha Final</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                     <input type="date" name="fechafinal"  id="fechafinal" class="col-sm-12  form-control" required >         
                   </div>

                 </div>
               
            
           <div class="col mr-6">
            <div class="text-xs font-weight-bold text-white text-uppercase mb-1" >
            Buscar</div>
            <div class="h5 mb-1 font-weight-bold text-gray-800">
              <button  data-toggle="button" id="busquedaApartados" aria-pressed="false" autocomplete="off" class="btn btn-success btn-sl" onclick="showAllItem();">Buscar
                <span class="fas fa-search" aria-hidden="true"></span>
              </button>                                    
            </div>

          </div>
           <div class="col mr-6">
            <div class="text-xs font-weight-bold text-white text-uppercase mb-1" >New
            </div>
            <div class="h5 mb-1 font-weight-bold text-gray-800">
              <button  data-toggle="button" id="btn_puntoVenta" aria-pressed="false" autocomplete="off" class="btn btn-success btn-sl" onclick="gotoPuntoVenta(true);">Nueva venta
                <span class="fas fa-plus" aria-hidden="true"></span>
              </button>                                    
            </div>

          </div>


        </div>

      </div>
    </div>
  </div>




  <!-- Earnings (Monthly) Card Example -->

</div>


<div id="div_datosApartados" class="col-md-12 mb-1"></div>

</div>
<div class="container-fluid" id="div_puntoVenta"  style="display: none">

          <!-- Page Heading -->


          <div class="card border-left-success shadow h-100 py-1">
    
            <!-- Earnings (Monthly) Card Example -->
       
    
  
  
  
  
  <div class="p-2">
      
                            
                            <div class="user">
                                <div class="form-group row">
                                  <div class="col-md-3 mb-1">
            <div class="h5 mb-1 font-weight-bold text-gray-800">
                <button  data-toggle="button" id="busquedacentros1" aria-pressed="false" autocomplete="off" class="btn btn-danger btn-sl" onclick="gotoPuntoVenta(false);"><i class="fas fa-backward"></i> Regresar
                
              </button>                                   
            </div>
  </div>
                           <div class="col-md-9 mb-1">
            <div class="h5 mb-1 font-weight-bold text-gray-800">
               <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-3">Punto de Venta</h1>
                                <h1 id="lbl_numeroVenta" class="h4 text-gray-900 mb-3">Venta No. </h1>
                            </div>                                
            </div>
  </div>
  </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="txtCodigoArticulo" id="txtCodigoArticulo" onblur="buscarArticulo();"
                                            placeholder="*Código de producto">
                                    </div>
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <button onclick="buscarArticulo();" data-toggle="modal" data-target="#bsqAModal" autocomplete="off"  class="btn btn-success btn-user btn-block">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                         <button id="btnEscanearArticulo" name="btnEscanearArticulo" class="btn btn-success btn-user btn-block" onclick="gotoPuntoVenta(false);">
                                            <i class="fas fa-barcode"></i>
                                        </button>
                                       
                                    </div>
                                    <div class="col-sm-1 mb-3 mb-sm-0">
                                         <button type="button"  id="busquedacentros1" class="btn btn-success btn-user btn-block" onclick="gotoPuntoVenta(false);"><i class="fas fa-minus"></i>
                                        </button> 
                                       
                                    </div>
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <input type="number" min="1" class="form-control form-control-user" id="txt_CantidadArticulo" id="txt_CantidadArticulo"
                                            placeholder="*Cantidad">
                                       
                                    </div>
                                    <div class="col-sm-1 mb-3 mb-sm-0">
                                         <button  type="button" autocomplete="off" class="btn btn-success btn-user btn-block" onclick="gotoPuntoVenta(false);"><i class="fas fa-plus"></i>
              </button> 
                                       
                                    </div>
                                   
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="text_descripArticulo" name="text_descripArticulo" size="8" style="font-family: Arial; font-size: 8pt;"
                                        placeholder="Descripción" disabled>
                                    </div>
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="text_marcaArticulo" size="8" style="font-family: Arial; font-size: 8pt;" placeholder="Marca" disabled>
                                    </div>
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="text_modeloArticulo" size="8" style="font-family: Arial; font-size: 8pt;" placeholder="Modelo" disabled>
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="text" class="form-control form-control-user"
                                            id="text_colorArticulo" size="8" style="font-family: Arial; font-size: 8pt;" placeholder="Color" disabled>
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="text" class="form-control form-control-user"
                                            id="text_tallaArticulo" size="8" style="font-family: Arial; font-size: 8pt;" placeholder="Talla" disabled>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-user"
                                            id="text_precioArticulo" size="8" style="font-family: Arial; font-size: 8pt;" placeholder="Precio" disabled>
                                    </div>
                                     
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <button  data-toggle="button" id="busquedacentros1" aria-pressed="false" autocomplete="off" class="btn btn-success btn-user btn-block" onclick="gotoPuntoVenta(false);"><i class="fas fa-badge-check"></i> Agregar articulo
                                         </button> 
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <button  data-toggle="button" id="busquedacentros1" aria-pressed="false" autocomplete="off" class="btn btn-danger btn-user btn-block" onclick="gotoPuntoVenta(false);"><i class="fas fa-badge-check"></i>Limpiar
                                        </button>
                                    </div>
                                 
                                     
                                </div>
                                
                               
                                <hr>
                               
                            </div>
                            <hr>
                            <div id="div_articulosVenta" class="col-md-12 mb-1"></div>
                            
                              <button  data-toggle="button" id="busquedacentros1" aria-pressed="false" autocomplete="off" class="btn btn-facebook btn-user btn-block" onclick="showAllItem();"><i class="fas fa-badge-check"></i>Terminar Venta
                
              </button> 
                            <br>
                            <div class="text-center">
                                <a class="small" href="info.php">Necesita ayuda</a>
                            </div>
                        </div>



  <!-- Earnings (Monthly) Card Example -->
</div>


</div>
<!-- /.container-fluid -->

</div>



<!-- End of Footer -->
<?php include('footer.php');?>
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
 
<div class="modal fade" id="bsqAModal" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Selecciona el articulo</h5>
        </div>
        <div class="modal-body">

          <div class="col-md-12 mb-2">                        

            <div class="row no-gutters ">
                <div class="col mr-0">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-0" >
                    Clave articulo</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                     <input type="text" maxlength="20" name="sku1" id="sku1" class="col-sm-10  form-control" >                                       
                 </div>

             </div> 
             <div class="col mr-0">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-0" >
                Descripción</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                 <input type="text" name="descrip1" id="descrip1" class="col-sm-10  form-control" >                                       
             </div>

         </div> 


     <div class="col mr-1" align="center">
        <div class="text-xs font-weight-bold text-white  text-uppercase mb-0">Buscar</div>
        <div class="h5 mb-0 font-weight-bold text-gray-800">
         <button  data-toggle="button" id="busquedaart1" aria-pressed="false" autocomplete="off" class="btn btn-success btn-sl" onclick="">Buscar
            <span class="fas fa-search" aria-hidden="true"></span>
        </button>


    </div>

</div>

</div>                  

</div>




<div id="datosart"></div>           
</div>
<div class="modal-footer">
    <a class="btn btn-success" type="button" data-dismiss="modal">Cerrar</a>
</div>
</div>
</div>
</div>

<?php include_once('modales/buscararticulos.php'); ?>

<script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="assets/js/regis.js"></script>
<script type="text/javascript" src="assets/js/funcionesPventas.js"></script>
<script type="text/javascript" src="assets/packageSweetAlert/dist/sweetalert2.all.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>


</body>

</html>