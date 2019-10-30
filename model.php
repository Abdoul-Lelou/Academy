<?php

    class Model
    {
        
        public function __construct()
        { 

          try
            {
                $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            }catch(Exception $e)
            {
                die("Connection erreur du à ".$e->getMessage());
            }
        }
        public function getById($id,$table)
        {
            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->prepare('SELECT id FROM'.$table.'WHERE id=?');
            $sql->execute(array(
                'id' =>$id
            ));
            return $sql;
        }

        public function getByPatientName($nom)
        {
            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->prepare('SELECT nom FROM patient WHERE nom=?');
            $sql->execute(array(
                'nom' =>$nom
            ));
            return $sql;
        }

        public function getByPatientPrenom($prenom)
        {
            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->prepare('SELECT prenom FROM patient WHERE prenom=?');
            $sql->execute(array(
                'prenom' =>$prenom
            ));
            return $sql;
        }

        public function getByPatientAge($age)
        {
            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->prepare('SELECT age FROM patient WHERE age=?');
            $sql->execute(array(
                'age' =>$age
            ));
            return $sql;
        }

        public function getByPatientSymptome($symptome)
        {
            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->prepare('SELECT symptome FROM patient WHERE symptome=?');
            $sql->execute(array(
                'symptome' =>$symptome
            ));
            return $sql;
        }

        public function getByJour($jours)
        {
            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->prepare('SELECT jours FROM rendez-vous WHERE jours=?');
            $sql->execute(array(
                'jours' =>$jours
            ));
            return $sql;
        }

        public function getByHeure($heure)
        {
            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->prepare('SELECT heures FROM rendez-vous WHERE heures=?');
            $sql->execute(array(
                'heures' =>$heure
            ));
            return $sql;
        }

        public function getByService($nom)
        {
            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->prepare('SELECT nom FROM service WHERE nom=?');
            $sql->execute(array(
                'nom' =>$nom
            ));
            return $sql;
        }

        public function getByMedecin($nom)
        {

            $db= new PDO('mysql:host=localhost;dbname=hospital;','root','');
            $sql=$db->prepare('SELECT nom FROM medecin WHERE nom=?');
            $sql->execute(array(
                'nom' =>$nom
            ));
            return $sql;
        }
        public function deconnect()
        {
            session_start();
            session_destroy();
            clearstatcache();
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header('location:index.php');
            exit();
        }
    }