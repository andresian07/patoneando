<?php
session_start();

// MODELS
require_once "models/conexion.php";
require_once "models/InicioModel.php";
require_once "models/comentarioModel.php";
require_once "models/rutaModel.php";
require_once "models/loginModel.php";

//CONTROLLERS
require_once "controllers/InicioController.php";
require_once "controllers/comentarioController.php";
require_once "controllers/rutaController.php";
require_once "controllers/loginController.php";



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas de Montaña</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

</head>
<!-- Sección de Encabezado -->
<?php
// Verifica si el módulo es diferente de 'login' para mostrar el navbar
if (!isset($_GET['modulo']) || $_GET['modulo'] != 'login'):
?>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#">PATONEANDO</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?modulo=inicio">RUTAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/logout.php">CERRAR SECCIÓN</a>
                    </li>
                </ul>
                <!-- Aquí usamos ml-auto para empujar el contenido a la derecha -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <!-- Verificación de sesión -->
                        <p class="nav-link text-white mb-0"><?= "Bienvenido " . $_SESSION['nombre'] ?></p>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<?php endif; ?>

<body>
    <main>
        <?php
        $modulo = isset($_GET['modulo']) ? $_GET['modulo'] : 'login';

        switch ($modulo) {
            case 'login':
                include_once "views/login.php";
                break;
            case 'inicio':
                include_once "views/inicio.php";
                break;
            case 'laguna':
                include_once "views/laguna.php";
                break;
            case 'crearRuta':
                include_once "views/crearRuta.php";
                break;
            case 'comentario':
                include_once "views/comentario.php";
                break;

            case "crearLogin":
                include_once "views/crearLogin.php";
                break;

            case "eliminar":
                include_once "views/eliminar.php";
                break;

            case "editar":
                include_once "views/editarRuta.php";
                break;
        }




        ?>
    </main>





    <!-- Pie de Página -->
    <footer class="bg-dark text-white text-center p-4">
        <p>&copy; 2024 Rutas de Montaña. Todos los derechos reservados.</p>
        <div>
            <a href="#" class="text-white mx-2">Instagram</a>
            <a href="#" class="text-white mx-2">Facebook</a>
            <a href="#" class="text-white mx-2">Twitter</a>
        </div>
    </footer>

    <!-- Bootstrap JS y Dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>