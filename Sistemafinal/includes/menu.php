<?php
$perfil = $_SESSION["perfil"];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">

        <a class="navbar-brand" href="index.php">Sistema Financeiro</a>

        <ul class="navbar-nav ms-auto">

            <li class="nav-item">
                <a class="nav-link" href="index.php">Início</a>
            </li>

            <?php if ($perfil == "cliente"): ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Minhas Contas</a>
                </li>
            <?php endif; ?>

            <?php if ($perfil == "empresa"): ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contas Pendentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nova Conta</a>
                </li>
            <?php endif; ?>

            <?php if ($perfil == "proprietario"): ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Todas as Contas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Usuários</a>
                </li>
            <?php endif; ?>

            <li class="nav-item">
                <a class="nav-link text-danger" href="logout.php">Sair</a>
            </li>

        </ul>

    </div>
</nav>