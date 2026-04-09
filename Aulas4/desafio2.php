<?php
session_start();

if (isset($_SESSION["perfil"]) && $_SESSION["perfil"] == "cliente") {
    echo "Area do cliente";
} 
else if (isset($_SESSION["perfil"]) && $_SESSION["perfil"] == "empresa") {
    echo "Area de empresa";
} 

?>
