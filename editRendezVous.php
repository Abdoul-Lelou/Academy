<?php
require 'menu.php'; ?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="" href="acceuil.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <br><br><br>

  
  <br><br><br>
        <form  method="post" class="form" action="edit.php" name="patient">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Matricule</label>
                        <input type="text" class="form-control" name="id" placeholder="Matricule"
                        value="<?
                            $id=$_GET['numid'];                          
                                $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
                                $sql=$db->query("SELECT id FROM patient WHERE id='$id'");          
                                $donnee=$sql->fetch();
                                echo $donnee['id']; ?>" hidden>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="prenom">Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Nom"
                            value="<?php 
                            $id=$_GET['numid'];                          
                                $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
                                $sql=$db->query("SELECT nom FROM patient WHERE id='$id'");          
                                $donnee=$sql->fetch();
                                echo $donnee['nom']; 
                               
                                ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="age">Prenom</label>
                        <input type="text" class="form-control" name="prenom" placeholder="Prenom"
                        value="<?php 
                                $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
                                $sql=$db->query("SELECT prenom FROM patient WHERE id='$id'");          
                                $donnee=$sql->fetch();
                                echo $donnee['prenom']; 
                                ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="symptome">Age</label>
                        <input type="text" class="form-control" name="age" placeholder="Age"
                        value="<?php 
                                $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
                                $sql=$db->query("SELECT age FROM patient WHERE id='$id'");          
                                $donnee=$sql->fetch();
                                echo $donnee['age']; 
                                ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Symptome</label>
                        <input type="text" class="form-control" name="symptome" placeholder="Symptome"
                        value="<?php

                                $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
                                $sql=$db->query("SELECT symptome FROM patient WHERE id='$id'");          
                                $donnee=$sql->fetch();
                                echo $donnee['symptome']; 
                                ?>">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="nom">Matricule_Secretaire</label>
                        <select name="secretaire_id" class="form-control">
                            
                            <option><?php
                                    $db= new PDO('mysql:host=localhost;dbname=hospital;','root',''); 
                                    $sql=$db->query('SELECT id FROM secretaire');
                                    while($donnee=$sql->fetch()){
                                        echo $donnee['id'];
                                    }   
                                ?></option>
                        </select>
                    </div>
                    
                </div>
                    <div class="form-group col-md-12" align="center">
                        <input type="submit" class="btn btn-warning" id="btn"  value="Modifier" onclick="return clkform()">
                    </div>
                    
            </div>
            </form>
          
            <div align="center" class="col-md-12">  
             <a href="Acceuil.php"><input type="submit" class="btn btn-success  col-md-12" value="Annuler"></a></td>';
            </div>
 </div>            
<style>
    label{
        color: #fff;
    }
    
    </style>
    <script>
    function clkform()
   {      
    var nom=document.forms['patient'].elements['nom'].value;
    var prenom=document.forms['patient'].elements['prenom'].value;
    var age=document.forms['patient'].elements['age'].value;
    var symptome=document.forms['patient'].elements['symptome'].value;
    var id=document.forms['patient'].elements['id'].value;
    
   

    
        if(age<=0 || age>100 || isNaN(age))
        {
            alert('AGE INVALIDE  CHOISIR  UN NOMBRE ENTRE 1 ET 100');
	        return false;
        }else if(nom==""|| nom==null || prenom==""|| prenom==null || symptome==""|| symptome==null || age==""|| age==null
            || jours==""|| jours==null || heure==""|| heure==null || id==""|| id==null)
        {
           alert('VEILLEZ REMPLIR TOUT LES CHAMPS');
	        return false;
        }
        
    }

    </script>
<style>
    .b{
        background: ;
    }
    </style>
</body>
</html>
