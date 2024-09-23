<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <form class="p-4 border rounded shadow-sm bg-white" action="index.php?modulo=detalleRuta" method="post" enctype="multipart/form-data">
                    <h4 class="text-center mb-4">Registrar detalle de ruta</h4>

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el título" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripción de la ruta" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="dificultad" class="form-label">Dificultad</label>
                        <input type="text" class="form-control" name="dificultad" id="dificultad" placeholder="baja,medio o dificil">
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
