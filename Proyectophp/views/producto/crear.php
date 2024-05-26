<!--Reutilizar Crear & Editar el mismo form-->


<?php if(isset($edit) && isset($pro) && is_object($pro)): ?>
	<h1>Editar producto <?=$pro->nombre?></h1>
	<?php $url_action = base_url."producto/save&id=".$pro->id; ?>
	
<?php else: ?>
	<h1>Crear nuevo producto</h1>
	<?php $url_action = base_url."producto/save"; ?>
<?php endif; ?>
	
<div class="label-centro">
	<!--Necesitamos el multipart para poder enviar imagenes-->
	<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
		<label for="nombre">Nombre</label>
        <!--La ruta nos muestra el nombre mediante un ternario-->
		<input type="text" name="nombre" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>"/>
		<!--Como compartimos crear y editar necesitamos el isset y el is_object para saber si esta relleno en caso de editar sino estara vacio-->
		<label for="descripcion" >Descripción</label>
		<textarea name="descripcion" style= "height: 217px; width: 399px;"><?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>

		<label for="precio">Precio</label>
		<input type="text" name="precio" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>"/>

		<label for="stock">Stock</label>
		<input type="number" name="stock" value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>"/>

		<label for="categoria">Categoria</label>
		<?php $categorias = Utils::showCategorias(); ?>
		<select name="categoria">
			<?php while ($cat = $categorias->fetch_object()): ?>
                <!--Añadimos el $cat para que nos devuelva el selected-->
				<option value="<?= $cat->id ?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
					<?= $cat->nombre ?>
				</option>
			<?php endwhile; ?>
		</select>
		
		<label for="imagen">Imagen</label>
        <!--Muestra la imagen en pantalla-->
		<?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
			<img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" class="miniatura"/> 
		<?php endif; ?>
		<input type="file" name="imagen" />
		
		<input type="submit" value="Guardar" />
	</form>
</div>