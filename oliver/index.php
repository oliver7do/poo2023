<!-- // creer un formulaire avec les champs:
// nom, prenom, login, mot de passe
// la validation du formulaire redirige vers action.php  -->

<!DOCTYPE html>
<html>

<head>
    <title>Formulaire d'Inscription</title>
</head>

<body>
    <h2>Inscription</h2>
    <form action="action.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required><br>

        <label for="email">Email :</label>
        <input type="text" name="email" required><br>

        <label for="motdepasse">Mot de passe :</label>
        <input type="password" name="motdepasse" required><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>

</html>