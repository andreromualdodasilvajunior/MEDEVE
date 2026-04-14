<?php 
$usuario = 'andre'; 
$perfil = 'cliente'; 
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    
    <a class="navbar-brand" href="#">Sistema</a>


    <span class="navbar-text text-light me-3">
      Usuário: <?= htmlspecialchars($usuario) ?>
    </span>

    <ul class="navbar-nav ms-auto">

      <?php if ($perfil === 'cliente'): ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Area do Cliente</a>
        </li>
      <?php endif; ?>

      <?php if ($perfil === 'proprietario'): ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Area Administrativa</a>
        </li>
      <?php endif; ?>

    </ul>

  </div>
</nav>