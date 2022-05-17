<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>mot de passe</title>
</head>

<body>

    <header>

        <nav role="menubar" class="navbar">
            <a role=" menuitem" href="index.php">Accueil</a>
            <a role=" menuitem" href="page2.php">deviner l'heure</a>
            <a role=" menuitem" href="page3.php">Brassage</a>
            <a role=" menuitem" class="active" href="page4.php">validation de mot de passe</a>
        </nav>
    </header>

    <?php
    require('function.php');
    $mdp = "";
    $reponse = false;

    ?>

    <div class="form">
        <form action="" methode>
            <label for="mdp">entrer un mot de passe</label>
            <input type="text" name="mdp">
            <input type="submit" value="envoyer" name="envoyer">
        </form>

    </div>
    <?php

    if (isset($_GET["envoyer"], $_GET["mdp"])) {

        $mdp = $_GET["mdp"];
        $pattern = "/(?!^[0-9]*$)(?!^[a-z]*$)^([a-z-0-9]{4})$/";
        $reponse = preg_match($pattern, $mdp);

        if ($reponse) {

            echo "votre mot de passe est valide <br>";

            $timeExecution = timeExecution($mdp);
        } else {
            echo "votre code n'est pas valide, enter un mot de passe de 4 symboles  incluant les lettres de l'alphabet en minuscule et les chiffres";
        }
    }







    ?>





</body>

</html>