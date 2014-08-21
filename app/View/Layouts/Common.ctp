<!DOCTYPE html>
<html ng-app>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta http-equiv="expires" content="0">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta name="copyright" content="Copyright nanapic">
	
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<link rel="shortcut icon" href="<?=$this->Html->webroot.'img/fav.ico'?>">
	<link rel="apple-touch-icon-precomposed" href="<?=$this->Html->webroot.'img/fav.ico'?>" />
	
	<title><?=$title_for_layout?> - nanapic</title>
		
	<?=$this->Html->css('common')?>
</head>
<body>
	<div id="header">
		<div class="container">
			<!-- <p class="h1_sub">nanapiの良質記事をピックアップ！</p> -->
			<ul class="global_menu">
				<li><a href="/">新着まとめ</a></li>
				<li><a href="/curators">キュレーター一覧</a></li>
			</ul>
			<h1><a href="//nanapi.trial.jp"><?=$this->Html->image('logo.png')?></a></h1>
			<?php if($auth) :?>
			<ul class="user_menu">
				<li><a href="/users" class="btn dashboard"><?=$this->Html->image($auth['User']['twitter_profile_img_url'])?>マイページ</a></li>
				<li><a href="/users/logout" class="btn logout">ログアウト</a></li>
			</ul>
			<?php else :?>
			<ul class="user_menu">
				<li><a href="/twitters/redirect1" class="btn logout">ログイン</a></li>
				<li><a href="/twitters/redirect1" class="btn logout">ユーザー登録</a></li>
			</ul>
			<?php endif?>
		</div>
	</div>
	<?=$this->fetch('content')?>
	<div id="footer">
		<div class="container">
		
		</div>
	</div>
<?=$this->html->script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')?>
<?=$this->html->script('//ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.min.js')?>
<?=$this->html->script('jquery.sortable')?>
<?=$this->html->script('angular.myfunc')?>
</body>
</html>