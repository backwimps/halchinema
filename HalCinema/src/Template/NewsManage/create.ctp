<main class="manager_wrapper">
	<h2>映画編集</h2>
	<form action="./Store" method="post">
	  <p>上映タイトル</p>
	  <p><input type="text" name="title" placeholder="Title"></p>
	  <p>公開期間
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
		  〜
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
	  <p>内容</p>
	  <p><input type="text" name="content" placeholder="Content"></p>

	  <p>上映時間</p>
	  <p><input type="text" name="time" placeholder="Time"><p>

	  <p>オプション</p>
	  <p><input type="text" name="option" placeholder="Option"></p>

	  <p>音声</p>
	  <p><input type="text" name="sound" placeholder="Sound"></p>

	  <p>イメージ</p>
	  <p><input type="file" name="" id=""></p>

	  <p><input type="submit" value="追加"></p>
	</form>
</main>
