<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sakura Petal Shop</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div id="container">
    <!--CABECERA-->
    <header id="header">
        <div id="logo">
            <img src="assets/_abac9e21-f33f-477d-9e4c-2dcccb3d3884.jpeg" alt="Tienda logo"/>
            <a href="index.php">
                Sakura Petal
            </a>
        </div>
    </header>
    <!--MENU-->

    <nav id="menu">

        <ul>
            <li>
                <a href="#">Inicio</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="#">Novedades</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="#">Cuerpo</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="#">Belleza</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="#">Hogar</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="#">Regalos</a>
            </li>
        </ul>

</nav>
<div id="content">
<!--BARRA LATERAL-->
<aside id="lateral">
    <div id="login" class="block_aside">
        <h3> 
            Inicia sesión. </h3>
        <form action="#" method="post">
            <label for="email">Email</label>
            <input type="email" name="email">
            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <input type="submit" value="Enviar">
        </form>
        <ul>
        <li><a href="#">Mis pedidos</a></li>
        <li><a href="#">Gestionar pedidos</a></li>
        <li><a href="#">Gestionar categorias</a></li>
        </ul>
    </div>
</aside>

<!-- CONTENIDO PRINCIPAL -->
    <div id="central">
        <h1>Productos destacados</h1>
        <div class="product">
            <img src="assets/img/_e9c9a7a5-50f0-4822-b7e6-bc96b0bf0f66.jpeg" width="100px" />
            <h2>Crema Facial</h2>
            <p>3€</p>
            <a href="" class="button">Comprar</a>
        </div>

        <div class="product">
            <img src="assets/img/_e9c9a7a5-50f0-4822-b7e6-bc96b0bf0f66.jpeg" width="100px"/>
            <h2>Crema Facial</h2>
            <p>3€</p>
            <a href="" class="button">Comprar</a>
        </div>

        <div class="product">
            <img src="assets/img/_e9c9a7a5-50f0-4822-b7e6-bc96b0bf0f66.jpeg" width="100px"/>
            <h2>Crema Facial</h2>
            <p>3€</p>
            <a href="" class="button">Comprar</a>
        </div>

        <div class="product">
            <img src="assets/img/_e9c9a7a5-50f0-4822-b7e6-bc96b0bf0f66.jpeg" width="200px"/>
            <h2>Crema Facial</h2>
            <p>3€</p>
            <a href="" class="button">Comprar</a>
        </div>

        <div class="product">
            <img src="assets/img/_e9c9a7a5-50f0-4822-b7e6-bc96b0bf0f66.jpeg" width="100px"/>
            <h2>Crema Facial</h2>
            <p>3€</p>
            <a href="" class="button">Comprar</a>
        </div>

        <div class="product">
            <img src="assets/img/_e9c9a7a5-50f0-4822-b7e6-bc96b0bf0f66.jpeg" width="100px"/>
            <h2>Crema Facial</h2>
            <p>3€</p>
            <a href="" class="button">Comprar</a>
        </div>
    </div>
<!--PIE PÁGINA-->

<footer id="footer">
    <p>Desarrollado por Carmen María Cortijo &copy; <?=date('Y')?></p>
</footer>
</div>
</div>
</body>
</html>