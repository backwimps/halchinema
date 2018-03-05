<main>

	<h2>映画管理</h2>

	<div class="btn">
		<a href="#">登録</a>
	</div>

		<table border="1" width="500" cellspacing="0" cellpadding="5" bordercolor="#333333">

<?php foreach ($movies as $row) { ?>
			<tr>
				<th bgcolor="#fff" align="center" width="200">
					<font color="#333"></font>
				</th>

				<td bgcolor="#fff" align="center" width="200">
					<font color="#333"><?php echo $row->title; ?></font>
				</td>

				<td bgcolor="#fff" align="center" width="200">
					<font color="#333">
						<div class="btn2">
							<form action="/GitHub/halchinema/HalCinema/MovieManage/destroy" method="post">
							<a href="/GitHub/halchinema/HalCinema/MovieManage/edit?id=<?php echo $row->id ?>">編集</a>
								<button type="submit" name="id" value="<?php echo $row->id; ?>">削除</button>
							</form>
						</div>
					</font>
				</td>
			</tr>
<?php } ?>

		</table>

</main>
