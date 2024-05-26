<?php if (isset($_SESSION['identity'])): ?>
	<h1>Haga su pedido</h1>
	<p>
	<div class="label-centro2">
		<a href="<?= base_url ?>carrito/index">Ver los productos</a>
	</p>
	<br/>
	
	<h3>Datos de envio:</h3>
	<form action="<?=base_url.'pedido/add'?>" method="POST">
		<label for="provincia">Provincia</label>
		<select id="provincia" name="provincia">
			<option value="">Selecciona una provincia</option>
			<option value="A Coruña">A Coruña</option>
			<option value="Álava">Álava</option>
			<option value="Albacete">Albacete</option>
			<option value="Alicante">Alicante</option>
			<option value="Almería">Almería</option>
			<option value="Asturias">Asturias</option>
			<option value="Ávila">Ávila</option>
			<option value="Badajoz">Badajoz</option>
			<option value="Barcelona">Barcelona</option>
			<option value="Burgos">Burgos</option>
			<option value="Cáceres">Cáceres</option>
			<option value="Cádiz">Cádiz</option>
			<option value="Cantabria">Cantabria</option>
			<option value="Castellón">Castellón</option>
			<option value="Ciudad Real">Ciudad Real</option>
			<option value="Córdoba">Córdoba</option>
			<option value="Cuenca">Cuenca</option>
			<option value="Gerona">Gerona</option>
			<option value="Granada">Granada</option>
			<option value="Guadalajara">Guadalajara</option>
			<option value="Guipúzcoa">Guipúzcoa</option>
			<option value="Huelva">Huelva</option>
			<option value="Huesca">Huesca</option>
			<option value="Islas Baleares">Islas Baleares</option>
			<option value="Jaén">Jaén</option>
			<option value="La Rioja">La Rioja</option>
			<option value="Las Palmas">Las Palmas</option>
			<option value="León">León</option>
			<option value="Lérida">Lérida</option>
			<option value="Lugo">Lugo</option>
			<option value="Madrid">Madrid</option>
			<option value="Málaga">Málaga</option>
			<option value="Murcia">Murcia</option>
			<option value="Navarra">Navarra</option>
			<option value="Orense">Orense</option>
			<option value="Palencia">Palencia</option>
			<option value="Pontevedra">Pontevedra</option>
			<option value="Salamanca">Salamanca</option>
			<option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
			<option value="Segovia">Segovia</option>
			<option value="Sevilla">Sevilla</option>
			<option value="Soria">Soria</option>
			<option value="Tarragona">Tarragona</option>
			<option value="Teruel">Teruel</option>
			<option value="Toledo">Toledo</option>
			<option value="Valencia">Valencia</option>
			<option value="Valladolid">Valladolid</option>
			<option value="Vizcaya">Vizcaya</option>
			<option value="Zamora">Zamora</option>
			<option value="Zaragoza">Zaragoza</option>
	</select>

		<label for="nombre">Nombre & Apellidos</label>
		<input type="text" name="nombre" required />

		<label for="ciudad">Ciudad</label>
		<input type="text" name="localidad" required />
		
		<label for="direccion">Dirección</label>
		<input type="text" name="direccion" required />

	
		
		<input type="submit" value="Confirmar pedido" name="confirmar_pedido"/>
	</form>
		
<?php else: ?>
	<h1>Necesitas estar identificado para poder ver tus pedidos</h1>
	<p>Por favor, inicia sesión o regístrate para poder hacer tus pedidos</p>
<?php endif; ?>
</div>
