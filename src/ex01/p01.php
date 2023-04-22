
<?php

$math = 40;
$english = 50;

echo "数学は ". $math ." 点です。";
if ($math >= 60) {
    echo "合格です";
} else {
    echo "不合格です";
}

echo "<br>"; // 改行のためのbr

echo "英語は ". $english ." 点です。";
if ($english >= 60) {
    echo "合格です。";
} else {
    echo "不合格です。";
}
?>

