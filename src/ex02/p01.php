

<h1> forを使う場合 </h1>
<?php
// 
$ary = [ 1292, 334, 10, 3044, 302, 28,948, 8190, 9492, 982, 2038, 9803, 34234, 32420, 827, 928 ];

$sum = 0;
for($i = 0; $i < count($ary); $i++){
    $sum += $ary[$i];
}
echo $sum;
?>

<h1> foreachを使う場合 </h1>
<?php
$ary = [ 1292, 334, 10, 3044, 302, 28,948, 8190, 9492, 982, 2038, 9803, 34234, 32420, 827, 928 ];

$sum = 0;
foreach($ary as $element){
    $sum += $element;
}
echo $sum;
?>





