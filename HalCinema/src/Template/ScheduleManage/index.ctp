<body>
<header class="header">
  <div class="toggle-menu">
      <a href="#" class="toggle-button">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
          <span class="toggle-button-text">
              <span class="open">メニュー</span>
          </span>
      </a>
  </div>
  <div class="header-logo">
      <h1><img src="images/logo.png"></h1>
  </div>
</header>

<main class="continer">
<div class="wrapper">

<!-- スケジュール一覧 -->
<div class="ScheduleList-container">
<h1>スケジュール一覧</h1>

<form action="#" method="post">
<input type="submit" value="登録" class="schedule-btn">
<table>
    <tr>
        <td>名前</td><td>日付</td><td>時間</td><td>スクリーン</td>
    </tr>
    <tr>
        <td>名前</td><td>日付</td><td>時間</td><td>スクリーン</td>
    </tr>
    <tr>
        <td>名前</td><td>日付</td><td>時間</td><td>スクリーン</td>
    </tr>
    <tr>
        <td>名前</td><td>日付</td><td>時間</td><td>スクリーン</td>
    </tr>
</table>
</form>
    
</div>
</div>
</main>
    
<footer>
    <div class="footer-toppage">
        <a href="#">
            <p>ページトップへ</p>
        </a>
    </div>
<div class="footer-link">
    <ul>
        <li><a href="#">企業情報</a></li>
        <li><a href="#">サイトマップ</a></li>
        <li><a href="#">個人情報の取扱いについて</a></li>
        <li><a href="#">プライバシーポリシー</a></li>
        <li><a href="#">ご利用に祭して</a></li>
    </ul>
</div>
<div class="footer-copyright">
    <p>©︎2017 HALCINMEA All Rights Reserved</p>
</div>

</footer>
</body>



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
