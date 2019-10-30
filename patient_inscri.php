<? require 'menu.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <title>Document</title>
</head>
<body>
    <div class="container">
        <br><br><br><br>

        <legend align="center">
                <div class="panel panel-primary" align="center">
                    <div class="panel-body">
                    <h3 class="text-on-pannel"><strong class="text-uppercase">
                       PATIENTS EN LIST </strong></h3>
                    
                    </div>
                </div>
        </legend>
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
                    
                        echo '<td><a href="editRendezVous.php?numid='.$donnee['id'].'"><input type="submit" class="btn btn-warning" value="EDIT"></a>
                       <a href="supprimer.php?numid='.$donnee['id'].'"><input type="submit" class="btn btn-danger" value="DEL"></a></td>';
		
						
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
</div>   

<style>
body {
    background: url('img/bgH.jpg');
}
tbody{
    background: white;
}
</style>
</body>
</html>