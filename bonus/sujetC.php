<?php

function colle($x, $y)
{
    if ($x == 0 || $y == 0) {
        exit;
    }
    for ($i = 0; $i < $y; $i++) {
        for ($j = 0; $j < $x; $j++) {
            if ($x == 1 || $y == 1) {
                echo "B";
            } elseif ($i == 0) {
                switch ($j) {
                    case 0:
                        echo "A";
                        break;
                    case ($x - 1):
                        echo "A";
                        break;
                    default:
                        echo "B";
                }
            } elseif ($i == ($y - 1)) {
                switch ($j) {
                    case 0:
                        echo "C";
                        break;
                    case ($x - 1):
                        echo "C";
                        break;
                    default:
                        echo "B";
                }
            } else {
                switch ($j) {
                    case 0:
                        echo "B";
                        break;
                    case ($x - 1):
                        echo "B";
                        break;
                    default:
                        echo " ";
                }
            }
        }
        echo "\n";
    }
}