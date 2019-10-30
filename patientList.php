<? require 'menu.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="index.css"> 
    <title>Patient_En_List</title>
</head>
<body>
    
    <br><br><br><br>
   
    <div class="container">
        <table>
        <tbody>
            <thead>
            <legend align="center">
                <div class="panel panel-primary" align="center">
                    <div class="panel-body">
                    <h3 class="text-on-pannel text-warning"><strong class="text-uppercase">
                       RENDEZ-VOUS PATIENTS </strong></h3>
                    
                    </div>
                </div>
        </legend>
		<div>

        <br><br>
            
			<table class="table">
				<thead class="thead-dark">
					<tr>
                    <th scope="col">Prénom</th>    
					<th scope="col">Nom</th>
					<th scope="col">Symptome</th>
					<th scope="col">Age</th>
					<th scope="col">Jour/Date</th>
                    <th scope="col">Heure</th>
                    <th scope="col">Medecin</th>
                    <th scope="col">Specialite</th>

                    
					

					</tr>
				</thead>
				<tbody>
                
                <?php
					$db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
                    $sql=$db->query('SELECT m.nom_med,m.prenom_med,s.domaine,p.id,p.nom,p.prenom,p.symptome,p.age,r.jours,r.heures 
                    FROM medecin m,`rendez-vous` r ,patient p,specialite s WHERE m.id=r.medecin_id AND p.id=r.patient_id AND m.id=s.id');
                    while($donnee=$sql->fetch())
                    {
                        
                        echo '<tr class="col">';
                   
                        echo '<td>'.$donnee['prenom'].'</td>';
						echo '<td>'.$donnee['nom'].'</td>';
                        echo '<td>'.$donnee['symptome'].'</td>';
                        echo '<td>'.$donnee['age'].'</td>';
						echo '<td>'.$donnee['jours'].'</td>';
                        echo '<td>'.$donnee['heures'].'</td>';
                        echo '<td>'.$donnee['prenom_med'].' '.$donnee['nom_med'].'</td>';
                        echo '<td>'.$donnee['domaine'].'</td>';
                       

                        
                    
                    
                       // echo '<td><a href="supprimer.php?numid='.$donnee['id'].'"><input type="submit" class="btn btn-danger" value="DEL"></a></td>';
						
                    echo '</tr>';
                    }
                    
                      
		    echo'	</tbody>
			</table>;
			
            </thead>
        </tbody>
        </table>
        
    </div>';
   ?>
   
   <style>
   
tbody{
    background: #346;
}

a{
   display: inline-table;
   margin: auto
    
}
   </style>
</body>
</html>