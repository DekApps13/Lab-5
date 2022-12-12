<?php
    if (session_status() == 1) session_start();
    echo "Status: ". session_status();
    $_SESSION["nombre"] = "Ernesto Almanza";
    $_SESSION["email"] = "almanza@gmail.com";
    echo "<br>Se crearon las variables";
    echo "<br>Status: ". session_status();

?>