<?php

    require 'secretaire.php';
    if(isset($_POST['date'])&&isset($_POST['heure'])&& isset($_POST['patient_id'])&&isset($_POST['medecin_id']))
        
        $jours=$_POST['date'];
        $heure=$_POST['heure'];
        $patient_id=$_POST['patient_id'];
        $medecin_id=$_POST['medecin_id'];

        $secretaire= new Secretaire();
        
        $secretaire->fixerRendezvous($jours,$heure,$patient_id,$medecin_id);

