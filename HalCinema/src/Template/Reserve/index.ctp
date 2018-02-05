<main class="continer">
	<div class="wrapper">
		<div class="step">
			<ul>
				<li>
					STEP1:<br>
					座席・チケットを選択
				</li>
				<li>
					STEP2:<br>
					購入内容確認
				</li>
				<li>
					STEP3:<br>
					購入完了
				</li>
			</ul>
		</div><!-- /.step -->
		<p class="mt24">座席を選択して下さい。</p>
		<div class="seat">

			<div id="seat-map">
				<div class="front-indicator">Front</div>
			</div>
			<div class="booking-details">
				<h2>Booking Details</h2>
				<h3> Selected Seats (<span id="counter">0</span>):</h3>
				<ul id="selected-seats"></ul>
				Total: <b>¥<span id="total">0</span></b>
				<button class="checkout-button">Checkout &raquo;</button>
				<div id="legend"></div>
			</div>

		</div>

		<div class="ticket">
			<p>チケットの種類を選択して下さい</p>
			<ul>
				<li name="seat01">
					<div class="ticket-seat"></div>
					<div class="ticket-select">
						<div class="tickets-select-btn">
							<select name="ticket">
								<option value="一般">一般</option>
								<option value="大・専">大・専</option>
								<option value="高校生">高校生</option>
								<option value="中・小">中・小</option>
								<option value="幼児(3~)">幼児(3~)</option>
								<option value="シニア(60~)">シニア(60~)</option>
							</select>
						</div>
					</div>
					<li name="seat01">
						<div class="ticket-seat"></div>
						<div class="ticket-select">
							<div class="tickets-select-btn">
								<select name="ticket">
									<option value="一般">一般</option>
									<option value="大・専">大・専</option>
									<option value="高校生">高校生</option>
									<option value="中・小">中・小</option>
									<option value="幼児(3~)">幼児(3~)</option>
									<option value="シニア(60~)">シニア(60~)</option>
								</select>
							</div>
						</div>
					</li>
					<li name="seat01">
						<div class="ticket-seat"></div>
						<div class="ticket-select">
							<div class="tickets-select-btn">
								<select name="ticket">
									<option value="一般">一般</option>
									<option value="大・専">大・専</option>
									<option value="高校生">高校生</option>
									<option value="中・小">中・小</option>
									<option value="幼児(3~)">幼児(3~)</option>
									<option value="シニア(60~)">シニア(60~)</option>
								</select>
							</div>
						</div>
					</li>
				</li>
			</ul>
		</div>
		<div class="food_drink">
			<p>フードを選択して下さい</p>
			<div class="food_drink_area">
				<div class="drink">
					<p>メニュー</p>
					<p>
						<select name="" id="">
							<option value="コーラ">コーラ</option>
							<option value="ポップコーン">ポップコーン</option>
							<option value="高校生">その他諸々</option>
						</select>
					</p>
				</div>
				<div class="volume">
					<p>個数</p>
					<p>
						<select name="" id="">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</p>
				</div>
				<div class="food_drink_image">
					<img src="./images/popucone.jpg" alt="">
				</div>
			</div>
		</div>

		<!-- login -->
		<div class="login">
			<p>会員はこちらからログインして下さい</p>
			<ul class="ticket-login">
				<li class="login-item-button"><a href="#">ログイン</a></li>
				<li class="login-item-button"><a href="#">新規会員登録</a></li>
			</ul>
		</div>

		<!-- 入力フォーム -->
		<div class="ticket-form">
			<p>購入者情報を入力して下さい</p>
			<form action="Leaveconf.php" method="post">
				<p><label for="name">名前</label><input type="text" name="name"></p>
				<p><label for="mail">メールアドレス</label><input type="text" name="name"></p>
			</form>
		</div>
		<div class="confirmation">
			<ul>
				<li><a href="#">購入確認</a></li>
				<li><a href="#">戻る</a></li>
			</ul>
		</div>
	</div><!-- /.wrapper -->
</main>

<script>
var firstSeatLabel = 1;

$(document).ready(function() {
	var $cart = $('#selected-seats'),
	$counter = $('#counter'),
	$total = $('#total'),
	sc = $('#seat-map').seatCharts({
		map: [
			'eeeee',
			'eeeee',
			'eeeee',
			'eeeee',
			'eeeee',
			'eeeee',
			'eeeee',
			'eeeee',
		],
		seats: {
			f: {
				price   : 100,
				classes : 'first-class', //your custom CSS class
				category: 'First Class'
			},
			e: {
				price   : 1300,
				classes : 'empty seat', //your custom CSS class
				category: 'empty seat'
			}

		},
		naming : {
			top : false,
			getLabel : function (character, row, column) {
				return firstSeatLabel++;
			},
		},
		legend : {
			node : $('#legend'),
			items : [
				[ 'e', 'available',   'empty seat'],
				[ 'f', 'unavailable', 'Already Booked']
			]
		},
		click: function () {
			if (this.status() == 'available') {
				//let's create a new <li> which we'll add to the cart items
				$('<li>'+this.data().category+'  # '+this.settings.label+': <b>￥'+this.data().price+'</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
				.attr('id', 'cart-item-'+this.settings.id)
				.data('seatId', this.settings.id)
				.appendTo($cart);

				/*
				* Lets update the counter and total
				*
				* .find function will not find the current seat, because it will change its stauts only after return
				* 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
				*/
				$counter.text(sc.find('selected').length+1);
				$total.text(recalculateTotal(sc)+this.data().price);
				return 'selected';
			} else if (this.status() == 'selected') {
				//update the counter
				$counter.text(sc.find('selected').length-1);
				//and total
				$total.text(recalculateTotal(sc)-this.data().price);

				//remove the item from our cart
				$('#cart-item-'+this.settings.id).remove();

				//seat has been vacated
				return 'available';
			} else if (this.status() == 'unavailable') {
				//seat has been already booked
				return 'unavailable';
			} else {
				return this.style();
			}
		}
	});

	//this will handle "[cancel]" link clicks
	$('#selected-seats').on('click', '.cancel-cart-item', function () {
		//let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
		sc.get($(this).parents('li:first').data('seatId')).click();
	});

	//let's pretend some seats have already been booked
	sc.get(['1_2', '4_1', '7_1', '7_2','8_3 ']).status('unavailable');

});

function recalculateTotal(sc) {
	var total = 0;

	//basically find every selected seat and sum its price
	sc.find('selected').each(function () {
		total += this.data().price;
	});

	return parseInt(total);
}

</script>
