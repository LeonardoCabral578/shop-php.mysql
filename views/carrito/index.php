<h1>Carrito de la compra</h1>

<?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1) : ?>
    <table>
        <tr>
            <th>Imágen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
            <th>Elminar</th>
        </tr>

        <?php foreach ($carrito as $indice => $elemento) :
            $producto = $elemento['producto'];
            $units = $elemento['unidades'];
        ?>
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
                    <?= $units ?>
                </td>
                <td>
                    <a href="<?= base_url ?>carrito/delete&index=<?=$indice?>" class="button button-carrito button-red">Quitar producto</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
    <br>

    <div class="delete-carrito">
        <a href="<?= base_url ?>carrito/delete_all" class="button button-delete button-red">Vaciar carrito</a>
    </div>

    <div class="total-carrito">
        <?php $stats = Utils::statsCarrito(); ?>

        <h3>Total: $ <?= $stats['total'] ?></h3>

        <a href="<?= base_url ?>pedido/hacer" class="button button-pedido">Hacer pedido</a>
    </div>

<?php else : ?>
    <p>El carrito está vacío, añade algún producto.</p>
<?php endif; ?>