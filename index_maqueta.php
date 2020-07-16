<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de camisetas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div id="container">
        <!-- Cabecera -->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta Logo">
                <a href="index.php">
                    Tienda de camisetas
                </a>
            </div>
        </header>
        <!-- Menu -->
        <nav id="menu">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Categoria 2</a></li>
                <li><a href="#">Categoria 3</a></li>
                <li><a href="#">Categoria 4</a></li>
                <li><a href="#">Categoria 5</a></li>
                <li><a href="#">Categoria 6</a></li>
            </ul>
        </nav>

        <div class="content">
            <!-- Barra lateral -->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <form action="#" method="POST">
                        <h3>Entrar a la web</h3>
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password">
                        <input type="submit" value="Enviar">
                    </form>
                    <ul>
                        <li>
                            <a href="">Mis pedidos</a>
                        </li>
                        <li>
                            <a href="">Gestionar pedidos</a>
                        </li>
                        <li>
                            <a href="">Gestionar categorias</a>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- Contenido central -->
            <div id="central">
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
            </div>
        </div>
        <!-- Pie de página -->
        <footer id="footer">
            <p>Desarrollado por Alejandro Alamar &copy; <?= date("Y"); ?></p>
        </footer>
    </div>
</body>

</html>