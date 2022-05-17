<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title> tableau de temps</title>

</head>

<body>

    <header>

        <nav role="menubar" class="navbar">
            <a role=" menuitem" href="index.php">Accueil</a>
            <a role=" menuitem" class="active" href="page2.php">deviner l'heure</a>
            <a role=" menuitem" href="page3.php">Brassage</a>
            <a role=" menuitem" href="page4.php">validation de mot de passe</a>
        </nav>
    </header>




    <?php
    $heureDeviner = 0;

    $minuteDeviner = 0;



    ?>
    <div class="container">
        <h2>Deniner l'heure</h2>
        <form name="heureDeviner" method="GET">

            l'heure:<input type="number" name="heureDeviner" value="<?= $heureDeviner ?>" placeholder="heure" />
            la minute:<input type="number" name="minuteDeviner" value="<?= $minuteDeviner ?>" placeholder="minute" />
            <input type="submit" name="submit" value="deviner">
        </form>

        <?php
        if (isset($_GET["submit"], $_GET["heureDeviner"], $_GET["minuteDeviner"])) {
            $heureDeviner = $_GET["heureDeviner"];
            $minuteDeviner = $_GET["minuteDeviner"];
            date_default_timezone_set('America/New_York');

            $minutes = date('i');
            $heure = date("h");
            $longueur = 0;
            $largeur = 0; ?>
        <h2>Résultat</h2>

        <h2>tableau de temps </h2>
        <table>
            <thead>
                <tr>
                    <th>minutes/heures</th>

                    <?php


                        for ($largeur = 1; $largeur <= 12; $largeur++) {

                            echo "<th>$largeur</th>";
                        }
                        echo "</tr>";
                        ?>
            <tbody>
                <?php
                for ($longueur = 0; $longueur < 60; $longueur++) {
                    echo "<tr><td>$longueur</td>";
                    for ($largeur = 1; $largeur <= 12; $largeur++) {

                        if ($longueur == $minutes && $largeur == $heure) {
                            if ($heure == $heureDeviner && $minutes == $minuteDeviner) {
                                echo "<td style='background-color:green;'>$largeur:$longueur</td>";
                            } else {
                                echo "<td style='background-color:blue;'>$largeur:$longueur</td>";
                            }
                        } else if ($longueur == $minuteDeviner && $largeur == $heureDeviner && ($heure != $heureDeviner || $minutes != $minuteDeviner)) {

                            echo "<td style='background-color:red;'>$largeur:$longueur</td>";
                        } else {
                            echo "<td>" . $largeur . ":" . $longueur . "</td>";
                        }
                    }
                    echo "</tr>";
                }
            }

                ?>
            </tbody>
        </table>
        <br>
        <br>

    </div>
</body>

</html>