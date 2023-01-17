<?php 
require_once('include/session.php'); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Pedro">
    <link rel="icon" href="img/farmazon.jpg">

    <title>CallCenter - Dashboard</title>

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
                <div class="container-fluid">

                    <!-- Page Heading -->



                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                      <div class="col-md-12 mb-1">
                            <div class="card border-left-success shadow h-100 py-1">
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-0">Clave de Producto</div>
                                     <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="txtCodigoArticulo" id="name"
                                            placeholder="">
                                    </div>
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <button  data-toggle="modal" data-target="#bsqAModal" autocomplete="off" class="btn btn-success btn-user btn-block" id="buscar_sucursal">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                         <button data-toggle="modal" data-target="#bsqAModalEscaner" autocomplete="off" id="btnEscanearArticulo" class="btn btn-success btn-user btn-block" onclick="start();">
                                            <i class="fas fa-barcode"></i>
                                        </button>
                                       
                                    </div>
                                     <div class="col-sm-2 mb-3 mb-sm-0">
                                        <button  data-toggle="modal" data-target="#bsqAModal" autocomplete="off" class="btn btn-success btn-user btn-block" id="buscar_sucursal">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div aling="center" class="text-xs font-weight-bold text-success text-uppercase mb-0">Detalles del articulo</div>
                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <label class="text-xs font-weight-bold" for="txt_modeloArticulo">Modelo:</label>
                                        <input type="text" class="form-control form-control-user" 
                                        id="txt_modeloArticulo" name="txt_modeloArticulo">
                                    </div>
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <label class="text-xs font-weight-bold" for="txt_marcaArticulo">Marca:</label>
                                        <input type="text" class="form-control form-control-user" 
                                        id="txt_marcaArticulo" name="txt_marcaArticulo"
                                            placeholder="">
                                    </div>
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <label class="text-xs font-weight-bold" for="txt_tallaArticulo">Talla:</label>
                                        <input type="text" class="form-control form-control-user" 
                                        id="txt_tallaArticulo" name="txt_tallaArticulo">
                                    </div>
                                    
                                   
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label class="text-xs font-weight-bold" for="txt_descripcionArticulo">Descripción:</label>
                                        <input type="text" class="form-control form-control-user" 
                                        id="txt_descripcionArticulo" name="txt_descripcionArticulo"
                                            placeholder="">
                                    </div>
                                    
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <label class="text-xs font-weight-bold" for="txt_colorArticulo">Color:</label>
                                        <input type="text" class="form-control form-control-user" 
                                        id="txt_colorArticulo" name="txt_colorArticulo"
                                            placeholder="">
                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label class="text-xs font-weight-bold" for="txt_precioArticulo">Precio:</label>
                                        <input type="text" class="form-control form-control-user" 
                                        id="txt_precioArticulo" name="txt_precioArticulo"
                                            placeholder="">
                                    </div>
                                   
                                </div>
                                <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label class="text-xs font-weight-bold" for="txt_comentarioArticulo">Comentarios:</label>
                                        <input type="text" class="form-control form-control-user" 
                                        id="txt_comentarioArticulo" name="txt_comentarioArticulo"
                                            placeholder="">
                                    </div>
                                    
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <label class="text-xs font-weight-bold" for="txt_colorArticulo">Activo:</label>
                                         <select id="selectActivoProducto" name="selectActivoProducto" class="btn btn-primary btn-ls btn-block" aria-pressed="false">
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                    </select>
                                    </div>
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                    <label class="text-xs font-weight-bold" for="txt_precioArticulo">Fecha Modificación:</label>
                                        <input type="text" disabled class="form-control form-control-user" 
                                        id="txt_FechaModArticulo" name="txt_FechaModArticulo"
                                            placeholder="">
                                    </div>
                                     <div class="col-sm-5 mb-3 mb-sm-0">
                                    <label class="text-xs font-weight-bold" for="imageArticulo">Selecciona la imagen:</label>
                                        <input type="file" class="btn btn-success btn-user btn-block" id="imageArticulo" name="imageArticulo" > 
                                    </div>
                                   
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-8 mb-3 mb-sm-0">
                                        
                                        <div  class="col-12" id="carrusel"></div>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        </br></br></br></br></br>
                                         <button id="btnEscanearArticulo" name="btnEscanearArticulo" class="btn btn-danger btn-user btn-block" onclick="limpiarPrincipal();">Limpiar
                                            <i class="fas fa-eraser"></i>
                                        </button>
                                        <button class="btn btn-success btn-user btn-block" id="guardarArticulo" name="guardarArticulo" onclick="updateProducto();"><span id="texto_btnGuardar" name="texto_btnGuardar" class="texto">Guardar</span> 
                                            <i class="fas fa-save"></i>
                                        </button>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-5"></div>
                        </div>
                    </div>
                </div>




                <!-- Earnings (Monthly) Card Example -->

            </div>

            


</div>
<div id="datosexistencias"></div>
<!-- /.container-fluid -->

</div>
<?php include('footer.php');?>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->

<div class="modal fade" id="bsqAModal" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Selecciona el articulo</h5>
        </div>
        <div class="modal-body">

          <div class="col-md-12 mb-2">                        

            <div>
                 <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <label class="text-xs font-weight-bold" for="txt_modeloArticulo">Clave:</label>
                                         <input type="text" maxlength="20" name="sku1" id="sku1" class="col-sm-10  form-control" >
                                    </div>
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <label class="text-xs font-weight-bold" for="descrip1">Descripción:</label>
                                        <input type="text" name="descrip1" id="descrip1" class="col-sm-10  form-control" > 
                                    </div>
                                    <div class="col-sm-2 mb-3 mb-sm-0">
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

<div class="modal fade" id="bsqAModalEscaner" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Escanea el código de barras en la camara.</h5>
        </div>
        <div class="modal-body">

          <div class="col-md-12 mb-2">                        

            <div class="row no-gutters">
            <p id="resultado">Aquí aparecerá el código</p>
		<p>A continuación, el contenedor: </p>
		<div class="col-md-12 mb-2" id="contenedor"></div>

            </div>                  

</div>
          
</div>
<div class="modal-footer">
    <a class="btn btn-success" type="button" onclick="Quagga.stop();" data-dismiss="modal">Cerrar</a>
</div>
</div>
</div>
</div>

<?php include_once('modales/buscararticulos.php'); ?>

<script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="assets/js/regis.js"></script>
<script type="text/javascript" src="class/modeloArticulos.js"></script>
<script type="text/javascript" src="assets/js/funcionesArticulos.js"></script>
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
<script src="https://unpkg.com/quagga@0.12.1/dist/quagga.min.js"></script>
<script src="scaner/gulpfile.js"></script>


</body>

</html>