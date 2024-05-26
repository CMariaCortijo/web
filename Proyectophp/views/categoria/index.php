<!--INDICE LATERAL PARA GESTIONAR CATEGORIAS-->


<h1>Gestionar Categorías</h1>

<a href="<?=base_url?>categoria/crear" class="button button-small">
Crear categoria
</a>
<table>
<tr>
        <th>ID</th>
        <th>NOMBRE</th>
    </tr>
    <!--Recorremos los resultados de $categorias asignando a $cat los metodos y propiedades  -->
<?php while ($cat = $categorias->fetch_object()) : ?>

    <tr>
        <td> <?=$cat->id;?></td>
        <td> <?=$cat->nombre;?></td>
    </tr>
    </tr>
    <?php endwhile; ?>
</table>