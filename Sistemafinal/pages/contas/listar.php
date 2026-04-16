<?php
include '../../config/config.php';
include '../../includes/auth.php';
include '../../data/dados.php';
include '../../includes/header.php';
include '../../includes/menu.php';
?>

<div class="container mt-3">
    <h1>Contas</h1>
    <p>Aqui você pode visualizar suas contas.</p>

    <?php
    if (isset($_SESSION['usuario'])) {
        $perfil = $_SESSION['perfil'] ?? '';

        if ($perfil === 'cliente') {
            if (!empty($contas)) {
                echo '<ul class="list-group">';
                foreach ($contas as $conta) {
                    echo '<li class="list-group-item">';
                    echo htmlspecialchars($conta["descricao"]) . ' - R$ ' . $conta["valor"];
                    echo '</li>';
                }
                echo '</ul>';
            } else {
                echo '<p>Voce não deve nada.</p>';
            }
        } 
        else if ($perfil === 'empresa') {
            if (!empty($contas)) {
                echo '<ul class="list-group">';
                foreach ($contas as $conta) {
                    echo '<li class="list-group-item">';
                    echo htmlspecialchars($conta["descricao"]) . ' - R$ ' . $conta["valor"];
                    echo '</li>';
                }
                echo '</ul>';
            } else {
                echo '<p>Ninguem lhe deve nada.</p>';
            }
        }
        else if ($perfil === 'proprietario') {
            if (!empty($contas)) {
                echo '<ul class="list-group">';
                foreach ($contas as $conta) {
                    echo '<li class="list-group-item">';
                    echo htmlspecialchars($conta["descricao"]) . ' - R$ ' . $conta["valor"];
                    echo '</li>';
                }
                echo '</ul>';
            } else {
                echo '<p>Não há pendencias.</p>';
            }
        }
    }
    ?>
</div>

<?php include '../../includes/footer.php'; ?>