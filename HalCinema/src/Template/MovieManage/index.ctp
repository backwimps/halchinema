<main>

<h2>上映スケジュール一覧</h2>
    
<div class="btn">
<a href="#">登録</a>
</div>

<table border="1" width="500" cellspacing="0" cellpadding="5" bordercolor="#333333">
<tr>
<th bgcolor="#fff" align="center" width="200"><font color="#333"></font></th>
<td bgcolor="#fff" align="center" width="200"><font color="#333">泥棒役者</font></td>
<td bgcolor="#fff" align="center" width="200"><font color="#333">
<div class="btn2">
<a href="#">登録</a>
<a href="#">編集</a>
</div>
</font></td>
</tr>
    
<tr>
<th bgcolor="#fff" align="center" nowrap></th>
<td bgcolor="#fff" align="center" width="150">泥棒役者</td>
<td bgcolor="#fff" align="center" width="200">
<div class="btn2">
<a href="#">登録</a>
<a href="#">編集</a>
</div></td>
</tr>
    
<tr>
<th bgcolor="#fff" align="center" nowrap></th>
<td bgcolor="#fff" align="center" width="150">泥棒役者</td>
<td bgcolor="#fff" align="center" width="200">
<div class="btn2">
<a href="#">登録</a>
<a href="#">編集</a>
</div></td>
</tr>
</table>

</main>




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
