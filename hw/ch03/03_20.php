
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?
      $sum=0;

      for($i=1; $i<=100; $i++){
        if($i%5==0)
          $sum=$sum+$i;
      }
      echo "1에서 100사이에 있는 5의 배수의 합계 : $sum"
    ?>
  </body>
</html>
