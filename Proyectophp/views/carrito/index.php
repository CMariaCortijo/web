<!--VER CARRITO-->

<h1>Carrito de la compra</h1>

<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>
<table>
	<tr>
		<th>Imagen</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Unidades</th>
		<th>Eliminar</th>
	</tr>
	<?php
	
	//conseguimos indice y producto
		foreach($carrito as $indice => $elemento): 
		$producto = $elemento['producto'];
	?>
	
	<tr>
		<td>
			<?php if ($producto->imagen != null): ?>
				<img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" />
			<?php else: ?>
				<img src="<?= base_url ?>assets/img/img1.jpeg" class="img_carrito" />
			<?php endif; ?>
		</td>
		<td>
			<!--Conseguir el valor del ID del objeto -->
			<a href="<?= base_url ?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
		</td>
		<td>
			<?=$producto->precio?>
		</td>
		<td>
			<!--El elemento es un array para las unidades-->
			<?=$elemento['unidades']?>
			<div class="updown-unidades">
				<a href="<?=base_url?>carrito/up&index=<?=$indice?>" class="button button-unidades">+</a>
				<a href="<?=base_url?>carrito/down&index=<?=$indice?>" class="button button-unidades">-</a>
			</div>
		</td>
		<td>
			<a href="<?=base_url?>carrito/delete&index=<?=$indice?>" class="button button-eliminar">Quitar producto</a>
		</td>
	</tr>
	
	<?php endforeach; ?>
</table>
<br/>
<div class="delete-carrito">
	<a href="<?=base_url?>carrito/delete_all" class="button button-clean">Vaciar carrito</a>
</div>
<div class="total-carrito">
	<?php $stats = Utils::statsCarrito(); ?>
	<h3>Precio total: <?=$stats['total']?> $</h3>
	<a href="<?=base_url?>pedido/hacer" class="button button-buy">Hacer pedido</a>
</div>

<?php else: ?>
	<p>El carrito está vacio. &#128558;</p>
<?php endif; ?>