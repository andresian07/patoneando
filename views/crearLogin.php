<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <form class="p-4 border rounded shadow-sm bg-white" action="index.php?modulo=crearLogin" method="post" enctype="multipart/form-data">
                    <h4 class="text-center mb-4">Crear cuenta</h4>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">nombre completo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre completo" required>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">password</label>
                        <input type="password" class="form-control" id="password" name="password" rows="3" placeholder="escribe tu contraseña" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">crear cuenta</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<?php

if (!empty($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $agregar = loginController::insertLogin($nombre,$email,$password);
}