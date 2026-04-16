    <!DOCTYPE html>
    <html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">    </head>
    <body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Cadastro</h3>
                
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo:</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Ex:andreromualdo@email.com" required>
                    </div>

                    <button type="submit" name="enviar" class="btn btn-primary w-100">Enviar Dados</button>
                </form>

                <hr>
                
                <?php

                if (isset($_POST['enviar'])) {
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];


                    echo "<div class='alert alert-success mt-3'>";

                    echo "<strong>Dados recebidos</strong><br>";

                    echo "Nome: " . htmlspecialchars($nome) . "<br>";
                    
                    echo "E-mail: " . htmlspecialchars($email);
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>

    </body>
    </html>
