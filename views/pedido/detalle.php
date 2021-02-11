<h1>Detalles del pedido</h1>

<?php if (isset($pedido)) : ?>
    <h3>Dirección de envío:</h3>
    <strong>Provincia: </strong><?=$pedido->provincia?> <br>
    <strong>Localidad: </strong><?=$pedido->localidad?> <br>
    <strong>Dirección: </strong><?=$pedido->direccion?> <br><br>

    <h3>Datos del pedido:</h3>

    <strong>Pedido N°:</strong> <?= $pedido->id ?> <br>

    <strong>Productos: </strong>

    <table>

        <tr>
            <th>Imágen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
        </tr>

        <?php while ($producto = $productos->fetch_object()) : ?>
            <tr>
                <td>
                    <?php if ($producto->imagen != null) : ?>
                        <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" alt="Img Producto">
                    <?php else : ?>
                        <img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito" alt="Img Producto">
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
                </td>
                <td>
                    $ <?= $producto->precio ?>
                </td>
                <td>
                    <?= $producto->unidades ?>
                </td>
            <tr>

            <?php endwhile; ?>
    </table>
    <br>
    <div class="total-carrito">
        <h3>Total a pagar: $ <?= $pedido->coste ?></h3>
    </div>

<?php endif; ?>