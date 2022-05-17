<?php

function checkMDP($mdp)
{
    $symboles = ["a", "b", "c", "d", "e", "f", "g", "i", "j", "k", "h", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

    for ($i = 0; $i < count($symboles); $i++) {

        for ($j = 0; $j < count($symboles); $j++) {

            for ($k = 0; $k < count($symboles); $k++) {
                for ($r = 0; $r < count($symboles); $r++) {
                    $mdp_4 = $symboles[$i] . $symboles[$j] . $symboles[$k] . $symboles[$r];

                    if ($mdp_4 == $mdp) {
                        return $mdp;
                    }
                }
            }
        }
    }
}
function timeExecution($mdp)
{
    $start_time = microtime(true);
    checkMDP($mdp);
    $end_time = microtime(true);
    $execution_times = ($end_time - $start_time);
    echo " le temps d'execution le mot de passe($mdp) = " . $execution_times . " sec <br>";
}

function shuffle_cards(array &$cards): void
{
    $numberItems = count($cards);

    for ($i = $numberItems - 1; $i > 0; $i--) {
        $j = rand(0, $i);

        $temp = $cards[$i];
        $cards[$i] = $cards[$j];
        $cards[$j] = $temp;
    }
}