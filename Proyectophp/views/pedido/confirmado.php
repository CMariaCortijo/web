<!--CONFIRMACION-->

<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
	<h1>Tu pedido se ha confirmado</h1>
	<p>
    ¡Tu solicitud ha sido registrada con éxito!<br><br> Una vez que hayas completado tu pago 
    procederemos a su procesamiento y envío. <br> Si tienes alguna duda sobre el pedido o quieres que te asesoremos sobre como usarlo no dudes en ponerte en contacto con nosotros:
	<br><br><br><a class="mails" href="sakurapetalasesoramiento@gmail.com">Asesoramiento personalizado</a><br><br><br>
	<a class="mails" href="spincidencias@gmail.com">Incidencias generales</a>
    <br>
	<br>&#127881;¡Gracias por confiar en nosotros! &#127881;
	</p>
	<br>
	<br/>
	<?php if (isset($pedido)): ?>
		<h3>Datos del pedido:</h3>
		<br>

		Número de pedido: <?= $pedido->id ?>   <br/>
		<br>
		Total a pagar: <?= $pedido->coste ?> $ <br/>
		

		<table>
			<tr>
				<th>Imagen</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Unidades</th>
			</tr>
			<?php while ($producto = $productos->fetch_object()): ?>
				<tr>
					<td>
						<?php if ($producto->imagen != null): ?>
							<img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" />
						<?php else: ?>
							<img src="<?= base_url ?>/assets/img/img1.jpeg" class="img_carrito" />
						<?php endif; ?>
					</td>
					<td>
						<a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
					</td>
					<td>
						<?= $producto->precio ?>
					</td>
					<td>
						<?= $producto->unidades ?>
					</td>
				</tr>
			<?php endwhile; ?>
		</table>

	<?php endif; ?>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
	<h1>Tu pedido NO ha podido procesarse</h1>
<?php endif; ?>
