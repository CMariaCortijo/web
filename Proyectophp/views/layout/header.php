<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> &#10048; Sakura Petal Shop
&#10048;</title>
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
</head>
<body style="background-image: url('<?=base_url?>/assets/img/3.jpg'); background-size: cover;">>
    <div id="container">
    <!--CABECERA-->
    <header id="header">
        <div id="logo">
            <img src="<?=base_url?>/assets/img/logos.webp" />
            <a href="<?=base_url?>">
Sakura Petal</a>
        </div>
    </header>
    <!--MENU-->

    <?php $categorias = Utils::showCategorias(); ?>
    <nav id="menu">

        <ul>
            <li>
                <a href="<?=base_url?>">Inicio</a>
            </li>
        
        <?php while($cat = $categorias->fetch_object()) :?>
            <li>
                <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
            </li>
            <?php endwhile; ?>
        </ul>
</nav>
<div id="content">