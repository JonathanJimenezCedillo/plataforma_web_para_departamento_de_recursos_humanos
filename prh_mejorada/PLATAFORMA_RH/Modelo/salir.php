<?php

    session_start();

    session_destroy(); /*destruye la sesion iniciada*/

    header("Location:../");

    exit();


 ?>
