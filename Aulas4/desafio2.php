<?php
session_start(); 
if ($_SESSION["perfil"] == "cliente")
{
    echo "Area do cliente";
} else if ($_SESSION["perfil"] == "empresa") {
echo "Area de empresa";
}
?>
