<?php
$contas = [
    ["descricao" => "Conta da agua", "valor" => 3000, "tipo" => "Receber"],
    ["descricao" => "Prestação", "valor" => 1200, "tipo" => "Pagar"],
    ["descricao" => "Salario", "valor" => 800, "tipo" => "Receber"]
];

foreach ($contas as $conta) {
    if ($conta["tipo"] == "Receber") {
        echo "Descrição: {$conta["descricao"]} - Valor: R$ {$conta["valor"]}<br>";
    }
}
?>