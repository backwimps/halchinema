<main>
	<h1>MovieManage</h1>
	<form action="./editExecute" method="post">
		<input type="hidden" name="id" value="<?php echo $movie->id; ?>">
		<p><input type="text" name="title" placeholder="Title" value="<?php echo $movie->title; ?>"></p>
		<p><input type="text" name="option" placeholder="Option" value="<?php echo $movie->option_id; ?>"></p>
		<p><input type="text" name="sound" placeholder="Sound" value="<?php echo $movie->sound; ?>"></p>
		<p><input type="text" name="content" placeholder="Content" value="<?php echo $movie->content; ?>"></p>
		<p><input type="text" name="time" placeholder="Time" value="<?php echo $movie->screeningTime; ?>"></p>
		<input type="submit" value="登録">
	</form>
</main>
