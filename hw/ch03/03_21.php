
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?
      echo"---------------------------------<br>";
      echo"&nbsp;&nbsp;&nbsp;섭씨&nbsp;&nbsp;&nbsp;화씨<br>";
      echo"---------------------------------<br>";
      for($c=-15; $c<=35; $c=$c+5){
        $f=$c*9/5+32;
        echo"&nbsp;&nbsp;&nbsp;$c&nbsp;&nbsp;&nbsp;$f<br>";
      }
      echo"---------------------------------<br>";
    ?>
  </body>
</html>
