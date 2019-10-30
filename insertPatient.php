<?php
   
    require 'secretaire.php';
    
    if(isset($_POST['id'])&&isset($_POST['nom'])&& isset($_POST['prenom'])&&isset($_POST['symptome'])
            && isset($_POST['age']) && isset($_POST['secretaire_id']))
    
       $id=$_POST['id'];
       $prenom=$_POST['prenom'];
       $age=$_POST['age'];
       $nom=$_POST['nom'];
       $symptome=$_POST['symptome'];
       $secretaire_id=$_POST['secretaire_id'];
       
        $secretaire= new Secretaire();

        $secretaire->insertPatient($id,$nom,$prenom,$age,$symptome,$secretaire_id);
        
    header('location:rendezVous.php');
    exit();
        
    
    