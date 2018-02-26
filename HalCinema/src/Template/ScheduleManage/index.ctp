<main>
	<h1>ScheduleManage</h1>

	<table>
		<tr>
			<th>映画タイトル</th>
			<th>スクリーン番号</th>
			<th>公開時間</th>
		</tr>
<?php foreach ($schedules as $row) { ?>
		<tr>
			<td><?php echo $row->movies['title']; ?></td>
			<td><?php echo $row->screen->screen_no; ?></td>
			<td><?php $date = new DateTime($row->start_datetime); echo $date->format('Y-m-d h:m:s'); ?></td>
		</tr>
<?php } ?>
</table>
<pre><?php //foreach ($schedules as $row) { print_r($row); } ?></pre>
</main>
