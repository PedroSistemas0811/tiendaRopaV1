
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
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                 <div class="row no-gutters align-items-center">
                   <div class="col mr-1">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-0">Fecha Inicial</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                     <input type="date" name="descripf"  id="descripf" class="col-sm-12  form-control" >                                        
                   </div>

                 </div>

               <div class="col mr-1">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-0">Fecha Final</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                     <input type="date" name="descripf"  id="descripf" class="col-sm-12  form-control" >                                        
                   </div>

                 </div>
               
            
           <div class="col mr-6">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1" >
            Buscar</div>
            <div class="h5 mb-1 font-weight-bold text-gray-800">
              <button  data-toggle="button" id="busquedacentros1" aria-pressed="false" autocomplete="off" class="btn btn-success btn-sl" onclick="">Buscar
                <span class="fas fa-search" aria-hidden="true"></span>
              </button>                                    
            </div>

          </div>
           <div class="col mr-6">
            <div class="text-xs font-weight-bold text-white text-uppercase mb-1" >dasads
            </div>
            <div class="h5 mb-1 font-weight-bold text-gray-800">
              <button  data-toggle="button" id="busquedacentros1" aria-pressed="false" autocomplete="off" class="btn btn-success btn-sl" onclick="">Nueva venta
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




</div>
<div id="datoscentros"></div>
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
<!-- Logout Modal-->



<div id="datoscentros">
    
</div>   
<?php include_once('modales/buscararticulos.php'); ?>

<script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="assets/js/regis.js"></script>
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