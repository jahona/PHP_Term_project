<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>게시판 목록 보기</h3>
    <table border='1' width='600'>
      <tr><td>번호</td><td>제목</td><td>글쓴이</td><td>날짜</td></tr>
      <?
        $num=1;
        $name="홍길동";
        $date="2013/03/10";

        for($i=1; $i<=10; $i++){
          $title="게시판 제목".$num;
          echo("<tr><td width='50' align='center'>$num</td><td>$title</td><td width='50'>$name</td><td width='80'>$date</td></tr>");
          $num++;
        }
      ?>
    </table>
  </body>
</html>
