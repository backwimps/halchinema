<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>HAL CINEMA</title>
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/sanitize.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slider-pro.min.css">
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/jquery.sliderPro.min.js"></script>
</head>
<body>
	<header class="header">
		<div class="toggle-menu">
			<a href="#" class="toggle-button">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
				<span class="toggle-button-text">
					<span class="open">メニュー</span>
				</span>
			</a>
		</div>
		<div class="header-logo">
			<h1><img src="img/logo.png"></h1>
		</div>
	</header>

	<?= $this->fetch('content') ?>

	<footer>
		<div class="footer-toppage">
			<a href="#">
				<p>ページトップへ</p>
			</a>
		</div>
		<div class="footer-link">
			<ul>
				<li><a href="#">企業情報</a></li>
				<li><a href="#">サイトマップ</a></li>
				<li><a href="#">個人情報の取扱いについて</a></li>
				<li><a href="#">プライバシーポリシー</a></li>
				<li><a href="#">ご利用に祭して</a></li>
			</ul>
		</div>
		<div class="footer-copyright">
			<p>©︎2017 HALCINMEA All Rights Reserved</p>
		</div>
	</footer>

</body>
</html>
