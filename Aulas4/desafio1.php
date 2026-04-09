<?php
session_start(); 


if (isset($_SESSION["usuario"])) {
    echo "Bem vindo, " . $_SESSION["usuario"];
};
?>
