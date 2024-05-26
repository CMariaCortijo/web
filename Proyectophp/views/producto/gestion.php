<h1>Gestión de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">
Crear producto
</a>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
<strong class="alert_ok">Producto se ha editado con éxito</strong>

<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>
    <strong class="alert_bad">El producto NO se ha editado correctamente, intentelo de nuevo</strong>

<?php endif ?>
<?php Utils::deleteSession('producto');?>

    <?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
<strong class="alert_ok">Producto se ha borrado con éxito</strong>

<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>
    <strong class="alert_bad">El producto NO se ha borrado correctamente, intentelo de nuevo</strong>


<?php endif ?>
<?php Utils::deleteSession('delete');?>
<table>
<tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>STOCK</th>
        <th>PROCESO</th>
        
    </tr>
<?php while ($pro = $productos->fetch_object()) : ?>

    <tr>
        <td> <?=$pro->id;?></td>
        <td> <?=$pro->nombre;?></td>
        <td> <?=$pro->precio;?>€</td>
        <td> <?=$pro->stock;?></td>
        <td>
            <!--Ruteo y señalización del producto a eliminar-->
            <a href="<?=base_url?>/producto/editar&id=<?=$pro->id?>" class="button button-acciones">Editar</a>
            <a href="<?=base_url?>/producto/eliminar&id=<?=$pro->id?>" class="button button-acciones">Eliminar</a>
        </td>
    </tr>
    </tr>
    <?php endwhile; ?>
</table>