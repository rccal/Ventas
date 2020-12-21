<?php
include_once 'Layout.php'; 
include_once '../Controladores/Carrito.php'; 
include_once '../Controladores/config.php';
    $boton=$_POST['btnagregar'];
    $id=openssl_decrypt($_POST['id'],CODE,KEY);
    $nombre=openssl_decrypt($_POST['nombre'],CODE,KEY);
    $precio=openssl_decrypt($_POST['precio'],CODE,KEY);
    $cantidad=openssl_decrypt($_POST['cantidad'],CODE,KEY);
    $carrito=new carrito();
    $pruebacarrito=$carrito->add($boton,$id,$nombre,$precio,$cantidad);
    
?>
<h3>Lista del carrito</h3>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th width="40%">Descripcion</th>
            <th width="15%">Cantidad</th>
            <th width="20%" >Precio</th>
            <th width="20%">Total</th>
            <th width="5%">--</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td >eeee</td>
                <td>esddd</td>
                <td>sedr</td>
                <td><button class="btn btn-danger" type="button">Eliminar</button></td>
            </tr>
            <tr>
                <td colspan="3" align="right"><h3>Total</h3></td>
                <td align="right"><h3>$<?php echo number_format(300,2) ?></h3></td>
            </tr>
            
        </tbody>
</table>