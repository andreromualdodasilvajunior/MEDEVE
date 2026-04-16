<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Card</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

  <?php
  $saldo = 6750;
  ?>

  <div class="card text-bg-success">
    <div class="card-body text-center">
      <h5 class="card-title">Saldo atual do sistema</h5>
      <p class="card-text fs-4">
        R$ <?php echo $saldo; ?>
      </p>
    </div>
  </div>

</div>

</body>
</html>