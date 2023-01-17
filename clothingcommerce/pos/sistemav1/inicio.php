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

    <title>Tienda de Ropa - Inicio</title>

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

        <?php include('navbar.php');?>

            <!-- Content Wrapper -->
            <div id="content-wrapper">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->


                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">




                       


                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php  
echo $_SESSION["name"];
?></span>
                                <img class="img-profile rounded-circle"
                                src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->



                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-md-12 mb-1">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-1">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" >
                                            SKU</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                             <input type="text" disabled  name="skuf" id="skuf" class="col-sm-8  form-control" >                                       
                                         </div>

                                     </div>
                                     <div class="col mr-1">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-0">Descripcion</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                         <input type="text" name="descripf" disabled id="descripf" class="col-sm-12  form-control" >                                        
                                     </div>

                                 </div>

                                 <div class="col mr-1" align="center">
                                    <div class="text-xs font-weight-bold text-white  text-uppercase mb-0">Buscar</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <button  data-toggle="modal" data-target="#bsqAModal" autocomplete="off" class="col-sm-8 btn btn-primary btn-sl " id="buscar_sucursal"
                                        name="buscar_sucursal">Seleccionar articulo
                                        <span class="fas fa-search" aria-hidden="true"></span>


                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <!-- Earnings (Monthly) Card Example -->

            </div>

            <div class="row">
              <div class="col-md-12 mb-1">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-0">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-0" >
                                Sucursales</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                  
                                 <input type="hidden" disabled name="sucursalesf" id="sucursalesf" class="col-sm-12  form-control" >                                   
                             </div>

                         </div> 
                         <div class="col mr-1" align="center">
                            <div class="text-xs font-weight-bold text-white  text-uppercase mb-0">Buscar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <button  data-toggle="modal" data-target="#bsqSModal" autocomplete="off" class="btn btn-primary btn-sl" id="buscar_sucursal"
                                name="buscar_sucursal">Seleccionar sucursales
                                <span class="fas fa-search" aria-hidden="true"></span>


                            </div>

                        </div> 
                        <div class="col mr-2" align="center">
                           <div class="text-xs font-weight-bold text-primary text-uppercase mb-0" >
                           Mostar :</div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="true" id="checarsuc" checked>
                              <label class="form-check-label" for="flexCheckDefault">
                                Solo con existencias
                            </label>
                        </div>                

                    </div> 


                    <div class="col mr-1" align="center">
                        <div class="text-xs font-weight-bold text-white  text-uppercase mb-0">Buscar</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <button   autocomplete="off" class="btn btn-primary btn-sl" id="mostrarexistencias"
                            name="mostrarexistencias">Mostrar Datos
                            <span class="fas fa-search" aria-hidden="true"></span>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>


</div>
<div id="datosexistencias"></div>
<!-- /.container-fluid -->

</div>
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Farmamigo 2021</span>
        </div>
    </div>
</footer>
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿ Seguro que desea salir ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">X</span>
            </button>
        </div>
        <div class="modal-body">De click en si para salir.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Si</a>
        </div>
    </div>
</div>
</div>
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
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-0" >
                    SKU</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                     <input type="number" maxlength="6" name="sku1" id="sku1" class="col-sm-10  form-control" >                                       
                 </div>

             </div> 
             <div class="col mr-0">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-0" >
                Descripción</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                 <input type="text" name="descrip1" id="descrip1" class="col-sm-10  form-control" >                                       
             </div>

         </div> 
         <div class="col mr-0">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-0" >
            Barcode</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
             <input type="number" name="barcode1" id="barcode1" class="col-sm-10  form-control" >                                       
         </div>

     </div> 


     <div class="col mr-1" align="center">
        <div class="text-xs font-weight-bold text-white  text-uppercase mb-0">Buscar</div>
        <div class="h5 mb-0 font-weight-bold text-gray-800">
         <button  data-toggle="button" id="busquedaart1" aria-pressed="false" autocomplete="off" class="btn btn-primary btn-sl" onclick="">Buscar
            <span class="fas fa-search" aria-hidden="true"></span>
        </button>


    </div>

</div>

</div>                  

</div>




<div id="datosart"></div>           
</div>
<div class="modal-footer">
    <a class="btn btn-primary" type="button" data-dismiss="modal">Cerrar</a>
</div>
</div>
</div>
</div>
<div class="modal fade" id="bsqSModal" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Selecciona las sucursales</h5>
        </div>
        <div class="modal-body">
         <div class="col-md-12 mb-2">                        

            <div class="row no-gutters ">
                <div class="col mr-0">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-0" >
                    Centro FA</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                     <input type="text" name="centrofaf" id="centrofaf" class="col-sm-10  form-control" >                                       
                 </div>

             </div> 
             <div class="col mr-0">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-0" >
                Nombre</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                 <input type="text" name="nombref" id="nombref" class="col-sm-10  form-control" >                                       
             </div>

         </div> 
         <div class="col mr-0">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-0" >
            Ciudad</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
             <input type="text" name="ciudadf" id="ciudadf" class="col-sm-10  form-control" >                                       
         </div>

     </div> 


     <div class="col mr-1" align="center">
        <div class="text-xs font-weight-bold text-white  text-uppercase mb-0">Buscar</div>
        <div class="h5 mb-0 font-weight-bold text-gray-800">
            <button   data-toggle="button" id="busquedacentros1" aria-pressed="false" autocomplete="off" class="btn btn-primary btn-sl" onclick="">Buscar
              <span class="fas fa-search" aria-hidden="true"></span>


          </div>

      </div>

  </div>


</div>



<div id="datoscentros"></div>           
</div>

</div>
</div>
</div>


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