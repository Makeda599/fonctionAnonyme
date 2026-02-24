<?php

function calculer(int $a,int $b,callable $operation){
    return $operation($a ,$b);
}

