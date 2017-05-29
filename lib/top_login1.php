

<?
  if(!$userid)
{
?>
    <ul>
      <li><a href="./login/login_form.php"><!--로그인--><span class="icon fa-home"></span></a></li>
      <li><a href="./member/member_form.php"><!--회원가입--><span class="icon fa-home"></span></a></li>
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
<a href="./login/logout.php">로그아웃</a> | <a href="./login/member_form_modify.php">정보수정</a>
<?
}
?>
