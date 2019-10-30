<? require 'menu.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="/rendez-vous.js"></script>
    <title>AJOUTER PATIENT</title>
</head>

<body>

    <div class="container">
        <br><br><br><br>
        <div class="panel panel-primary" align="center">
            <div class="panel-body">
            <h3 class="text-on-pannel text-primary"><strong class="text-uppercase">
                 AJOUTER PATIENT </strong></h3>
            
            </div>
        </div>
        <div class="form-group">
            <form  method="post" class="form" action="insertPatient.php" name="patient">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Matricule</label>
                        <input type="text" class="form-control" name="id" placeholder="Matricule">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="prenom">Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Nom">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="age">Prenom</label>
                        <input type="text" class="form-control" name="prenom" placeholder="Prenom">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="symptome">Age</label>
                        <input type="text" class="form-control" name="age" placeholder="Age">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Symptome</label>
                        <input type="text" class="form-control" name="symptome" placeholder="Symptome">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="nom">Matricule_Secretaire</label>
                        <select name="secretaire_id" class="form-control">
                            <option selected="selected">Matricule_Id</option>
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
                        <input type="submit" class="btn btn-warning col-md-2"  value="Enregistrer" onclick="return clkform()">
                    </div>
                    
            </div>
            </form>
          
            <div align="center" class="col-md-12">  
             <a href="Acceuil.php"><input type="submit" class="btn btn-success  col-md-2" value="Acceuil"></a></td>';
            </div>
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
    var secretaire_id=document.forms['patient'].elements['secretaire_id'].value
   
        
    
        if(age<=0 || age>100)
        {
            alert('AGE INVALIDE  CHOISIR  UN NOMBRE ENTRE 1 ET 100');
	        return false;
        }else if(nom==""|| nom==null || prenom==""|| prenom==null || symptome==""|| symptome==null || age==""|| age==null
            || jours==""|| jours==null || heure==""|| heure==null || id==""|| id==null)
        {
           alert('VEILLEZ REMPLIR TOUT LES CHAMPS');
	        return false;
        }else if(secretaire_id=="Matricule Secretaire"|| secretaire_id==null)
        {
            alert('VEILLEZ CHOISIR LE MATRICULE DU SECRETAIRE'); 
	        return false;
        }
        
    }

    

    
    </script>
</body>
</html>