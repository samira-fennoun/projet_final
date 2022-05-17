<!DOCTYPE html>
<html lang="fr-ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>brassage des cartes</title>
</head>

<body>
    <header>
        <nav role="menubar" class="navbar">
            <a role=" menuitem" href="index.php">Accueil</a>
            <a role=" menuitem" href="page2.php">deviner l'heure</a>
            <a role=" menuitem" class="active" href="page3.php">Brassage</a>
            <a role=" menuitem" href="page4.php">validation de mot de passe</a>
        </nav>
    </header>
    <main>
        <?php
        require('function.php');

        $cards = [];
        $cardsSymbols = ["Carreau", "Trèfle", "Coeur", "Pique"];

        foreach ($cardsSymbols as $symbol) {


            for ($i = 1; $i <= 13; $i++) {
                $cards[] = $i . "-" . $symbol;
            }
        }

        shuffle_cards($cards);

        $cardIndex = 0;
        ?>

        <table>
            <tbody>
                <?php for ($i = 0; $i < 4; $i++) { ?>
                <tr>
                    <?php for ($j = 0; $j < 13; $j++) { ?>
                    <td>
                        <?php echo ($cards[$cardIndex]);
                                $cardIndex++; ?>
                    </td>
                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>

</html>