<div class="belt_top">
	<div class="container">
		<ul class="random_posts">
			<?php foreach($RandomPosts as $post) :?>
			<li>
				<a href="/view/<?=$post['Post']['id']?>">
					<img class="random_posts_thumb" src="<?=$post['Post']['thumb_img_url']?>?mode=trim&width=316&height=200">
					<h3 class="random_posts_title"><?=$post['Post']['title']?></h3>
					<p class="random_posts_comment"><?=$post['Post']['comment']?></p>
				</a>
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
					<a href="/view/<?=$post['Post']['id']?>">
						<img class="new_posts_thumb" src="<?=$post['Post']['thumb_img_url']?>?mode=trim&width=150&height=150">
						<h3 class="new_posts_title"><?=$post['Post']['title']?></h3>
						<p class="new_posts_comment"><?=$post['Post']['comment']?></p>
					</a>
				</li>
				<?php endforeach?>
			</ul>
		</div>
		<div class="top_right">
			<h2 class="top_title_popular">人気のまとめ</h2>
		</div>
	</div>
</div>