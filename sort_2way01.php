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


if ($order){
sort($array);
echo "昇順ソート <br>";
}
 else {
    rsort($array);
    }   echo "降順ソート <br>";
 
 foreach ($array as $num){
    echo $num . "<br>";
         }        echo $num;
        }



sort_2way($nums, true);
 sort_2way($nums, false);

        ?>
    </p>
</body>

</html>