<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>課題11</title>
</head>

<body>   
  <p>
       <?php
$user_datas = ["なまえ:" => "たまねぎ", "値段:" => "200","産地:" => "北海道"];

foreach($user_datas as $user_data){
    echo "<br>";
    echo $user_data;
    
}
?>
   </p>
</body>

</html>