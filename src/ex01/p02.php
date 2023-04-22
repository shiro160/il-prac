
<?php

$math = 70;
$english = 70;

$sum = $math + $english;

if( $sum >= 140){
    echo "A判定";
}
else if( $sum >= 100 && $sum < 140){
    echo "B判定";
}
else  {
    echo "C判定";
}

?>