<?php 
$perfil = 'cliente'; 
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Sistema</a>
    <ul class="navbar-nav ms-auto">
      
      <?php if ($perfil === 'cliente'): ?>
        <li class="nav-item">
          <a class="nav-link" href="area_cliente.php">Area do Cliente</a>
        </li>
      <?php endif; ?>

      <?php if ($perfil === 'proprietario'): ?>
        <li class="nav-item">
          <a class="nav-link" href="area_admin.php">Area Administrativa</a>
        </li>
      <?php endif; ?>

    </ul>
  </div>
</nav>
