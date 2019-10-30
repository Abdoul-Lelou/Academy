<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="connect.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="js/connect.js"></script>
    <title>Secretariat</title>
</head>

<body>

    <div class="container">

        

        <br><br>


        <div class="panel panel-primary" align="center">
            <div class="panel-body">
            <h3 class="text-on-pannel text-primary"><strong class="text-uppercase">
                 SE CONNECTER </strong></h3>
            
            </div>
        </div>
        <div class="form-group " align="center">
            <form method="post" action="connect.php" name="connect">
            <div class="form-group">
                
                    <div class="form-group col-md-4" align="center">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" name="nomA" placeholder="Nom">
                    </div>
                

               
                    <div class="form-group col-md-4" align="center">
                        <label for="prenom">Prenom</label>
                        <input type="text" class="form-control" name="prenomA" placeholder="Prenom">
                    </div>
                

                

                    <div class="form-group col-md-4 lab" align="center">
                        <label for="age" >Mot de Passe</label>
                        <input type="password" class="form-control" name="passwordA" placeholder="Password">
                    </div>
                   <br>
                       
                <input type="submit" class="btn btn-warning col-md-4 btN trigger"  value="Se Connecter" onclick="return clkform2()">
            </div>
            </form>
        
        </div>
    </div>
</body>
</html>
