<?
   $connect = mysql_connect("localhost","sjr","wofkr123");
   mysql_select_db("sjr_db", $connect);

   // �ʵ� num�� $num ���� ������ ���ڵ� ����
   $sql = "delete from stud_score where num = $num";
   mysql_query($sql, $connect);

   mysql_close($connect);

   // score_list.php �� ���ư�
   Header("Location:score_list.php"); 
?>
