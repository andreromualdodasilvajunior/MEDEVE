<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Tabela</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

  <table class="table table-bordered table-striped">
    
    <thead class="table-dark">
      <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Tipo</th>
      </tr>
    </thead>

    <tbody>

      <?php
      $contas = [
          ["nome" => "Salário", "valor" => 2000, "tipo" => "Receber"],
          ["nome" => "Luz", "valor" => 150, "tipo" => "Pagar"]
      ];

      foreach ($contas as $conta) {
          echo "<tr>";
          echo "<td>" . htmlspecialchars($conta["nome"]) . "</td>";
          echo "<td>R$ " . $conta["valor"] . "</td>";
          echo "<td>" . $conta["tipo"] . "</td>";
          echo "</tr>";
      }
      ?>

    </tbody>

  </table>

</div>

</body>
</html>