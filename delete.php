<?php
    
        require "secretaire.php";
        $id=$_POST['id'];
        $secretaire = new Secretaire();

        $secretaire::delete($id);