<div class="belt_top">
	<div class="container">
		<ul class="random_posts">
			<?php foreach($RandomPosts as $post) :?>
			<li>
				<a href="/view/<?=h($post['Post']['id'])?>">
					<img class="random_posts_thumb" src="<?=h($post['Post']['thumb_img_url'])?>?mode=trim&width=316&height=200">
					<h3 class="random_posts_title"><?=$this->Text->truncate($post['Post']['title'],36,array('ellipsis' => '...','exact' => true ,'html' => false));?></h3>
					<p class="random_posts_comment"><?=$this->Text->truncate($post['Post']['comment'],45,array('ellipsis' => '...','exact' => true ,'html' => false));?></p>
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
					<a href="/view/<?=h($post['Post']['id'])?>">
						<img class="new_posts_thumb" src="<?=h($post['Post']['thumb_img_url'])?>?mode=trim&width=150&height=150">
						<h3 class="new_posts_title"><?=h($post['Post']['title'])?></h3>
						<p class="new_posts_comment"><?=$this->Text->truncate($post['Post']['comment'],120,array('ellipsis' => '...','exact' => true ,'html' => false));?></p>
						<img class="new_posts_image" src="<?= h($post['User']['twitter_profile_img_url']) ?>">
						<h4 class="new_posts_twitter"><?= h($post['User']['twitter_user_name']) ?></h4>
						<p class="new_posts_created"><i class="icon-clock"></i><?= date('Y年m月d日 G:i', strtotime($post['Post']['created'])) ?></p>
					</a>
				</li>
				<?php endforeach?>
			</ul>
		</div>
		<div class="top_right">
			<div class="ranking">
				<h2 class="ranking_title">人気のまとめ</h2>
				<ul class="ranking_list">
					<?php $i=1;foreach($PopularPosts as $post) :?>
					<li>
						<a href="/view/<?= h($post['Post']['id']) ?>">
							<span class="ranking_list_rank"><?= $i++ ?></span>
							<img class="ranking_list_thumb" src="<?= h($post['Post']['thumb_img_url']) ?>?mode=trim&width=275&height=100">
							<h3 class="ranking_list_title"><?= h($post['Post']['title']) ?></h3>
						</a>
					</li>
					<?php endforeach?>
				</ul>
			</div>
		</div>
	</div>
</div>