<?php

    require 'secretaire.php';

    $id=$_GET['numid'];
    $secretaire= new Secretaire();

    $secretaire::delete($id);
    