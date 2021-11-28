<?php

    session_start();

    $usuarios=$_SESSION['usuario'];

    if (!isset($usuarios)) {
        header("Location:../../");
    }

 ?>
