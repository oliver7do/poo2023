<!-- inclure le fichier utilisateur.php
recuperer les information du formulaire
creer un instance de la classe Utilisateur
 appeler la methode inscription pour enregistrer les donnees dans bd  -->

<?php
include('utilisateur.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $password = $_POST["mdp"];

    $utilisateur = new Utilisateur($nom, $prenom, $email, $mdp);
    $utilisateur->inscription();
    // Vous pouvez ajouter un code pour gérer la redirection après l'inscription.
}
?>