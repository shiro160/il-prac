<?php

$a = 100;
$b = 100;
$c = 200;

$ab = $a === $b;
$bc = $b === $c;
$ca = $c === $a;

if ( $ab || $bc || $ca ){
    echo "OK";
}
else{
    echo "NG";
}