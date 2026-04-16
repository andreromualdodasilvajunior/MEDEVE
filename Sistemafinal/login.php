    <?php
    include __DIR__ . '/config/config.php';
    include __DIR__ . '/data/dados.php';

    $mensagem_erro = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = trim($_POST['usuario'] ?? '');
        $senha = trim($_POST['senha'] ?? '');

        foreach ($usuarios as $u) {
            if ($login === $u['usuario'] && $senha === $u['senha']) {
                $_SESSION['usuario'] = $u['usuario'];
                $_SESSION['perfil']  = $u['perfil'];

                header('Location: pages/dashboard.php');
                exit;
            }
        }
        $mensagem_erro = "Usuário ou senha incorretos.";
    }
    ?>

    <?php include __DIR__ . '/includes/header.php'; ?>
    <?php include __DIR__ . '/includes/menulogin.php'; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h3 class="text-center mb-4"> Acessar Sistema</h3>

                        <?php if ($mensagem_erro): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= htmlspecialchars($mensagem_erro) ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <form method="POST">
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuário</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Entrar</button>
                        </form>

                        <div class="mt-4 text-center text-muted small">
                            <p class="mb-1">Contas de teste:</p>
                            <p class="mb-0">cliente / 123 • loja1 / 123 • admin / 123</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/includes/footer.php'; ?>