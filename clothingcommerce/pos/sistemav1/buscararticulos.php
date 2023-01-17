<?php  require_once('modelo/requestProds.php');
?>
<!DOCTYPE html>
<html lang="es">
<body >
    <div class="form-group">

<div class="col-sm-14" align="center">

     SKU <input type="text" name="sku1" id="sku1">
      Descripcion<input type="text" name="descrip1" id="descrip1">
      Barcode<input type="text" name="barcode1" id="barcode1">
</div>
      

      <div class="col-sm-14" align="center">
        <br> 
        <button  data-toggle="button" id="busquedaart1" aria-pressed="false" autocomplete="off" class="btn btn-primary btn-sl" onclick="">Buscar
            <span class="fas fa-search" aria-hidden="true"></span>
        </button>

    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
         <thead>
            <tr>
               <th>
                <center>
                    Articulo
                </center>
            </th>
            <th>
                <center>
                    Descripcion 
                </center>
            </th>
            <th>
                <center>
                    Barcode
                </center>
            </th>
            <th>
                <center>
                    Seleccionar
                </center>
            </th>


        </tr>
    </thead>
    <tbody>
        <?php 
        $json =getArticulos();
        $jsonD = (Array)json_decode($json, true);
        $articulo = $jsonD["result"];
        foreach($articulo as $it): ?>
            <tr align="center">
                <td align="left">
                 <?= $it['ARTICULO']; ?>  
             </td>
             <td align="center">
               <?= $it['DESCRIP']; ?>                             
           </td>
           <td align="center">
            <?= $it['codigoBarras']; ?>                         
        </td>

        <td align="center">
         <button onclick="cancelaTarea('<?= $it['ARTICULO']; ?>');" style="width: 80px" type="button" class="btn btn-danger btn-xs">
            <span class="fas fa-hand-pointer" aria-hidden="true"></span>
        </button>                          
    </td>
</center>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
<div >
             <div><label  aling="left">Pregunta 6</label></div>
                            
                                <br></br><br></br>
                                <div id="articulosdt"></div>
                          
                                         
                        </div>
<script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="assets/js/regis.js"></script>
<script type="text/javascript">

</script>
</body>

</html>