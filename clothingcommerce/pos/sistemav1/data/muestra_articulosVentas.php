<?php 
    require_once('../class/Ventas.php');
    $items = $item->all_items();
 ?>
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
                        <td align="left"><?= $it['id_venta']; ?></td>
                        <td align="left"><?= ucwords($it['fecha']); ?></td>
                        <td align="left"><?= number_format($it['importe_total'],2);?></td>
                        <td align="left"><?= $it['articulos_cant']; ?></td>      
                        <td align="right">$<?= number_format($it['descuento'],2); ?></td>
                          <td>
                           <center>
                                <button onclick="continuarVenta('<?= $it['id_venta']; ?>');" type="button" class="btn btn-warning btn-xs">Editar
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
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <script type="text/javascript">
                            $(document).ready(function() {
                                $('#example').DataTable({
                                    "lengthMenu": [[50, 75, 100, -1], [50, 75, 100, "Todos"]]
                                });
                            });
                            
                        </script>


<?php 
$item->Disconnect();
 ?>