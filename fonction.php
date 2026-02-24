<?php

function calculer(int $a,int $b,callable $operation){
    return $operation($a ,$b);
}

function($a,$b )use ($nomOperation){

    switch($nomOperation){
        case "soustraction":
            return $a - $b;
        case "addition":
            return $a + $b;
            break;

    }
};