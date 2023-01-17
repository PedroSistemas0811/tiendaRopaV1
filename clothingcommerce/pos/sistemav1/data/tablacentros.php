<?php  require_once('../modelo/requestExistencias.php');
$articulo=$_GET['no_sap'];
$centro=$_GET['branches'];
$cexis=$_GET['exist'];
?>
<!DOCTYPE html>
<html lang="es">

<head>



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
    
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper">

                <!-- Main Content -->
                <div id="content">

          
</div>
<div class="col mr-1">
 <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
         <thead>
            <tr>
               <th>
                <center>
                    Usuario
                </center>
            </th>
            <th>
                <center>
                    Nombre 
                </center>
            </th>
            <th>
                <center>
                    Apellidos
                </center>
            </th>
            <th>
                <center>
                    Ultimo acceso
                </center>
            </th>
             <th>
                <center>
                    Extras
                </center>
            </th>


        </tr>
    </thead>
    <tbody>
        <?php 
        $json =getExistencias($articulo,$centro,$cexis);
        $jsonD = (Array)json_decode($json, true);
        if(isset($jsonD["result"])==null){

        }else{
             $articulo = $jsonD["result"];
            foreach($articulo as $it): 
            $dir= $it['centro'];
            ?>
            
            <tr >
                <td align="cneter">
                  <?= $dir['clave']; ?> 
             </td>
             <td align="left">
                <?= $dir['nombre']; ?>                                            
           </td>
           <td align="center">
            <?= $it['ARTICULO']; ?>                         
        </td>
         <td align="left">
            <?= $it['Descripcion']; ?>                         
        </td>
         <td align="center">
            <?= $it['ExitReal']; ?>                         
        </td>  

</tr>
<?php endforeach;  } 
?>
       
         


</tbody>
</table>
</div>
</div>
</div>
<!-- /.container-fluid -->

</div>





 
     

<script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>

<!-- Bootstrap core JavaScript-->


<!-- Custom scripts for all pages-->


<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
<script>
table = $('#example').DataTable( {
    paging: false,
    searching: false
} );
table.destroy();
</script>

</body>

</html>