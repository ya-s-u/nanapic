<div class="belt_top">
	<div class="container">
		<ul class="random_posts">
			<?php foreach($RandomPosts as $post) :?>
			<li>
				<div class="random_posts_thumb"><img src="<?=$post['Post']['thumb_img_url']?>"></div>
				<h3 class="random_posts_title"><?=$post['Post']['title']?></h3>
				<p class="random_posts_comment"><?=$post['Post']['comment']?></p>
			</li>
			<?php endforeach?>
		</ul>
	</div>
</div>
<div class="main">
	<div class="container">
		<div class="top_left">
			<h2 class="top_title_new">新着まとめ</h2>
			<ul class="new_posts">
				<?php foreach($NewPosts as $post) :?>
				<li>
					<div class="new_posts_thumb"><img height="150" src="<?=$post['Post']['thumb_img_url']?>"></div>
					<h3 class="new_posts_title"><?=$post['Post']['title']?></h3>
					<p class="new_posts_comment"><?=$post['Post']['comment']?></p>
				</li>
				<?php endforeach?>
			</ul>
		</div>
		<div class="top_right">
			<h2 class="top_title_popular">人気のまとめ</h2>
		</div>
	</div>
</div>