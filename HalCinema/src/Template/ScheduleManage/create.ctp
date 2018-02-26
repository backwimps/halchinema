<main>
	<h1>SchedulesManage</h1>

	<form action="/GitHub/halchinema/HalCinema/scheduleManage/store" method="post">
		<div class="">
			<p>title</p>
			<select name="movie_id">
				<option value="1">it</option>
				<option value="2">mix</option>
			</select>
		</div>

		<div class="">
			<p>スクリーン</p>
			<select name="screen_id">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		</div>

		<div class="">
			<p>上映開始時間</p>
			<select name="start_year">
				<option value="2018">2018</option>
				<option value="2019">2019</option>
			</select>

			<select name="start_month">
				<option value="1">1</option>
				<option value="2">2</option>
			</select>

			<select name="start_day">
				<option value="1">1</option>
				<option value="2">2</option>
			</select>
		</div>

		<input type="submit" name="" value="追加">
	</form>
</main>
