<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <P>
  <?php
  function sort_array($array,$order){
    if($order){
      sort($array);
      echo"昇順にソートします。<br>";
    }else{
      rsort($array);
      echo"降順にソートします。<br>";
    }
    foreach($array as $num){
      echo $num . "<br>";
    }
  }
  $array=array(15,4,18,23,10);
  sort_array($array,true);
  sort_array($array,false);
  ?>
</P>

</body>
</html>