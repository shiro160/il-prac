<?php

$math_points = [40, 40, 40];

$sum = 0;
// 合計の計算
// foreachを使って配列の要素を基準にループ処理を行う
foreach( $math_points as $p ){
    $sum += $p;
}

echo "合計値: ". $sum;
echo "<br>";
echo "平均値: ". ( $sum /count( $math_points) );

?>