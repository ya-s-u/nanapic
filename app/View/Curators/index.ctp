<div class="belt">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="/">nanapicトップ</a></li>
			<li><a href="/curators">キュレーター一覧</a></li>
		</ul>
	</div>
</div>
<div class="main">
	<div class="container">
		<h2>キュレーター一覧</h2>
		<p class="h2_sub">キュレーターを紹介します。</p>
		<ul class="curators">
		<?php for($i=0;$i<10;$i++) :?>
			<li>
				<?= $this->Html->image($user['User']['twitter_profile_img_url'],array('class'=>'thumb'))?>
				<h3><?=$user['User']['twitter_user_name']?></h3>
				<p class="screen_name"><?=$user['User']['twitter_screen_name']?></p>
				<p class="description"><?=$user['User']['twitter_description']?></p>
			</li>
		<?php endfor?>
		</ul>
	</div>
</div>