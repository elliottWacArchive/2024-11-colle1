<?php

function colle($x, $y)
{
    if ($x == 0 || $y == 0) {
        exit; // dans le cas ou un des 2 parametres vaut 0 le code se termine pour ne pas avoir d'erreur
    }
    for ($i = 0; $i < $y; $i++) { // la première boucle met l'index $i sur chaque ligne
        for ($j = 0; $j < $x; $j++) { // la deuxieme boucle met l'index $j sur chaque colonne (pour ajouter chaque caractère)
            if ($x == 1 || $y == 1) {
                echo "B"; // rempli la condition où on a une ligne ou une colonne pour afficher seulement B
            } elseif ($i == 0 || $i == ($y - 1)) { // le elseif va verifier si on est à la premiere ou la dernière ligne
                switch ($j) { // le switch verifie ou est l'index $j
                    case 0: // le cas où c'es le premier caractère
                        echo "A";
                        break;
                    case ($x - 1): // le cas où c'est le dernier
                        echo "C";
                        break;
                    default: // le cas où c'est le reste
                        echo "B";
                }
            } else { // le else s'occupe de toutes les autres lignes
                switch ($j) {
                    case 0: // le cas où c'es le premier caractère
                        echo "B";
                        break;
                    case ($x - 1): // le cas où c'est le dernier
                        echo "B";
                        break;
                    default: // le cas où c'est le reste
                        echo " ";
                }
            }
        }
        echo "\n"; // retour à la ligne pour passer a la colonne
    }
}

/* norme faite avec phpcs */
