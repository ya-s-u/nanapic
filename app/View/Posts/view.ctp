<div class="belt">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="/">nanapicトップ</a></li>
			<li><a href="/view/<?= h($post['Post']['id']) ?>"><?= h($title_for_layout) ?></a></li>
		</ul>
	</div>
</div>
<div class="main" ng-controller="CreateCtrl">
	<div class="container">
		<div class="view_left">
			<div class="view_head">
				<img class="view_head_thumb" src="<?= h($post['Post']['thumb_img_url']) ?>?mode=trim&width=100&height=100">
				<h2 class="view_head_title"><?= h($post['Post']['title']) ?></h2>
				<p class="view_head_comment"><?= h($post['Post']['comment']) ?></p>
			</div>
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
		</div>
	</div>
</div>
