<!-- de creer la classe Utilisateur avec les proprietes:
nom, prenom, email, mot de passe
les methodes : s'incrire, se connecter, se deconnecter -->

<?php
include('database.php');
class Utilisateur
{
    private $nom;
    private $prenom;
    private $email;
    private $mdp;

    public function __construct($nom, $prenom, $email, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $password;
    }

    public function inscription(){
        $dbConnect = new DbConnect();
        $db = $dbConnect->dbConnexion();
        $request = $db->prepare("INSERT INTO 'utilisateurs' ('nom', 'prenom', 'email', 'mdp') VALUES (?,?,?,?)");
        try{
            $request->execute(array($this->nom, $this->prenom, $this->email, $this->mdp));
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
}


    // Vous pouvez ajouter d'autres méthodes pour se connecter, se déconnecter, etc.
?>