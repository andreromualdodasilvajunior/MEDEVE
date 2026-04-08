<?php
$usuarios = [
    ["usuario" => "admin", "perfil" => "administrador"],
    ["usuario" => "andre", "perfil" => "usuario"],
    ["usuario" => "wesley", "perfil" => "usuario"]
];

foreach ($usuarios as $user) {
    echo "Usuário: {$user["usuario"]} - Perfil: {$user["perfil"]}<br>";
}
?>