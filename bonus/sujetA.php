<?php

function colle($x, $y)
{
    if ($x == 0 || $y == 0) {
        exit;
    }
    for ($i = 0; $i < $y; $i++) {
        for ($j = 0; $j < $x; $j++) {
            if ($i == 0 || $i == ($y - 1)) {
                switch ($j) {
                    case 0:
                        echo "o";
                        break;
                    case ($x - 1):
                        echo "o";
                        break;
                    default:
                        echo "-";
                }
            } else {
                switch ($j) {
                    case 0:
                        echo "|";
                        break;
                    case ($x - 1):
                        echo "|";
                        break;
                    default:
                        echo " ";
                }
            }
        }
        echo "\n";
    }
}
