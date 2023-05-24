
<h1> データの読み込み </h1>
<?php
$data = [
    [ 59, 63, 95, 32, 100, 33, 92, 63],
    [ 82, 49, 11, 50, 38, 12, 30, 50], 
    [ 39, 20, 29, 30, 30, 91, 89, 65],
];

foreach($data as $row){
    foreach($row as $element){
        // PHPの文字列連結は"."であることに注意
        echo $element . " ";
    }
    echo "<br>";
}
?>


<h1> 02-1 各科目の平均点の算出 </h1>
<?php
$sum = [];
// 数学
$sum [0] = 0;
// 国語
$sum [1] = 0;
// 理科
$sum [2] = 0;

for($i = 0; $i < count($data); $i++){
    for($j = 0; $j < count($data[$i]); $j++){
        $sum[$i] += $data[$i][$j];
    }
}
?>

<h2> 数学: <?php echo $sum[0] ?></h2>
<h2> 国語: <?php echo $sum[1] ?></h2>
<h2> 理科: <?php echo $sum[2] ?></h2>



<h1> 02-2 個人の総得点 </h1>

<?php

// A~Hくんの得点をまとめて初期化
$sum = [0,0,0,0,0,0,0,0];

// 横に見ていく方法
for($i = 0; $i < count($data); $i++){
    for($j = 0; $j < count($data[$i]); $j++){
        $sum[$j] += $data[$i][$j];
    }
}
?>

<h2> 横に見ていく方法 </h2>
<h3> A君: <?php echo $sum[0] ?></h3>
<h3> B君: <?php echo $sum[1] ?></h3>
<h3> C君: <?php echo $sum[2] ?></h3>
<h3> D君: <?php echo $sum[3] ?></h3>
<h3> E君: <?php echo $sum[4] ?></h3>
<h3> F君: <?php echo $sum[5] ?></h3>
<h3> G君: <?php echo $sum[6] ?></h3>
<h3> H君: <?php echo $sum[7] ?></h3>


<?php
// A~Hくんの得点をまとめて初期化
$sum = [0,0,0,0,0,0,0,0];
// 縦に見ていく方法
for($i = 0; $i < count($sum); $i++){
    for($j = 0; $j < count($data); $j++){
        $sum[$i] += $data[$j][$i];
    }
}
?>
<h2> 縦に見ていく方法 </h2>
<h3> A君: <?php echo $sum[0] ?></h3>
<h3> B君: <?php echo $sum[1] ?></h3>
<h3> C君: <?php echo $sum[2] ?></h3>
<h3> D君: <?php echo $sum[3] ?></h3>
<h3> E君: <?php echo $sum[4] ?></h3>
<h3> F君: <?php echo $sum[5] ?></h3>
<h3> G君: <?php echo $sum[6] ?></h3>
<h3> H君: <?php echo $sum[7] ?></h3>