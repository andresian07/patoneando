<?php 
$rutaid = $_GET['rutaid'];
?>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <form class="p-4 border rounded shadow-sm bg-white" action="index.php?modulo=comentario" method="post" enctype="multipart/form-data">
                    <h4 class="text-center mb-4">zona comentarios</h4>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">ruta id</label>
                        <input type="text" class="form-control" id="ruta_id" name="ruta_id" value="<?=$rutaid?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="<?=$_SESSION['nombre']?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">comentario</label>
                        <textarea class="form-control" id="comentario" name="comentario" rows="3" placeholder="escribe tu comentario" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">hora</label>
                        <input type="datetime-local" id="hora" name="hora" rows="3" placeholder="escribe tu comentario" required></textarea>
                    </div>
                    <button type="submit"  class="btn btn-primary w-100">agrega tu comentario</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
 <?php

 if (!empty($_POST['nombre'])) {
    $ruta_id = $_POST['ruta_id'];
    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];
    $hora = $_POST['hora'];

    $agregar = ComentarioController::insertComentario($ruta_id,$nombre,$comentario,$hora);
 }