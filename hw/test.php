<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?
      echo("
        <html>
        <body>
        <table border='1' width='1000'>");
        for($i=2; $i<=9; $i++){
          echo"<td align='center'>$i 단</td>";
      }
        for($i=2; $i<=9; $i++){
            echo'<tr>';
            for($j=2; $j<=9; $j++){
              $mult=$i*$j;
              echo "<td align='center'>$i * $j = $mult</td>";
            }
            echo'</tr>';


      }

      echo("
        </table>
        </body>
        </html>
      ");
    ?>
  </body>
</html>
