<?php

$input = [
    [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ],
    [
        [10, 11, 12],
        [13, 14, 15],
        [16, 17, 18]
    ]
];

$counter = 1;
foreach($input as $matrix){
    foreach($matrix as $col){
        foreach($col as $datum){
            echo "Element ". $counter .":" . $datum. "<br>";
            $counter++;
        }
    }
}
