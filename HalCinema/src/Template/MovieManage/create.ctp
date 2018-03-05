<main>
	<h1>MovieManage</h1>
	<form action="./Store" method="post">
		<p><input type="text" name="title" placeholder="Title"></p>
		<p><input type="text" name="option" placeholder="Option"></p>
		<p><input type="text" name="sound" placeholder="Sound"></p>
		<p><input type="text" name="content" placeholder="Content"></p>
		<p><input type="text" name="time" placeholder="Time"></p>
		<p>公開日
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
		</p>
		<p>最終日
			<select name="end_year">
				<option value="2018">2018</option>
				<option value="2019">2019</option>
			</select>

			<select name="end_month">
				<option value="1">1</option>
				<option value="2">2</option>
			</select>

			<select name="end_day">
				<option value="1">1</option>
				<option value="2">2</option>
			</select>
		</p>
		<input type="submit" value="登録">
	</form>
</main>
