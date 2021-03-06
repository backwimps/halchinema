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

		<!-- 映画詳細 -->
	    <div class="detail-box01">
	        <div class="detail-boxA">
				<?php echo $this->Html->image('movie/main/IT.png'); ?>
	            <!-- <img src="images/image01.jpg" alt="映画タイトル" class="detail-img"> -->
	            <p class="detail-title"><?php echo h($movie->title); ?></p>
	        </div>
	        <div class="detail-boxB">
	            <p class="detail-text">
	               <?php echo h($movie->content); ?>
	            </p>
	        </div>
	    </div>

		<div class="detail-theaterList">
			<ul class="tab">
			    <li class="select">東北地方</li>
			    <li>関東地方</li>
			    <li>中部地方</li>
			    <li>近畿地方</li>
			    <li>中国地方</li>
			    <li>四国地方</li>
			    <li>九州地方</li>
			</ul>

			<ul class="address-theater">
			    <li><p class="pre">青森県<br>
			        <a href="#detail-theater-date">&nbsp;&nbsp;HALシネマズ青森店</a></p>
			        <p class="pre">秋田県<br>
			        <a href="#detail-theater-date">&nbsp;&nbsp;HALシネマズ秋田店</a></p>
			    </li>

			    <li class="hide">
			        <p class="pre">神奈川県<br>
			        <a href="#detail-theater-date">&nbsp;&nbsp;HALシネマズ神奈川店</a></p>
			        <p class="pre">千葉県<br>
			        <a href="#detail-theater-date">&nbsp;&nbsp;HALシネマズ千葉店</a></p>
			        <p class="pre">東京都<br>
			        <a href="#detail-theater-date">&nbsp;&nbsp;HALシネマズ東京店</a></p>
			    </li>

			    <li class="hide">
			        <p class="pre">愛知県<br>
			        <a href="#detail-theater-date">&nbsp;&nbsp;HALシネマズ愛知店</a></p>
			        <p class="pre">長野県<br>
			        <a href="#detail-theater-date">&nbsp;&nbsp;HALシネマズ長野店</a></p>
			    </li>

			    <li class="hide">
			        <p class="pre">大阪府<br>
			        <a href="#detail-theater-date">&nbsp;&nbsp;HALシネマズ大阪店</a></p>
			        <p class="pre">京都府<br>
			        <a href="#detail-theater-date">&nbsp;&nbsp;HALシネマズ京都店</a></p>
			    </li>

			    <li class="hide">
			        <p class="pre">岡山県<br>
			        <a href="#detail-theater-date">&nbsp;&nbsp;HALシネマズ岡山店</a></p>
			    </li>

			    <li class="hide">
			        <p class="pre">香川県<br>
			        <a href="#detail-theater-date">&nbsp;&nbsp;HALシネマズ香川店</a></p>
			    </li>

			    <li class="hide">
			        <p class="pre">福岡県<br>
			        <a href="#detail-theater-date">&nbsp;&nbsp;HALシネマズ福岡店</a></p>
			        <p class="pre">沖縄県<br>
			        <a href="#detail-theater-date">&nbsp;&nbsp;HALシネマズ沖縄店</a></p>
			    </li>
			</ul>


		<div id="detail-theater-date">
			<ul class="date-tab">
			    <li class="date-select">1月1日（月）</li>
			    <li>1月2日（火）</li>
			    <li>1月3日（水）</li>
			    <li>1月4日（木）</li>
			    <li>1月5日（金）</li>
			    <li>1月6日（土）</li>
			    <li>1月7日（日）</li>
			</ul>

			<ul class="date-content">
			    <li>
			        <p class="time"><a href="/GitHub/halchinema/HalCinema/Reserve/">11:00</a></p>
			        <p class="time"><a href="/GitHub/halchinema/HalCinema/Reserve/">13:00</a></p>
			        <p class="time"><a href="/GitHub/halchinema/HalCinema/Reserve/">15:00</a></p>
			    </li>
			    <li class="hide">
			        <p class="time"><a href="#">13:00</a></p>
			        <p class="time"><a href="#">15:00</a></p>
			        <p class="time"><a href="#">17:00</a></p>
			    </li>
			    <li class="hide">
			        <p class="time"><a href="#">11:00</a></p>
			        <p class="time"><a href="#">13:00</a></p>
			        <p class="time"><a href="#">15:00</a></p>
			        <p class="time"><a href="#">17:00</a></p>
			    </li>
			    <li class="hide">
			        <p class="time"><a href="#">11:00</a></p>
			        <p class="time"><a href="#">13:00</a></p>
			    </li>
			    <li class="hide">
			        <p class="time"><a href="#">15:00</a></p>
			        <p class="time"><a href="#">17:00</a></p>
			    </li>
			    <li class="hide">
			        <p class="time"><a href="#">13:00</a></p>
			        <p class="time"><a href="#">15:00</a></p>
			    </li>
			    <li class="hide">
			        <p class="time"><a href="#">11:00</a></p>
			        <p class="time"><a href="#">13:00</a></p>
			        <p class="time"><a href="#">15:00</a></p>
			        <p class="time"><a href="#">17:00</a></p>
			    </li>
			</ul>
		</div>

		<p class="link-commingsoon"><a href="Commingsoon.php">公開予定の作品はこちら</a></p>
		<p class="link-theater"><a href="Theater.php">劇場一覧はこちら</a></p>
	</div>
</main>

<script>
$('#sampleTab a').click(function (e) {
	e.preventDefault();
	$(this).tab('show');
});

//タブ切り替えメニュー
$(function() {
    //クリックしたときのファンクションをまとめて指定
    $('.tab li').click(function() {
        //.index()を使いクリックされたタブが何番目かを調べ、
        //indexという変数に代入します。
        var index = $('.tab li').index(this);

        //コンテンツを一度すべて非表示にし、
        $('.address-theater li').css('display','none');

        //クリックされたタブと同じ順番のコンテンツを表示します。
        $('.address-theater li').eq(index).css('display','block');

        //一度タブについているクラスselectを消し、
        $('.tab li').removeClass('select');

        //クリックされたタブのみにクラスselectをつけます。
        $(this).addClass('select')
    });
});

$(function() {
    //クリックしたときのファンクションをまとめて指定
    $('.date-tab li').click(function() {
        //.index()を使いクリックされたタブが何番目かを調べ、
        //indexという変数に代入します。
        var index = $('.date-tab li').index(this);

        //コンテンツを一度すべて非表示にし、
        $('.date-content li').css('display','none');

        //クリックされたタブと同じ順番のコンテンツを表示します。
        $('.date-content li').eq(index).css('display','block');

        //一度タブについているクラスselectを消し、
        $('.date-tab li').removeClass('date-select');

        //クリックされたタブのみにクラスselectをつけます。
        $(this).addClass('date-select')
    });
});

</script>

<pre><?php print_r($movie); ?></pre>
