<? require 'menu.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="rendezVous.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
     <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
 
    <script src="js/rendezVous.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <br><br> <br>
       
        <div class="panel panel-primary" align="center">
            <div class="panel-body">
            <h3 class="text-on-pannel text-primary"><strong class="text-uppercase">
                 FIXER RENDEZ-VOUS </strong></h3>
            
            </div>
        </div>
        
            <form  method="post" action="fixeRendezVous.php" name="rendezvous" align="center" >
                
            <div class="center-block" align="center">
                

                <div class="form-row"> 
                    <div class="form-group col-md-6">
                        <label class="control-label" for="date">Date</label>
                        <input class="form-control" id="date" name="date" placeholder="YYYY/MM/DD" type="text"/>

                    </div>
                

                
                    <div class="form-group col-md-6">
                            <label for="heure">Heure</label>
                            <input type="text" class="form-control" name="heure" placeholder="HH:MM:SS">
                    </div>
                </div> 
                
                <div class="form-row"> 
                    <div class="form-group col-sm-6">
                    <label for="matricule">Matricule Medecin</label>
                        <select name="medecin_id" class="col-md-12 form-control" >
                            <option selected=selected>Matricule Medecin</option>
                            <option>
                            <?php
                                    $db= new PDO('mysql:host=localhost;dbname=hospital;','root',''); 
                                    $sql=$db->query('SELECT id FROM medecin');
                                    while($donnee=$sql->fetch()){
                                    echo '<option>';    
                                        echo $donnee['id'];
 
                                    echo '</option>';
                                    }   
                                ?>
                            </option>
                        </select>
                    </div>
                

                
                    <div class="form-group col-sm-6">
                    <label for="matricule">Matricule Patient</label>
                        <select name="patient_id" class="col-md-12 form-control" >
                            <option selected=selected>Matricule Patient</option>
                                <?php
                                    $db= new PDO('mysql:host=localhost;dbname=hospital;','root',''); 
                                    $sql=$db->query('SELECT id FROM patient');
                                    while($donnee=$sql->fetch()){
                                    echo '<option>';    
                                        echo $donnee['id'];
                                        
                                    echo '</option>';
                                    }   
                                ?>
                            
                        </select>
                    </div>
                </div> 
                   
                <input type="submit" class="btn btn-warning col-md-2"  value="Enregistrer" id="btn">                   
            </form>        
            <br><br>
            <table>
        <tbody>
            <thead>
            <legend align="center">
                <div class="panel panel-primary" align="center">
                    <div class="panel-body">
                    <h3 class="text-on-pannel"><strong class="text-uppercase">
                       PATIENTS EN LIST </strong></h3>
                    
                    </div>
                </div>
        </legend>
		<div>

        <br><br>
            
			<table class="table">
				<thead class="thead-dark">
					<tr>
                        <th scope="col">Matricule</th>    
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th> 
                        <th scope="col">Symptome</th>
                        <th scope="col">Age</th>   
                        <th scope="col">Action</th> 
                    </tr>
                    
				</thead>
				<tbody>
                
                <?php
					$db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
                    $sql=$db->query('SELECT * FROM patient');
                    while($donnee=$sql->fetch())
                    {
                        
                        echo '<tr class="col">';
                   
                            echo '<td>'.$donnee['id'].'</td>';
                            echo '<td>'.$donnee['nom'].'</td>';
                            echo '<td>'.$donnee['prenom'].'</td>';
                            echo '<td>'.$donnee['symptome'].'</td>';
                            echo '<td>'.$donnee['age'].'</td>';
                        
                        echo '</tr>';
                    }
                    $sql->closeCursor();
                      
            ?>
            </tbody>
			</table>
			
            </thead>
        </tbody>

        </table>
        
    </div>
    
   
      <table>
      <table class="table">
            <div class="form-row">
				<thead class="thead-dark">
					<tr>
                        <th scope="col">Matricule</th>
                        <th scope="col">Prénom_Medecin</th> 
                        <th scope="col">Nom_Medecin</th>
                        <th scope="col">Specialite</th>
                        <th scope="col">Action</th>
                         
                    </tr>
                    
				</thead>
				<tbody>
                
                <?php
					$db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
					
                    $sql2=$db->query('SELECT m.id,m.prenom_med,m.nom_med,s.domaine from medecin m,specialite s
                                        WHERE m.id=s.id');
                    while($donnees=$sql2->fetch())
                    {
                        
                        echo '<tr class="col">';
                        
                            echo '<td>'.$donnees['id'].'</td>';
                            echo '<td>'.$donnees['prenom_med'].'</td>';
                            echo '<td>'.$donnees['nom_med'].'</td>';
                            echo '<td>'.$donnees['domaine'].'</td>';
                            
                        echo '</tr>';
                    }
                    $sql2->closeCursor();    
                    ?>          
			</tbody>
			</table>
			
            </thead>
        </tbody>

        </table>
        
    </div>
   

      </table> 
    </div>
      
    
<script>
    
var btn=document.getElementById('btn');
btn.onclick=function validation_Date_Jour()
 {
     
    var heure=document.forms['rendezvous'].elements['heure'].value;   
    var jours=document.forms['rendezvous'].elements['date'].value;
    var patient_id=document.forms['rendezvous'].elements['patient_id'].value;
    var medecin_id=document.forms['rendezvous'].elements['medecin_id'].value;

    var str=jours;
    var tabdays='lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche'.split(',')
    str=str.split(/[^0-9]/)
    var mydate=new Date()
    mydate.setFullYear(str[0],str[0]+1,str[2])
    var jour=mydate.getDay();
    var mois=mydate.getMonth();
    var reg = new RegExp("^(([0]?[8-9])|([1][0-2^5-7$])):([0-5]?[0-9])(:([0-5]?[0-9]))$");

    if(tabdays[jour]=="samedi" || tabdays[jour]=="dimanche")
    {
        alert('VOUS AVEZ CHOISI UN JOUR DE WEEK-END'); 
        return false;
    }
    else if(!heure.match(reg))
    {
         alert("l'heure est invalide");
         return false;
    }
    else if(heure=="" || jours=="" || patient_id=="" || medecin_id=="" )
    {
        alert('REMPLIR TOUT LES CHAMPS');
        return false;
    }
 }

function verifJour()
{
    //var jours=document.forms['rendezvous'].elements['date'].value;
    //var jr=jours.toLowerCase()
 
    var jours=document.forms['rendezvous'].elements['date'].value;
    var str=jours;
    tabdays='lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche'.split(',')
    tabmonths='Janvier,Févirer,Mars,Avril,Mai,Juin,juillet,Août,Septembre,Octobre,Novembre,Décembre'.split(',')
    str=str.split(/[^0-9]/)
    mydate=new Date()
    mydate.setFullYear(str[0],str[1]-1,str[2])
    var jour=mydate.getDay()-1;
    var mois=mydate.getMonth();
    alert(tabdays[jour]+' '+str[2]+' '+tabmonths[mois]+' '+str[0])

    if(tabdays[jour]=="samedi" || tabdays[jour]=="dimanche")
    {
        alert('VOUS AVEZ CHOISI UN JOUR DE WEEK-END'); 
        return false;
    }
   
 }
 
 $(document).ready(function(){
   var date_input=$('input[name="date"]'); //our date input has the name "date"
   var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
   var options={
     format: 'yyyy/mm/dd',
     container: container,
     todayHighlight: true,
     autoclose: true,
   };
   date_input.datepicker(options);
 })
   
    </script> 
    <style>
    label{
        color: #fff;
    }
    tbody{
        background: #fff;
    }
    </style>
</body>
</html>
