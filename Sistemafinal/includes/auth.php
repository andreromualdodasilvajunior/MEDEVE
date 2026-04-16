<?php
include __DIR__ . '/../config/config.php';

if (!isset($_SESSION["usuario"]) || empty($_SESSION["usuario"])) {
    header("Location: ../login.php");
    exit;
}
?>