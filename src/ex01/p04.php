<?php
// 回数指定の場合は通用のfor文の方が使いやすい
for($i = 1 ; $i <= 100; $i++){
    echo $i. ": ";

    if( $i % 3 == 0 ){
        echo "Fizz";
    }
    if($i % 5 == 0) {
        echo "Buzz";
    }
    echo "<br>";
} 
?>

<?php
// 回数指定の場合は通用のfor文の方が使いやすい
for($i = 1 ; $i <= 100; $i++){
    echo $i. ": ";

    if ($i % 15 == 0 ){
        echo "FizzBuzz";
    }
    else if( $i % 3 == 0 ){
        echo "Fizz";
    }
    else if($i % 5 == 0) {
        echo "Buzz";
    }

    echo "<br>";
} 
?>