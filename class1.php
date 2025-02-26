<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
     <p>
         <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する
             private $name;

           private $price;
             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
             }
//メソッドを定義する
             public function set_name(string $name){
                 $this->name = $name;
             }
             public function show_price() {
                 echo $this->price . '<br>';
             }
         }

         // インスタンス化する
         $yakisoba = new Food("yakisoba", 200);
//メソッドを実行する
//$yakisoba->name = $name;
         // プロパティを出力する
         print_r($yakisoba);
$yakisoba->show_price();

         ?>
     </p>
     <p>
         <?php
         // クラスを定義する
         class Animal {
             // プロパティを定義する
             private $name;
             private $height;
             private $weight;

             // コンストラクタを定義する
             public function __construct(string $name, int $height, int $weight) {
                 $this->name = $name;
                 $this->height = $height;
                 $this->weight = $weight;
             }
//メソッドを定義する
             public function set_name(string $name){
$this->name = $name;
}
             public function show_height(){
                 echo $this->height . "<br>";
             }
         }

         // インスタンス化する
         $lion = new Animal("lion", 136, 200);



// プロパティの値を出力する
         print_r($lion);

//メソッドを実行する
         $lion->show_height();

         ?>
     </p>


       
   
</body>

</html>