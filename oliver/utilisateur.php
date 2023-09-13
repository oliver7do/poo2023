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

  // methode inscription
    public function inscription(){
        // creer une instance DbConnect
        $dbConnect = new DbConnect();
        $db = $dbConnect->dbConnexion();
        // $db = $dbConnect->connexionDataBase
        $request = $db->prepare("INSERT INTO 'utilisateurs' ('nom', 'prenom', 'email', 'mdp') VALUES (?,?,?,?)");
        try{
            $request->execute(array($this->nom, $this->prenom, $this->email, $this->mdp));
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    // methode connexion 
    public function connexion($email, $password)
}


    // Vous pouvez ajouter d'autres méthodes pour se connecter, se déconnecter, etc.
?>