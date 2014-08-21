<div class="belt">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="/">nanapicトップ</a></li>
			<li><a href="/view/<?= h($post['Post']['id']) ?>"><?= h($title_for_layout) ?></a></li>
		</ul>
	</div>
</div>
<div class="view_head">
	<div class="container">
		<img class="view_head_thumb" src="<?= h($post['Post']['thumb_img_url']) ?>?mode=trim&width=100&height=100">
		<h2 class="view_head_title"><a href="/view/<?= h($post['Post']['id']) ?>"><?= h($post['Post']['title']) ?></a></h2>
		<p class="view_head_comment"><?= h($post['Post']['comment']) ?></p>
		<p class="view_head_pv"><?= h($post['Post']['pv_count'])*30 ?><span>view</span></p>
	</div>
</div>
<div class="main">
	<div class="container">
		<div class="view_left">
			<ul class="view_recipe">
				<?php foreach($post['Recipe'] as $i => $recipe) :?>
				<li>
					<h3 class="view_recipe_title"><?= $i+1 ?>. <?= h($recipe['title']) ?></h3>
					<img class="view_recipe_image" src="<?= h($recipe['thumb_img_url']) ?>">
					<p class="view_recipe_description"><?= h($recipe['description']) ?></p>
				</li>
				<?php endforeach?>
			</ul>
		</div>
		<div class="view_right">
			<div class="view_auther">
				<img class="view_auther_thumb" src="<?= h($post['User']['twitter_profile_img_url']) ?>">
				<h4 class="view_auther_name"><?= h($post['User']['twitter_user_name']) ?></h4>
				<p class="view_auther_description"><?= h($post['User']['twitter_description']) ?></p>
			</div>
			<div class="ranking">
				<h2 class="ranking_title">人気のまとめ</h2>
				<ul class="ranking_list">
					<?php foreach($PopularPosts as $post) :?>
					<li>
						<h3 class="ranking_list_title"><?= $i+1 ?>. <?= h($post['Post']['title']) ?></h3>
						<img class="ranking_list_thumb" src="<?= h($post['Post']['thumb_img_url']) ?>">
					</li>
					<?php endforeach?>
				</ul>
			</div>
		</div>
	</div>
</div>
