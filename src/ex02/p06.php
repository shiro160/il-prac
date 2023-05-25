
<h1>データの入力</h1>
<?php

$matrix =  [
    [2, 3, 1],
    [5, 4, 2],
    [1, 1, 7]
];

foreach($matrix as $row){
    foreach($row as $element){
        echo $element . " ";
    }
    echo "<br>";
}

?>


<h1>処理</h1>
<?php

// 初期化
$transpose = [
    [0, 0, 0],
    [0, 0, 0],
    [0, 0, 0]
];
for($i = 0 ; $i < count($matrix); $i++){
    for($j = 0 ; $j < count($matrix[$i]) ; $j++){
        $transpose[$i][$j] = $matrix [$j][$i];
    }
}

foreach($transpose as $row){
    foreach($row as $element){
        echo $element . " ";
    }
    echo "<br>";
}

?>