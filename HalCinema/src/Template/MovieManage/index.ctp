


<main>
	<h1>MovieManage</h1>

	<form action="/GitHub/halchinema/HalCinema/MovieManage/destroy" method="post">
	<table>
		<?php foreach ($movies as $row) { ?>
		<tr>
			<td>
				<?php echo $row->title; ?>
			</td>

			<td>
				<a href="/GitHub/halchinema/HalCinema/MovieManage/edit?id=<?php echo $row->id ?>">編集</a>
			</td>

			<td>
				<button type="submit" name="id" value="<?php echo $row->id; ?>">削除</button>
			</td>
		</tr>
		<?php } ?>
	</table>

	</form>

	<pre><?php foreach ($movies as $row) { print_r($row); } ?></pre>
</main>
