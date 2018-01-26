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
		<section class="content">
			<h2>
				<span class="section-title-ja">上映中作品</span>
				<span class="section-title-en">Now Playing</span>
			</h2>


			<div class="content-box">
<?php foreach ($movie as $row) { ?>
				<div class="content-item">
					<a href="<?php echo $this->Url->build("/",true); ?>Movie/More/?id=<?php echo $row->id; ?>">
						<div class="content-image">
							<img src="img/movie/sumb/<?php echo $row->imagePath; ?>" alt="泥棒役者"  class="inner-image">
						</div>
						<div class="content-text">
							<div>
								<p><?php echo $row->title; ?></p>
							</div>
						</div>
					</a>
				</div><!-- /.content-item -->
<?php } ?>
			</div>
		</section><!-- /.contentmation -->

		<div class="link-button">
			<p><a href="#">公開予定の作品はこちら</a></p>
		</div>

		<div class="link-button">
			<p><a href="#">劇場一覧はこちら</a></p>
		</div>

	</div><!-- /.wrapper -->
</main>
