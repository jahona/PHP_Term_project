
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?
      function cal_fee1($day, $age){

          if($age>0 && $age<=3)
            $money=0;
          else if($age>4 && $age<=10)
            $money=13000;
          else if($age>11 && $age<=17)
            $money=15000;
          else
            $money=18000;
          return $money;
        }
      function cal_fee2($day, $age){
        if($day=="주간"){
          if($age>0 && $age<=3)
            $money=0;
          else if($age>4 && $age<=10)
            $money=25000;
          else if($age>11 && $age<=17)
            $money=28000;
          else
            $money=32000;
        }
        else{
          if($age>0 && $age<=3)
            $money=0;
          else if($age>4 && $age<=10)
            $money=22000;
          else if($age>11 && $age<=17)
            $money=25000;
          else
            $money=29000;
        }
        return $money;
      }
      function cal_fee3($day, $age){
          if($age>0 && $age<=3)
            $money=0;
          else if($age>4 && $age<=10)
            $money=22000;
          else if($age>11 && $age<=17)
            $money=25000;
          else
            $money=29000;
          return $money;
        }

      $category=1;
      $age=13;
      $day="야간";
      if($category==1)
        $fee = cal_fee1($day, $age);
      elseif($category==2)
        $fee=cal_fee2($day,$age);
      elseif($category==3)
        $fee=cal_fee3($age);

      if($category==1)
        $cat="입장권";
      elseif($category==2)
        $cat="자유 이용권";
      else
        $cat="빅5 이용권";

      echo "입장권 종류 : $cat <br>";
      echo "관람객 나이 : $age 세<br>";
      echo "입장료 : $fee 원";
    ?>
  </body>
</html>
