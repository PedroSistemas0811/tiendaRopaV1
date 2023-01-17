<?php 
    require_once('../class/Catalogos.php');
    $claveArticulo = $_POST['claveArticulo'];
    $descArticulo  = $_POST['descArticulo'];
    if(isset($_POST['claveArticulo']) && $claveArticulo != ''){
        $items = $item->all_Catalogos1($claveArticulo); 
    }else{
        $items = $item->all_Catalogos($claveArticulo,$descArticulo);
    }
    $posicion = -1;
 ?>
<br/>
<div class="row col-md-12 mr-2">
<div class="table-responsive">
    <html lang="es_mx">
        <table id="example" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Descripcion</th>
                    <th>Talla</th>
                    <th>Color</th>
                    <th>Precio</th>
                     <th>
                        <center>Extras</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $it): $posicion=$posicion+1;?>
                    <tr align="center">
                        <td align="left"><?= $it['clave_prod']; ?></td>
                        <td align="left"><?= $it['modelo']; ?></td>
                        <td align="left"><?= $it['marca']; ?></td>
                        <td align="left"><?= $it['descripcion']; ?></td>      
                        <td align="center"><?= $it['talla']; ?></td>
                        <td align="center"><?= $it['color']; ?></td>
                        <td align="right">$<?= number_format($it['precio'],2); ?></td>
                          <td>
                           <center>
                                <button onclick="verInfoProducto(<?= $posicion; ?>);" type="button" class="btn btn-warning btn-xs">Editar
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
                           </center>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>
</div>
<br /><br /><br /><br /><br /><br />

<script type="text/javascript">
 var datosArticulo = <?php echo json_encode($items);?>;
 console.log(datosArticulo);
</script>

<?php 
$item->Disconnect();
 ?>