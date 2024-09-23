<?php
// Obtener los datos de la ruta
$ruta = $_GET['idruta'];
$rutas = rutaCrontroller::selectAllRutasId($_GET['idruta']);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruta a <?= $rutas['nombre'] ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>

    <!-- Encabezado -->
    <header class="bg-primary text-white text-center py-5">
        <h1>Ruta <?= $rutas['nombre'] ?></h1>
        <p>Descubre la maravilla natural escondida en el Parque Nacional Natural Los Nevados</p>
    </header>

    <!-- Sección Principal -->

    <section class="container my-5">
        <div class="row">
            <!-- Imagen de la Laguna del Otún -->
            <div class="col-lg-6 col-md-12">
                <img src="imagenes/<?= $rutas['imagen'] ?>" class="img-fluid rounded" alt="Laguna del Otún">
                <div class="col-lg-6 col-md-12 d-flex justify-content-center text m-3">
                    <a href="index.php?modulo=comentario&rutaid=<?= $rutas['id'] ?>" class="btn btn-primary">agregar comentario</a>
                </div>
                <?php
                if ($rutas['creado_por'] == $_SESSION['nombre']):
                ?>
                    <div class="container">
                        <table class="table-dark">
                            <thead>
                                <tr>
                                    <th class="">ACCION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="index.php?modulo=eliminar&eliminar=<?=$ruta?>" class="btn btn-danger">ELIMINAR</a></td>
                                    <td><a href="index.php?modulo=editar&eliminar=<?=$ruta?>" class="btn btn-success">EDITAR</a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                <?php endif; ?>
                <?php
                $comentarios = ComentarioController::selectAllComentarios($_GET['idruta']);
                foreach ($comentarios as $comentario):
                ?>
                    <div class="comment-card mb-4 p-3">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3">
                                <img src="https://via.placeholder.com/50" alt="avatar" class="rounded-circle">
                            </div>
                            <div>
                                <h6 class="m-0"><?= $comentario['nombre'] ?></h6>
                            </div>
                        </div>
                        <p class="mb-1"><?= $comentario['comentario'] ?></p>
                        <small class="text-muted">Publicado <?= $comentario['hora'] ?></small>
                    </div>
            </div>
        <?php endforeach ?>
        <!-- Descripción de la Ruta -->
        <div class="col-lg-6 col-md-12">
            <h2>Acerca de <?= $rutas['nombre'] ?></h2>
            <p>
                <?= $rutas['descripcion'] ?>
            </p>
            <h4>Detalles de la Ruta:</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Distancia:</strong> <?= $rutas['distancia'] ?>
                </li>
                <li class="list-group-item">
                    <strong>Dificultad:</strong> <?= $rutas['dificultad'] ?>
                </li>
                <li class="list-group-item">
                    <strong>Duración:</strong> <?= $rutas['duracion'] ?>
                </li>
                <li class="list-group-item">
                    <strong>Altitud máxima:</strong> <?= $rutas['altitud'] ?>
                </li>
                <li class="list-group-item">
                    <strong>Mejor época para visitar:</strong> <?= $rutas['epoca'] ?>
                </li>
            </ul>
        </div>
        </div>
    </section>
    <!-- Sección de Información Extra -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Información adicional</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Cómo llegar</h5>
                            <p class="card-text">
                                <?= $rutas['como_llegar'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Recomendaciones</h5>
                            <p class="card-text">
                                <?= $rutas['recomendaciones'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Observación de fauna</h5>
                            <p class="card-text">
                                <?= $rutas['observaciones'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Ruta a la Laguna del Otún. Todos los derechos reservados.</p>
        <h1>creado por <?= $rutas['creado_por'] ?></h1>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>