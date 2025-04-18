<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Pixel - Indie Horror Games</title>
    <link rel="icon" href="assets/img/icon2.png" type="assets/img/icon.png">
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
    </style>

</head>
<body>
    <!-- Banner -->
    <div class="banner">
        <img src="assets/img/banner.png" alt="Dark Pixel Banner" style="width: 100%; height: 100%; object-fit: cover;">
    </div>

    <!-- Navbar -->
    <nav class="navbar">
        <a href="#home">Inicio</a>
        <div class="dropdown">
        <a href="games/index-games.php">Juegos</a>
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

    <!-- Carrusel de Bootstrap -->
    <div id="carouselExample" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/black.jpg" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bienvenido a Dark Pixel</h5>
                <p>Explora los mejores juegos indie de horror.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/black.jpg" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Sumérgete en la Oscuridad</h5>
                <p>Descubre mundos aterradores y emocionantes.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/black.jpg" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Descargas Exclusivas</h5>
                <p>Obtén acceso a contenido único y gratuito.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
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
</html>