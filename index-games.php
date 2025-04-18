<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos · Dark Pixel</title>
    <link rel="icon" href="../assets/img/icon2.png" type="assets/img/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Estilos para el banner */
        .banner {
            width: 100%;
            height: 300px;
            background-image: url('assets/img/banner.jpg');
            background-size: cover;
            background-position: center;
        }

        /* Estilos para el navbar */
        .navbar {
            display: flex;
            justify-content: center;
            background-color: black;
            padding: 10px 0;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 16px;
            font-family: 'Press Start 2P', cursive; /* Fuente pixelada */
        }

        .navbar a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        /* Aplicar la fuente pixelada a todo el cuerpo */
        body {
            font-family: 'Press Start 2P', cursive;
            background-color: black; /* Fondo negro */
            color: white; /* Texto blanco para contraste */
            margin: 0; /* Eliminar márgenes predeterminados */
        }

        /* Reducir el tamaño del carrusel */
        .carousel-inner img {
            height: 380px; /* Ajusta la altura del carrusel */
            object-fit: cover; /* Asegura que las imágenes se ajusten correctamente */
        }

        .card-text {
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Número máximo de líneas visibles */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        height: 4.5em; /* Ajusta según el número de líneas */
    }

    </style>

</head>
<body>
    <!-- Banner -->
    <div class="banner">
        <img src="../assets/img/banner.png" alt="Dark Pixel Banner" style="width: 100%; height: 100%; object-fit: cover;">
    </div>

    <!-- Navbar -->
    <nav class="navbar">
        <a href="../index.php">Inicio</a>
        <div class="dropdown">
            <a href="#genres" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Géneros</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#horror">Horror</a></li>
                <li><a class="dropdown-item" href="#survival">Supervivencia</a></li>
                <li><a class="dropdown-item" href="#psychological">Psicológico</a></li>
                <li><a class="dropdown-item" href="#graphic">A. Gráfica</a></li>
            </ul>
        </div>
        <a href="#downloads">Descargas</a>
        <a href="#contact">Información</a>
    </nav>

    <style>
        /* Estilos para el menú desplegable */
        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: black;
            border: 1px solid #575757;
            display: none;
            z-index: 1000;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-item {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            display: block;
        }

        .dropdown-item:hover {
            background-color: #575757;
        }
    </style>

    <!-- Título y descripción -->
<div style="text-align: center; margin: 20px 0; color: white;">
    <h1 style="font-size: 32px; font-family: 'Press Start 2P', cursive;">Catálogo</h1>
    <p style="font-size: 16px; max-width: 600px; margin: 10px auto;">
        Bienvenido a nuestro catálogo de juegos indie, donde encontrarás títulos únicos de todos los géneros. 
        Descubre experiencias inolvidables, desde aventuras gráficas hasta terror y supervivencia, creadas con pasión y creatividad.
    </p>
</div>

<!-- Presentación de juegos -->
<div class="container my-5">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <img src="assets/img/covers/game-yumenikki.jpg" class="card-img-top" alt="Juego 1">
                <div class="card-body">
                    <h5 class="card-title">Yume Nikki</h5>
                    <p class="card-text">Una chica solitaria explora sueños surrealistas en busca de algo que la libere de su encierro.</p>
                    <a href="game-form/game-yumenikki.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <img src="assets/img/covers/game-hylics.png" class="card-img-top" alt="Juego 2">
                <div class="card-body">
                    <h5 class="card-title">Hylics</h5>
                    <p class="card-text">Un RPG surrealista con gráficos únicos y una narrativa abstracta.</p>
                    <a href="game-form/game-hylics.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <img src="assets/img/covers/game-hylics2.jpg" class="card-img-top" alt="Juego 2">
                <div class="card-body">
                    <h5 class="card-title">Hylics 2</h5>
                    <p class="card-text">Un viaje psicodélico y surrealista para derrotar a una entidad maligna en un mundo de arcilla y sueños.</p>
                    <a href="game-form/game-hylics2.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <img src="assets/img/covers/game-fearandhunger.jpg" class="card-img-top" alt="Juego 1">
                <div class="card-body">
                    <h5 class="card-title">Fear & Hunger</h5>
                    <p class="card-text">Un RPG de terror grotesco donde cada decisión es una agonía y la muerte acecha en cada esquina.</p>
                    <a href="game-form/game-fearandhunger.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <img src="assets/img/covers/game-fearandhunger2.jpg" class="card-img-top" alt="Juego 2">
                <div class="card-body">
                    <h5 class="card-title">Fear & Hunger 2</h5>
                    <p class="card-text">Una secuela oscura y brutal donde la supervivencia depende de tus elecciones y sacrificios.</p>
                    <a href="form-game2.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        
        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <img src="assets/img/covers/game-flow.png" class="card-img-top" alt="Juego 3">
                <div class="card-body">
                    <h5 class="card-title">.flow</h5>
                    <p class="card-text">Un fangame oscuro y perturbador de Yume Nikki donde exploras pesadillas surrealistas llenas de criaturas grotescas y atmósfera opresiva.</p>
                    <a href="game-form/game-flow.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <img src="assets/img/covers/game-off.jpg" class="card-img-top" alt="Juego 2">
                <div class="card-body">
                    <h5 class="card-title">OFF</h5>
                    <p class="card-text">Un juego surrealista donde un misterioso "Batter" debe purificar un mundo extraño lleno de secretos y simbolismo.</p>
                    <a href="game-form/game-off.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>


    </div>
</div>

<footer style="background-color: black; color: white; text-align: center; padding: 20px 0; margin-top: 20px; font-size: 10px;">
    <p>&copy; 2025 Dark Pixel - Todos los derechos reservados.</p>
    <p>Síguenos en:
        <a href="https://facebook.com" target="_blank" style="color: #575757; text-decoration: none;">Facebook</a> |
        <a href="https://twitter.com" target="_blank" style="color: #575757; text-decoration: none;">Twitter</a> |
        <a href="https://instagram.com" target="_blank" style="color: #575757; text-decoration: none;">Instagram</a>
    </p>
</footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>