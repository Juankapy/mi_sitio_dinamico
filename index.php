<?php
$p = $_GET['p'] ?? 'inicio';

include 'elementos/header.php';

$ruta = "elementos/$p.php";
if (file_exists($ruta)) {
    include $ruta;
} else {
    echo "<div class='container mt-4'><div class='alert alert-danger'>Página todavia no generada</div></div>";
}

$titulo = "Mi Sitio Dinamico PHP - Bienvenido a Camas ";
$contenido = "elementos/contenido.php";

include "elementos/footer.php";
include "layout.php";
