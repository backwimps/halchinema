<main class="continer">

	<div class="wrapper">

		<!-- local-nav -->
		<div class="local-nav">
			<ul>
				<li><a href="#"><span>上映中<br><span class="text-slender">Now Playing</span></span></a></li>
				<li><a href="#"><span>公開予定<br><span class="text-slender">Coming Soon</span></span></a></li>
				<li><a href="#"><span>劇場を探す<br><span class="text-slender">Theater List</span></span></a></li>
			</ul>
		</div><!-- /.local-nav -->

		<!-- Login -->
		<div class="login">
			<ul>
				<li class="login-item-button"><a href="./Login">ログイン</a></li>
				<li class="login-item-button"><a href="./SignUp">新規会員登録</a></li>
			</ul>
		</div>

		<div class="slider-pro" id="slider">
			<div class="sp-slides">
				<div class="sp-slide">
					<img class="sp-image" src="img/image01.jpg"/>
				</div>
				<div class="sp-slide">
					<img class="sp-image" src="img/image02.jpg"/>
				</div>
				<div class="sp-slide">
					<img class="sp-image" src="img/image03.png"/>
				</div>
			</div>
		</div>

		<!-- 映画ランキング -->
		<section class="ranking-area">
			<h2>
				<span class="section-title-ja">映画ランキング</span>
				<span class="section-title-en">Ranking</span>
			</h2>

			<div class="ranking">
				<div class="ranking-item">
					<a href="#">
						<div class="ranking-image">
							<img class="inner-image" src="img/image01.jpg">
						</div>
						<div class="ranking-text">
							<i class="fa fa-bookmark color_rk1 fa_size left" aria-hidden="true"><span class="color_white rank_no">1</span></i>
							<h2>IT/イットそれが見えたら</h2>
						</div>
					</a>
				</div><!-- /.ranking-item -->

				<div class="ranking-item">
					<a href="#">
						<div class="ranking-image">
							<img class="inner-image" src="img/image01.jpg">
						</div>
						<div class="ranking-text">
							<i class="fa fa-bookmark color_rk2 fa_size left" aria-hidden="true"><span class="color_white rank_no">2</span></i>
							<h2>IT/イットそれが見えたら</h2>
						</div>
					</a>
				</div><!-- /.ranking-item -->

				<div class="ranking-item">
					<a href="#">
						<div class="ranking-image">
							<img class="inner-image" src="img/image01.jpg">
						</div>
						<div class="ranking-text">
							<i class="fa fa-bookmark color_rk3 fa_size left" aria-hidden="true"><span class="color_white rank_no">3</span></i>
							<h2>IT/イットそれが見えたら</h2>
						</div>
					</a>
				</div><!-- /.ranking-item -->

			</div><!-- /.ranking -->
		</section>

		<!-- インフォメーション -->
		<section class="infomation">
			<h2>
				<span class="section-title-ja">インフォメーション</span>
				<span class="section-title-en">Information</span>
			</h2>
			<div class="info-item">
				<a href="#">
					<div class="info-image">
						<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
					</div>
					<div class="info-text">
						<h2>ニュース</h2>
						<div>
							<p>HAL CINEMA新宿店2/24日時オープン</p>
						</div>
					</div>
				</a>
			</div><!-- /.info-item -->

			<div class="info-item">
				<a href="#">
					<div class="info-image">
						<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
					</div>
					<div class="info-text">
						<h2>ニュース</h2>
						<div>
							<p>HAL CINEMA新宿店2/24日時オープン</p>
						</div>
					</div>
				</a>
			</div><!-- /.info-item -->

			<div class="info-item">
				<a href="#">
					<div class="info-image">
						<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
					</div>
					<div class="info-text">
						<h2>ニュース</h2>
						<div>
							<p>HAL CINEMA新宿店2/24日時オープン</p>
						</div>
					</div>
				</a>
			</div><!-- /.info-item -->
		</section><!-- /.infomation -->

		<!-- 重要なお知らせ  -->
		<section class="Import-Information">
			<h2>
				<span class="section-title-ja">インフォメーション</span>
				<span class="section-title-en">Information</span>
			</h2>
			<div class="info-list">
				<ul>
					<li><a href="#">aaaaaa</a></li>
					<li><a href="#">aaaaaa</a></li>
					<li><a href="#">aaaaaa</a></li>
					<li><a href="#">aaaaaa</a></li>
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



<div class="home">
	トップページ
	<pre>

		<?
		foreach ($slider as $row) {
			echo $row->id.'<br>';
			echo $row->movie_id.'<br>';
			echo $row->movie_title.'<br>';
			echo $row->movie_imagePath.'<br>';
		}

		foreach ($campaign as $row) {
			echo $row->id.'<br>';
			echo $row->title.'<br>';
			echo $row->content.'<br>';
			echo $row->postiong_time.'<br>';
		}

		foreach ($news as $row) {
			echo $row->id;
			echo $row->title.'<br>';
			echo $row->content.'<br>';
			echo $row->posting_time.'<br>';
		}
		?>
	</pre>
</div>
