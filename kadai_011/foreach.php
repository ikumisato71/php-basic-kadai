<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題011</title>
</head>
<body>
  <P>
    <?php
    $foods_data=['名前'=>'玉ねぎ','値段'=>200,'産地'=>'北海道'];
    foreach($foods_data as $kye=>$value){
      echo"{$kye}:{$value}  <br>";
    }
    ?>
  </P>
</body>
</html>