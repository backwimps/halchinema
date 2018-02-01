<main class="continer">

	<div class="wrapper">

		<!-- local-nav -->
		<div class="local-nav">
			<ul>
				<li><a href="/GitHub/halchinema/HalCinema/Movie"><span>上映中<br><span class="text-slender">Now Playing</span></span></a></li>
				<li><a href="/GitHub/halchinema/HalCinema/CommingSoon"><span>公開予定<br><span class="text-slender">Coming Soon</span></span></a></li>
				<li><a href="#"><span>劇場を探す<br><span class="text-slender">Theater List</span></span></a></li>
			</ul>
		</div><!-- /.local-nav -->

		<!-- Login -->
		<div class="login">
			<ul>
				<li class="login-item-button"><a href="/GitHub/halchinema/HalCinema/Login">ログイン</a></li>
				<li class="login-item-button"><a href="/GitHub/halchinema/HalCinema/SignUp">新規会員登録</a></li>
			</ul>
		</div>




		<div class="slider-pro" id="slider">
			<div class="sp-slides">
<?php foreach ($sliders as $row) { ?>
				<div class="sp-slide">
					<img class="sp-image" src="<?php echo 'img/movie/sumb/',$row->movie->imagePath; ?>">
				</div>
<? } ?>
			</div>
		</div>

		<!-- 映画ランキング -->
		<section class="ranking-area">
			<h2>
				<span class="section-title-ja">映画ランキング</span>
				<span class="section-title-en">Ranking</span>
			</h2>

			<div class="ranking">
<?php $rank = 1; ?>
<?php foreach ($newMovies as $row) { ?>
				<div class="ranking-item">
					<a href="/github/halchinema/HalCinema/Movie/More/?id=<?php echo $row->id; ?>"><!-- 映画詳細 -->
						<div class="ranking-image">
							<img class="inner-image" src="<?php echo 'img/movie/sumb/',$row->imagePath;?>">
						</div>
						<div class="ranking-text">
							<i class="fa fa-bookmark color_rk<?php echo $rank; ?> fa_size left" aria-hidden="true"><span class="color_white rank_no"><?php echo $rank; ?></span></i>
							<h2><?php echo $row->title ?></h2>
						</div>
					</a>
				</div><!-- /.ranking-item -->
<?php $rank++; ?>
<? } ?>

			</div><!-- /.ranking -->
		</section>

		<!-- インフォメーション -->
		<section class="infomation">
			<h2>
				<span class="section-title-ja">キャンペーン</span>
				<span class="section-title-en">Campaign</span>
			</h2>
<?php foreach ($campaigns as $row) { ?>
			<div class="info-item">
				<a href="#">
					<div class="info-image">
						<img src="<?php echo 'img/movie/', $row->imegePathl ?>" alt="<?php echo $row->title; ?>"  class="inner-image">
					</div>
					<div class="info-text">
						<h2>ニュース</h2>
						<div>
							<p><?php echo $row->title; ?></p>
						</div>
					</div>
				</a>
			</div><!-- /.info-item -->
<?php } ?>
		</section><!-- /.infomation -->

		<!-- 重要なお知らせ  -->
		<section class="Import-Information">
			<h2>
				<span class="section-title-ja">インフォメーション</span>
				<span class="section-title-en">Information</span>
			</h2>
			<div class="info-list">
				<ul>
<?php foreach ($news as $row) { ?>
					<li><a href="#"><?php echo $row->title; ?></a></li>
<? } ?>
				</ul>

			</div>

		</section><!-- /.Import-Information -->
	</div><!-- /.wrapper -->
</main>

<script type="text/javascript">
//トグルメニュー
$(function() {
	$('toggle-button').click(function(){
		$('header').toggleClass('openNav');
		$('open').toggle(false);
		$('close').toggle(true);

	});
});
</script>

<script>
$( document ).ready(function( $ ) {
	$('#slider').sliderPro({
		width: 600,//横幅
		arrows: true,//左右の矢印
		buttons: true,//ナビゲーションボタンを出す
		slideDistance:0,//スライド同士の距離
		visibleSize: '100%',//前後のスライドを表示
	});
});
</script>

<?php
// echo 'スライダー';
// foreach($sliders as $row){
// 	print_r($row);
// }
// echo '新作映画';
// foreach ($newMovies as $row) {
// 	print_r($row);
// }
// echo 'キャンペーン';
// foreach ($campaigns as $row) {
// 	print_r($row);
// }
// echo 'ニュース';
// foreach ($news as $row) {
// 	print_r($row);
// }
?>
