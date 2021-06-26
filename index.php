<?php

$a = 1;

function test(&$a){

    $a++;

}

$a1 = 8;
echo test($a1);
echo "<br>";
