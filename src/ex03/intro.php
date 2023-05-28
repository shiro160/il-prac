<?php

// // MyClassを作成
// class MyClass {
//     // プロパティの宣言
//     public $name;
//     private $age;
//     // コンストラクタ
//     public function __construct($name){
//         $this->name = $name;
//     }
//     // メソッドの宣言
//     public function printHello(){
//         echo "Hello. My Name is " . $this->name;
//     }
// }

// $myObj = new MyClass("John");
// $myObj->printHello();
?>


<?php

// Animal（親クラス）を作成
class Animal {
    public $name;
    // 食べる関数
    public function eat() {
      echo $this->name . " はご飯を食べている。";
    }
}

// Dog（子クラス）を作成
class Dog extends Animal {
    public function eat() {
      echo $this->name . " はドッグフードを食べている";
    }
    public function bark() {
      echo $this->name . " は吠えている。";
    }
}
  

// Cat（子クラス）を作成
class Cat extends Animal {
    public function run() {
      echo $this->name . " は走り回っている。";
    }
}
?>

<?php
$dog = new Dog();
$dog->name = "Buddy";

$cat = new Cat();
$cat->name = "Lucy";
?>

<div> <?php $dog->eat(); ?> </div>
<div> <?php $dog->bark(); ?> </div>


<div> <?php $cat->eat(); ?> </div>
<div> <?php $cat->run(); ?> </div>