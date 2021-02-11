<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>
    <h1>Tu pedido de ha confirmado</h1>
    <p>
        Tu pedido ha sido guardado con éxito, una vez que realices la transferencia bancaria a la cuenta 6959399104562
        con el coste del pedido, será procesado y enviado.
    </p>
    <br>

    <?php if ($pedido) : ?>
        <h3>Datos del pedido:</h3>
        <br>

        <strong>Pedido N°:</strong> <?= $pedido->id ?> <br><br>

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

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'confirm') : ?>
    <h1>Tu pedido no ha podido confirmarse</h1>


<?php endif; ?>