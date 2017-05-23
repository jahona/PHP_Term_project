<?
    session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/member.css" rel="stylesheet" type="text/css" media="all">
<script>
   function check_id()
   {
     window.open("check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=200,top=200,width=250,height=100,scrollbars=no,resizable=yes");
   }

   function check_nick()
   {
     window.open("check_nick.php?nick=" + document.member_form.nick.value,
         "NICKcheck",
          "left=200,top=200,width=250,height=100,scrollbars=no,resizable=yes");
   }

   function check_input()
   {
      if (!document.member_form.pass.value)
      {
          alert("���й�ȣ�� �Է��ϼ���");
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value)
      {
          alert("���й�ȣȮ���� �Է��ϼ���");
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)
      {
          alert("�̸��� �Է��ϼ���");
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.nick.value)
      {
          alert("�г����� �Է��ϼ���");
          document.member_form.nick.focus();
          return;
      }

      if (!document.member_form.hp2.value || !document.member_form.hp3.value )
      {
          alert("�޴��� ��ȣ�� �Է��ϼ���");
          document.member_form.nick.focus();
          return;
      }

      if (document.member_form.pass.value !=
            document.member_form.pass_confirm.value)
      {
          alert("���й�ȣ�� ��ġ���� �ʽ��ϴ�.\n�ٽ� �Է����ּ���.");
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form()
   {
      document.member_form.id.value = "";
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.nick.value = "";
      document.member_form.hp1.value = "010";
      document.member_form.hp2.value = "";
      document.member_form.hp3.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";

      document.member_form.id.focus();

      return;
   }
</script>
</head>
<?
    include "../lib/dbconn.php";

    $sql = "select * from member where id='$userid'";
    $result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);

    $hp = explode("-", $row[hp]);
    $hp1 = $hp[0];
    $hp2 = $hp[1];
    $hp3 = $hp[2];

    $email = explode("@", $row[email]);
    $email1 = $email[0];
    $email2 = $email[1];

    mysql_close();
?>
<body>
<div id="wrap">
  <div id="header">
    <? include "../lib/top_login2.php"; ?>
  </div>  <!-- end of header -->

  <div id="menu">
	<? include "../lib/top_menu2.php"; ?>
  </div>  <!-- end of menu -->

  <div id="content">
	<div id="col1">
		<div id="left_menu">
<?
			include "../lib/left_menu.php";
?>
		</div>
	</div> <!-- end of col1 -->

	<div id="col2">
        <form  name="member_form" method="post" action="modify.php">
		<div id="title">
			<img src="../img/title_member_modify.gif">
		</div>


		<div id="form_join">
			<div id="join1">
			<ul>
			<li>* ���̵�</li>
			<li>* ���й�ȣ</li>
			<li>* ���й�ȣ Ȯ��</li>
			<li>* �̸�</li>
			<li>* �г���</li>
			<li>* �޴���</li>
			<li>&nbsp;&nbsp;&nbsp;�̸���</li>
			</ul>
			</div>
			<div id="join2">
			<ul>
			<li><?= $row[id] ?></li>
			<li><input type="password" name="pass" value="<?= $row[pass] ?>"></li>
			<li><input type="password" name="pass_confirm" value="<?= $row[pass] ?>"></li>
			<li><input type="text" name="name" value="<?= $row[name] ?>"></li>
			<li><div id="nick1"><input type="text" name="nick" value="<?= $row[nick] ?>"></div><div id="nick2" ><a href="#"><img src="../img/check_id.gif" onclick="check_nick()"></a></div></li>
			<li><input type="text" class="hp" name="hp1" value="<?= $hp1 ?>">
             - <input type="text" class="hp" name="hp2" value="<?= $hp2 ?>"> - <input type="text" class="hp" name="hp3" value="<?= $hp3 ?>"></li>
			<li><input type="text" id="email1" name="email1" value="<?= $email1 ?>"> @ <input type="text" name="email2"
			           value="<?= $email2 ?>"></li>
			</ul>
			</div>
			<div class="clear"></div>
			<div id="must"> * �� �ʼ� �Է��׸��Դϴ�.^^</div>
		</div>

		<div id="button"><a href="#"><img src="../img/button_save.gif"  onclick="check_input()"></a>&nbsp;&nbsp;
		                 <a href="#"><img src="../img/button_reset.gif" onclick="reset_form()"></a>
		</div>
	    </form>
	</div>
  </div>
</div>

</body>
</html>
