<?
	session_start();
	$table = "free";
	$ripple = "free_ripple";
	function getImage() {
		include "../lib/dbconn.php";

		$sql = "select * from free";
		$result = mysql_query($sql, $connect);

		$count = 0;

		while($row = mysql_fetch_array($result)) {
			$obj[$count] = (object)array('id' => $row[id], 'nick' => $row[nick], 'file_copied' => $row[file_copied_0]);
			$count++;
		}

		// for($i=0 ; $i<$count ; $i++) {
		//   echo $obj[$i]->id." ".$obj[$i]->nick." ".$obj[$i]->file_name."<br />";
		// }

		mysql_close();

		return $obj;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="../assets/css/main.css" />
<?
	include "../lib/dbconn.php";
	$scale=10;			// 한 화면에 표시되는 글 수

    if ($mode=="search")
	{
		if(!$search)
		{
			echo("
				<script>
				 window.alert('검색할 단어를 입력해 주세요!');
			     history.go(-1);
				</script>
			");
			exit;
		}
		$sql = "select * from $table where $find like '%$search%' order by num desc";
	}
	else
	{
		$sql = "select * from $table order by num desc";
	}

	$result = mysql_query($sql, $connect);
	$total_record = mysql_num_rows($result); // 전체 글 수

	// 전체 페이지 수($total_page) 계산
	if ($total_record % $scale == 0)
		$total_page = floor($total_record/$scale);
	else
		$total_page = floor($total_record/$scale) + 1;

	if (!$page)                 // 페이지번호($page)가 0 일 때
		$page = 1;              // 페이지 번호를 1로 초기화

	// 표시할 페이지($page)에 따라 $start 계산
	$start = ($page - 1) * $scale;
	$number = $total_record - $start;
?>
</head>
<?
	include "../lib/dbconn.php";
	$scale=10;			// 한 화면에 표시되는 글 수

    if ($mode=="search")
	{
		if(!$search)
		{
			echo("
				<script>
				 window.alert('검색할 단어를 입력해 주세요!');
			     history.go(-1);
				</script>
			");
			exit;
		}
		$sql = "select * from $table where $find like '%$search%' order by num desc";
	}
	else
	{
		$sql = "select * from $table order by num desc";
	}
	$result = mysql_query($sql, $connect);
	$total_record = mysql_num_rows($result); // 전체 글 수

	// 전체 페이지 수($total_page) 계산
	if ($total_record % $scale == 0)
		$total_page = floor($total_record/$scale);
	else
		$total_page = floor($total_record/$scale) + 1;

	if (!$page)                 // 페이지번호($page)가 0 일 때
		$page = 1;              // 페이지 번호를 1로 초기화

	// 표시할 페이지($page)에 따라 $start 계산
	$start = ($page - 1) * $scale;
	$number = $total_record - $start;
?>
<body>
	<div class="page-wrap">

		<!-- nav -->
			<nav id="nav">
					<? include "../lib/top_login1.php"; ?>
			</nav>

		<!-- Main -->
			<section id="main">

				<!-- Header -->
					<header id="header">
						<div>Snapshot <span>by TEMPLATED</span></div>
					</header>

				<!-- Gallery -->
					<section id="galleries">

						<!-- Photo Galleries -->
							<div class="gallery">

								<!-- Filters -->
									<header>
										<h1>Gallery</h1>
										<ul class="tabs">
											<li><a href="#" data-tag="all" class="button active">All</a></li>
											<li><a href="#" data-tag="people" class="button">People</a></li>
											<li><a href="#" data-tag="place" class="button">Places</a></li>
											<li><a href="#" data-tag="thing" class="button">Things</a></li>
										</ul>
									</header>

									<div class="content">
										<?
										$obj = getImage();
											for($i=0; $i<8; $i++){
												$str = "<div class='media all people'>"."<a href='클릭시 경로'><img src='./data/".$obj[$i]->file_copied."' alt='' title='This right here is a caption.' /></a>
												</div>";

												echo $str;
												echo $obj[0]->file_name;
											}
										?>
									</div>
									<!-- ContentEnd -->
							</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="copyright">
							&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images: <a href="https://unsplash.com/">Unsplash</a>.
						</div>
					</footer>
			</section>
	</div>

	<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.poptrox.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

</body>
</html>
