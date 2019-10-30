<?
    require 'secretaire.php';


    $id=$_POST['id'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $nom=$_POST['nom'];
    $symptome=$_POST['symptome'];
    $secretaire_id=$_POST['secretaire_id'];

    $secretaire= new Secretaire();

    $secretaire->edit($id,$nom,$prenom,$age,$symptome,$secretaire_id);

    header('location:patient_inscri.php');
    exit();