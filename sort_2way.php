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

$array1 = $nums;
$array2 = $nums;
$order = [true, false];

function sort_2way($array1, $order) {


if ($order){
sort($array1);
foreach ($array1 as $num){
echo "昇順ソート <br>";
    echo $num;
}
}
 else {
 rsort($array2);
 foreach ($array2 as $num){
 echo "降順ソート <br>";
         echo $num;
}
}
}

sort_2way($array1, $order);
 sort_2way($array2, $order);

        ?>
    </p>
</body>

</html>