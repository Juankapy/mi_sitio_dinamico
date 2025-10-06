<?php
$menu = [
    'inicio'     => 'Inicio',
    'contenido'  => 'Productos',
    'contacto'   => 'Contacto'
];
?>

<header class="text-center bg-white p-3 rounded shadow-sm">
  <h1 class="text-primary">🌟 Mi Sitio Dinamico PHP - Bienvenido a Camas 🌟</h1>
  <p class="text-muted">Usando include() por primera vez</p>
  
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php?p=inicio">Mi Sitio</a>
    <div>
      <ul class="nav nav-pills">
        <?php foreach ($menu as $clave => $texto): ?>
          <li class="nav-item">
            <a class="nav-link <?= ($p === $clave) ? 'active' : '' ?>"
               href="index.php?p=<?= $clave ?>">
              <?= htmlspecialchars($texto) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>