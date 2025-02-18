<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>課題11</title>
</head>

<body>   
  <p>
       <?php
$user_data = ["なまえ" => "たまねぎ",  "値段" =>"200", " 産地" => "北海道"];

foreach($user_data as $key => $value){
    echo "<br>";
    echo "{$key}:{$value} <br>";
    
}
?>
   </p>
</body>

</html>