<!--INICIO-->

<h1>Descubre alguno de nuestros productos</h1>

<div class="centro-web">
    <?php while($product = $productos->fetch_object()): ?>
        <div class="product">
            <a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
            <!-- Si se tiene imagen se muestra sino se pone una por defecto-->
                <?php if($product->imagen != null): ?>
                <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" width="100px" />
                <?php else: ?>
                    <img src="<?=base_url?>assets/img/img1.jpeg" width="100px"/>
                    <?php endif; ?>
                <h2><?=$product->nombre?></h2>
            </a>
            <p><?=$product->precio?>€</p>
            <a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button">Comprar</a>
        </div>
    <?php endwhile; ?>

</div>