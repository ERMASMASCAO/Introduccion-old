<?php

$acceso=$_GET["dejameEntrar"] ?? "0";

if ($acceso == "1") {
    echo "Bienvenido a la página";
}
elseif ($acceso == "0") {
    header('Location: login.php');
    exit;
}

?>