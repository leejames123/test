<?php foreach($news as $news_item): ?>

	<h2><?=$news_item['title']?></h2>
	<p><?=$news_item['text']?></p>
	<a href="<?=$news_item['slug']?>">View Story</a>
	<br>

<?php endforeach; ?>