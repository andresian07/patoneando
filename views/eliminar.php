<?php

// Manejar eliminación de ruta
if (isset($_GET['eliminar'])) {
  $eliminar = rutaCrontroller::DelectRuta($_GET['eliminar']);
}
?>