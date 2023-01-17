<?php 
    require_once('../class/Ventas.php');
    $fechainicial = $_POST['fechainicial'];
	$fechafinal = $_POST['fechafinal'];
    $items = $item->all_Ventas($fechainicial,$fechafinal);
 ?>
<br /><br /><h4  style="text-align:center">Ventas pendientes.</h4>
<br />
<div class="row col-md-12 mr-2">
<div class="table-responsive">
    <html lang="es_mx">
        <table id="example" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID Venta</th>
                    <th>Fecha</th>
                    <th>Importe</th>
                    <th>N° Articulos</th>
                    <th>Descuento</th>
                     <th>
                        <center>Extras</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $it): ?>
                    <tr align="center">
                        <td align="center"><?= $it['id_venta']; ?></td>
                        <td align="left"><?= ucwords($it['fecha']); ?></td>
                        <td align="right">$<?= number_format($it['importe_total'],2);?></td>
                        <td align="right"><?= $it['articulos_cant']; ?></td>      
                        <td align="right">$<?= number_format($it['descuento'],2); ?></td>
                          <td>
                           <center>
                                <button onclick="continuarVenta('<?= $it['id_venta']; ?>');" type="button" class="btn btn-warning btn-xs">Editar
                                <span class="fas fa-edit" aria-hidden="true"></span>
                                </button>
                                <button onclick="continuarVenta('<?= $it['id_venta']; ?>');" type="button" class="btn btn-danger btn-xs">Eliminar
                                <span class="fas fa-eraser" aria-hidden="true"></span>
                                </button>
                           </center>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


<?php 
$item->Disconnect();
 ?>