

<?
  if(!$userid)
{
?>
    <ul>
      <li><a href="./login/login_form.php"><!--�α���--><span class="icon fa-home"></span></a></li>
      <li><a href="./member/member_form.php"><!--ȸ������--><span class="icon fa-home"></span></a></li>
      <li><a href="./memo/memo.php"><span class="icon fa-home"></span></a></li>
      <li><a href="./greet/list.php"><span class="icon fa-home"></span></a></li>
      <li><a href="./concert/list.php"><span class="icon fa-home"></span></a></li>
      <li><a href="./download/list.php"><span class="icon fa-home"></span></a></li>
      <li><a href="./free/list.php"><span class="icon fa-home"></span></a></li>
      <li><a href="./qna/list.php"><span class="icon fa-home"></span></a></li>

<?
}
else
{
?>
<?=$usernick?> (level:<?=$userlevel?>) |
<a href="./login/logout.php">�α׾ƿ�</a> | <a href="./login/member_form_modify.php">��������</a>
<?
}
?>
