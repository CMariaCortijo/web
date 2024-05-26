<!-- PAGINAS DE LAS CATEGORIAS-->

<?php if (isset($categoria)):?>
    <h1><?=$categoria->nombre?></h1>
    <?php if($productos->num_rows == 0): ?>
        <p>No hay ningún producto</p>
        <?php else: ?>


            <!--Reutilizamos código de destacados.php-->
            <div class="centro-web">
            <?php while($product = $productos->fetch_object()): ?>
        
        <div class="product">
            <a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
                <?php if($product->imagen != null): ?>
                    <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" width="100px" />
                <?php else: ?>
                    <img src="<?=base_url?>assets/img/img1.jpeg" width="100px"/>
                <?php endif; ?>
                    <h2><?=$product->nombre?></h2>
                </a>
                <p><?=$product->precio?>€</p> 
            <a href="<?=base_url?>/carrito/add&id=<?=$product->id?>" class="button">Comprar</a>
       </div>
    <?php endwhile; ?>
            </div>


        <?php endif; ?>
<?php else: ?>

    <h1>La categoria no existe</h1>

<?php endif; ?>