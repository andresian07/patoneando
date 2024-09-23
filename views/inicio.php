<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/bannermontaña.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="text-center">
    <h1>PATONEANDO</h1>
    <p>Patoneando es tu guía para descubrir las rutas de montaña más espectaculares. Exploramos senderos llenos de naturaleza, aventura y paisajes impresionantes. Encuentra información detallada sobre cada ruta, su dificultad, duración y recomendaciones para que vivas una experiencia única al conectar con la naturaleza. ¡Acompáñanos a descubrir los rincones más hermosos del mundo montañés!</p>
   <a href="index.php?modulo=crearRuta" class="btn btn-primary">CREAR RUTA</a>
</div>



<!-- Sección de Tarjetas de Rutas -->
<section id="section-rutas" class="container mt-5">
    <div class="row">
        <?php
        $rutas = InicioController::selectall();
        foreach ($rutas as $ruta):
        ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 route-card">
                    <img src="imagenes/<?= $ruta['imagen'] ?>" class="card-img-top" alt="Ruta de Montaña" style="width: 100%; height: auto;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= $ruta['nombre'] ?></h5>
                        <p class="card-text"><?= $ruta['descripcion'] ?></p>
                        <h2>dificultad: <?= $ruta['dificultad'] ?></h2>
                        <a href="index.php?modulo=laguna&idruta=<?=$ruta['id'] ?>" class="btn btn-outline-primary mt-auto">Ver Ruta</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
