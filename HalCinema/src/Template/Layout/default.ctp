<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>HAL CINEMA</title>
	<?= $this->Html->css('font-awesome.css') ?>

	<?= $this->Html->css('sanitize.css') ?>

	<?= $this->Html->css('style.css') ?>

	<?= $this->Html->css('slider-pro.min.css'); ?>

	<?php echo $this->Html->script('jquery-1.11.0.min.js'); ?>

<?php if($this->name == 'Home'){ ?>
	<?php echo $this->Html->script('jquery.sliderPro.min.js'); ?>
<?php }else if($this->name == 'Reserve'){ ?>
	<?= $this->Html->css('seat.css') ?>

	<?php echo $this->Html->script('jquery.seat-charts.js'); ?>
<?php } ?>
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
			<h1><?php
			echo $this->Html->image("logo.png", ["alt" => "HalCinemaのロゴ",'url' => ['controller' => 'Home', 'action' => 'index']]);?>
		 </h1>
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
