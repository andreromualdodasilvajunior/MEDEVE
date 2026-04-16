<?php
include '../includes/auth.php';
include '../includes/header.php';
include '../includes/menu.php';
?>

<div class="container mt-5">
    <?php $perfil = $_SESSION["perfil"]; ?>

    <?php if ($perfil == "cliente") { ?>
        <h1>Início do Cliente</h1>
        <p>Bem-vindo, aqui voce pode acompanhar suas contas e pendências pelo nosso sistema MEDEVE.</p>
    <?php } ?>

    <?php if ($perfil == "empresa") { ?>
        <h1>Início da Empresa</h1>
        <p>Bem-vindos  Gerenciem as contas da sua empresa por aqui, no sistema MEDEVE
    <?php } ?>

    <?php if ($perfil == "proprietario") { ?>
        <h1>Inicio do Proprietário</h1>
        <p>Bem-vindo ao sistema MEDEVE, Senhor Propietario.</p>
    <?php } ?>
</div>

<?php include '../includes/footer.php'; ?>