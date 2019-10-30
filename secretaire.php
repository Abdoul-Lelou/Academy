<?php

    require 'model.php';
    class Secretaire extends model
    {
        public function insertPatient($id,$nom,$prenom,$age,$symptome,$secretaire_id)
        {
            session_start();
            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->prepare('INSERT INTO patient (id,nom,prenom,age,symptome,secretaire_id)
                                    VALUES(:id,:nom,:prenom,:age,:symptome,:secretaire_id)');
    
                $sql->execute(array(
                'id' => $id,
                'nom' =>$nom,
                'prenom' => $prenom,
                'age' => $age,
                'symptome' => $symptome,
                'secretaire_id' => $secretaire_id 
                ));

            $sql->closeCursor();
            session_destroy();
            clearstatcache();
            $db=null; 
    
        }

        public function connecter()
        {
            session_start();
            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->query('SELECT * FROM secretaire');
            while($donnee=$sql->fetch())
            {
        
            if($donnee['nom']== $_POST['nomA']&& $donnee['prenom']== $_POST['prenomA']
                        &&$donnee['password']== $_POST['passwordA'] )
                {
                
                header('location:Acceuil.php');
                exit();
                }
            else{
                   header('location:erreur.php');
            }
            
            }
            $sql->closeCursor();
            session_destroy();
            clearstatcache();
            $db=null;
        }

        public function fixerRendezvous($jours,$heure,$patient_id,$medecin_id)
        {
            session_start();
            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->prepare('INSERT INTO `rendez-vous` ( `jours`, `heures`, `patient_id`, `medecin_id`)
                                    VALUES (:jours,:heures,:patient_id,:medecin_id)');
    
                $sql->execute(array(
                
                'jours' =>$jours,
                'heures' => $heure,
                'patient_id' => $patient_id,
                'medecin_id' => $medecin_id
                
                ));
            $sql->closeCursor();
            session_destroy();
            clearstatcache();
            $db=null;

            header('location:patientList.php');
            exit();
        }

        public function edit($id,$nom,$prenom,$age,$symptome,$secretaire_id)
        {
            session_start();
            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->prepare("UPDATE patient set nom='$nom',prenom='$prenom',age='$age'
                                    ,symptome='$symptome',secretaire_id='$secretaire_id' WHERE id='$id'");
                                    
                $sql->execute(array());

            $sql->closeCursor();
            session_destroy();
            clearstatcache();
            $db=null; 
            
        }

        public function delete($id)
        {
            session_start();
            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->prepare("DELETE  FROM patient WHERE id='$id'");
                                    
                $sql->execute(array());

            $sql->closeCursor();
            session_destroy();
            clearstatcache();
            $db=null; 
            
            header('location:patient_inscri.php');
            exit();
        }
    }