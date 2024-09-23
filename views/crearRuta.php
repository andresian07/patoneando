<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <form class="p-4 border rounded shadow-sm bg-white" action="index.php?modulo=crearRuta" method="post" enctype="multipart/form-data">
                    <h4 class="text-center mb-4">Registrar Ruta</h4>
                    
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Creador del post</label>
                        <input type="text" class="form-control" id="creado_por" name="creado_por" value="<?=$_SESSION['nombre']?>" readonly required>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el título" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripción de la ruta" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">distancia</label>
                        <input type="text" class="form-control" id="distancia" name="distancia" placeholder="Ingrese el título" required>
                    </div>
                    <div class="mb-3">
                        <label for="dificultad" class="form-label">Dificultad</label>
                        <input type="text" class="form-control" name="dificultad" id="dificultad" placeholder="baja,medio o dificil">
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Duracion</label>
                        <input type="text" class="form-control" id="duracion" name="duracion" placeholder="Ingrese el título" required>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Altitud</label>
                        <input type="text" class="form-control" id="altitud" name="altitud" placeholder="Ingrese el título" required>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">epoca</label>
                        <input type="text" class="form-control" id="epoca" name="epoca" placeholder="Ingrese el título" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">como llegar</label>
                        <textarea class="form-control" id="como_llegar" name="como_llegar" rows="3" placeholder="Descripción de la ruta" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Recomendaciones</label>
                        <textarea class="form-control" id="recomendaciones" name="recomendaciones" rows="3" placeholder="Descripción de la ruta" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">observaciones fauna</label>
                        <textarea class="form-control" id="observaciones" name="observaciones" rows="3" placeholder="Descripción de la ruta" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Subir imagen</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <?php
if (!empty($_POST['nombre'])) {
    $creado = $_POST['creado_por'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $distancia = $_POST['distancia'];
    $dificultad = $_POST['dificultad'];
    $duracion = $_POST['duracion'];
    $distancia = $_POST['altitud'];
    $altitud = $_POST['altitud'];
    $epoca = $_POST['epoca'];
    $como_llegar = $_POST['como_llegar'];
    $recomendaciones = $_POST['recomendaciones'];
    $observaciones = $_POST['observaciones'];
    $imagen = $_FILES["imagen"]["tmp_name"];
    $nameImagen = $_FILES["imagen"]["name"];
    
   


    move_uploaded_file($imagen, $_SERVER['DOCUMENT_ROOT'] . "/patoneando/imagenes/$nameImagen");;

    $agregar = InicioController::insertRuta($creado,$nombre,$descripcion,$distancia,$dificultad,$duracion,$altitud,$epoca,$como_llegar,$recomendaciones,$observaciones,$nameImagen);
}



?>

