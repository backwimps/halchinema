<?php
$week = array( "日", "月", "火", "水", "木", "金", "土" );
?>
<main class="continer">
	<div class="wrapper">

		<!-- local-nav -->
		<div class="local-nav">
			<ul>
				<li><a href="<?php echo $this->Url->build("/",true); ?>Movie"><span>上映中<br><span class="text-slender">Now Playing</span></span></a></li>
				<li><a href="<?php echo $this->Url->build("/",true); ?>CommingSoon"><span>公開予定<br><span class="text-slender">Coming Soon</span></span></a></li>
				<li><a href="#"><span>劇場を探す<br><span class="text-slender">Theater List</span></span></a></li>
			</ul>
		</div><!-- /.local-nav -->

		<!-- インフォメーション -->
		<section class="comingsoon">
			<h2>
				<span class="section-title-ja">公開予定作品</span>
				<span class="section-title-en">Coming soon</span>
			</h2>

			<div class="schedule-coming">
				<h3>公開予定日</h3>
				<ul class="schedule-table">
					<li><a href="#<?php echo date('Ymd'); ?>"><?php echo date('n/j');?>~</a></li>
					<?php
					$w = 7;
					for($i = 0; $i < 6; $i++){ ?>
					<li><a href="#<?php echo date('Ymd', strtotime($w.' day')); ?>"><?php echo date('n/j', strtotime($w.' day'));?>~</a></li>
					<?php $w += 7;} ?>

				</ul>
			</div>

			<!-- 本日公開の映画 -->
			<div class="content-box">
				<!-- 内部リンク飛び先 -->
				<div class="movie-day" id="<?php echo date('Ymd'); ?>">
					<h3><?php echo date('n月j日'); ?></h3>
				</div>
				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->
			</div>

			<!-- 1週間後公開の映画 -->
			<div class="content-box">
				<!-- 内部リンク飛び先 -->
				<div class="movie-day" id="<?php echo date('Ymd', strtotime('+7 day')); ?>">
					<h3><?php echo date('n月j日', strtotime('+7 day')); ?></h3>
				</div>
				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->
			</div>

			<!-- ２週間後公開の映画 -->
			<div class="content-box">
				<!-- 内部リンク飛び先 -->
				<div class="movie-day" id="<?php echo date('Ymd', strtotime('+14 day')); ?>">
					<h3><?php echo date('n月j日', strtotime('+14 day')); ?></h3>
				</div>
				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->
			</div>

			<!-- ３週間後公開の映画 -->
			<div class="content-box">
				<!-- 内部リンク飛び先 -->
				<div class="movie-day" id="<?php echo date('Ymd', strtotime('+21 day')); ?>">
					<h3><?php echo date('n月j日', strtotime('+21 day')); ?></h3>
				</div>
				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->
			</div>

			<!-- ４週間後公開の映画 -->
			<div class="content-box">
				<!-- 内部リンク飛び先 -->
				<div class="movie-day" id="<?php echo date('Ymd', strtotime('+28 day')); ?>">
					<h3><?php echo date('n月j日', strtotime('+28 day')); ?></h3>
				</div>
				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->
			</div>

			<!-- ５週間後公開の映画 -->
			<div class="content-box">
				<!-- 内部リンク飛び先 -->
				<div class="movie-day" id="<?php echo date('Ymd', strtotime('+35 day')); ?>">
					<h3><?php echo date('n月j日', strtotime('+35 day')); ?></h3>
				</div>
				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->
			</div>

			<!-- ６週間後公開の映画 -->
			<div class="content-box">
				<!-- 内部リンク飛び先 -->
				<div class="movie-day" id="<?php echo date('Ymd', strtotime('+42 day')); ?>">
					<h3><?php echo date('n月j日', strtotime('+42 day')); ?></h3>
				</div>
				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->

				<div class="content-item">
					<a href="#">
						<div class="content-image">
							<img src="./img/image02.jpg" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p>HAL CINEMA新宿店2/24日時オープン</p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->
			</div>

		</section>
	</div><!-- /.wrapper -->
</main>
