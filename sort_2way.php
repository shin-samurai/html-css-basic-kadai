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

function sort_2way($array, $order) {


if ($order === true){
sort($nums);
echo "昇順ソート <br>";
}
foreach ($nums as $num){
    echo $num;
}
 if ($order === false) {
 rsort($nums);
 echo "降順ソート <br>";
 }
 foreach ($nums as $num){
    echo $num;
}
}
 

        ?>
    </p>
</body>

</html>