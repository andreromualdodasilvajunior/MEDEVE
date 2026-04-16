<?php
include '../../includes/auth.php';
include '../../includes/header.php';
include '../../includes/menu.php';
include '../../data/dados.php';

if ($_SESSION['perfil'] !== 'proprietario') {
    header('Location: ../dashboard.php');
    exit;
}
?>

<div class="container mt-4">
    <h1>Gerenciar Usuarios</h1>
    <p>Lista de pessoas com acesso ao sistema.</p>

    <?php if (!empty($usuarios)): ?>
        <ul class="list-group">
            <?php foreach ($usuarios as $user): ?>
                <li class="list-group-item">
                    <?= htmlspecialchars($user['usuario']) ?> 
                    <span class="text-muted">→</span> 
                    <strong><?= ucfirst(htmlspecialchars($user['perfil'])) ?></strong>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p class="text-muted">Nenhum usuario cadastrado.</p>
    <?php endif; ?>
</div>

<?php include '../../includes/footer.php'; ?>