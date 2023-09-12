<!-- creer la classe DbConnect permettant de se connecter a la base de donnees -->

<?php

class DbConnect
{

    public function dbConnexion(){
        $conn = null;
        try {
           $connexionDb = new PDO("mysql:host=localhost;dbname=cours_db", "root", " ");
            
            return $connexionDb;
        } catch (PDOException $e) {
            $conn = $e->getMessage();
        }
    }
} 
?>