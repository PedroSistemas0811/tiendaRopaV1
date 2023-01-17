<?php 
require_once('modelo/requestProds.php');
?>
<br />

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
         <button onclick="enviararticulo('<?= $it['ARTICULO']; ?>');" style="width: 80px" type="button" class="btn btn-danger btn-xs">
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