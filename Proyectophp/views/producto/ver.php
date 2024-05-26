<!--Reutilización del código de categoria/ver.php-->

<?php if (isset($product)):?>
    <h1><?=$product->nombre?></h1>

<!--Reutilizamos código de destacados.php-->
<div id="detail-product">
    <div class="image">
        <?php if($product->imagen != null): ?>
            <img src="<?=base_url?>/uploads/images/<?=$product->imagen?>" width="200px" />

        <?php else: ?>
            <img src="<?=base_url?>assets/img/img1.jpeg" width="200px"/>
        <?php endif; ?>
    </div>
    <div class="data">
        <h2 class="description"><?=$product->descripcion?></h2>
        <p class="price"><?=$product->precio?>€</p>
        <a href="<?=base_url?>/carrito/add&id=<?=$product->id?>" class="button">Comprar</a>
    </div>
</div>
<?php else: ?>
    <h1>El producto no existe</h1>
<?php endif; ?>