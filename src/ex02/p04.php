<h1> データの入力 </h1>

<?php
$data = [
    [4, 3, -1],
    [30, 4, 2],
    [1, 1, 19]
];

foreach($data as $row){
    foreach($row as $element){
        echo $element . ", ";
    }
    echo "<br>";
}
?>


<h2> 04-1</h2>

<?php
echo "列データ: ". count($data);
echo "<br>";
echo "行データ: ". count($data[0]);

?>


<h2> 04-2</h2>

<?php

$sums = [0,0,0]; // 0で初期化
for( $i = 0; $i < count($data); $i++){
    for($j = 0; $j < count($data[$i]); $j++){
        $sums[$i] += $data[$i][$j];
    }
    // echo $sums[$i]. "<br>";
}
?>
<div>中身だけ表示</div>
<?php
echo "[ ";
foreach($sums as $sum){
     echo $sum. " ";
}
echo "] <br>";

?>

<div>カンマ区切りで表示</div>
<?php
echo "[ ";
foreach($sums as $sum){
    echo $sum;
    if ($sum !== end($sums)){
        echo ", ";
    } 
}
echo "] <br>";

// echo "[ ";
// for($i = 0; $i < count($sums); $i++){
//     echo $sums[$i];
//     if ($i < count($sums) - 1){
//         echo ", ";
//     } 
// }
// echo "] <br>";

?> 



<h2> 04-3</h2>

<?php

$sums = [0, 0, 0]; // 0で初期化
for($i = 0 ; $i < count($data); $i++){
    for($j = 0 ; $j <  count($data[$i]); $j++){
        $sums[$j] +=  $data[$i][$j];
    }
}

echo "[ ";
foreach($sums as $sum){
    echo $sum;
    if ($sum !== end($sums)){
        echo ", ";
    } 
}
echo "] <br>";

?>

<h2> 04-4</h2>
<?php

$sum = 0;
for($i = 0 ; $i < count($data); $i++){
    $sum +=  $data[$i][$i];
}

echo $sum;

?>




