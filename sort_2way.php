<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
// ソートする配列を宣言
$nums = [15, 4, 18, 23, 10 ];

$array = $nums;
$order = [true, false];

function sort_2way($array, $order) {


if ($order === true){
sort($array);
foreach ($array as $num){
echo "昇順ソート <br>";
    echo $num;
}
 if ($order === false) {
 rsort($array);
 foreach ($nums as $num){
 echo "降順ソート <br>";
         echo $num;
}
}
}
}
sort_2way($array, $order);
 

        ?>
    </p>
</body>

</html>