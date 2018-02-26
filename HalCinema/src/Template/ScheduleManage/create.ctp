<main>
	<h1>SchedulesManage</h1>

	<form action="/GitHub/halchinema/HalCinema/scheduleManage/store" method="post">
		<div class="">
			<p>title</p>
			<select name="movie_id">
<?php foreach ($movies as $row) { ?>
				<option value="<?php echo $row->id; ?>"><?php echo $row->title; ?></option>
<?php } ?>
			</select>
		</div>

		<div class="">
			<p>スクリーン</p>
			<select name="screen_id">
<?php foreach ($screens as $row) { ?>
				<option value="<?php echo $row->screen_no; ?>"><?php echo $row->screen_no; ?></option>
<?php } ?>
			</select>
		</div>

		<div class="">
			<p>上映開始時間</p>
			<select name="start_year">
				<option value="2018">2018</option>
				<option value="2019">2019</option>
			</select>

			<select name="start_month">
<?php for ($i=1; $i <= 12 ; $i++) { ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
			</select>

			<select name="start_day">
<?php for ($i=1; $i <= 31 ; $i++) { ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
			</select>
		</div>

		<input type="submit" name="" value="追加">
	</form>
</main>
<pre><?php //foreach ($screens as $row) { print_r($row); } ?></pre>
