<div class="belt">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="/">nanapicトップ</a></li>
			<li><a href="/curators">管理ページ</a></li>
			<li><a href="/curators/create">新規投稿</a></li>
		</ul>
	</div>
</div>
<div class="main" ng-controller="CreateCtrl">
	<div class="container">
		<h2>新規投稿</h2>
		<p class="h2_sub">キュレーション記事を作成します。</p>
		<p class="step"><span>Step1</span>まとめる記事を選択</p>
		<div class="edit_article">
			<div class="select_article">
				<div class="select_article_head">
					<input type="text" ng-model="SearchText" id="ArticleSearch" placeholder="エンターキーを押して検索">
					<div class="page_manage">
						<i class="">←</i>
						<p class="page_num">{{Status.current_page}}/{{Status.page_count}}</p>
						<i class="">→</i>
					</div>
					<p class="select_article_count">選択中の記事数: <span>{{CountSelectedRecipes}}</span>/10</p>
				</div>
				<div class="select_article_body">
					<p ng-show="!Recipes" class="select_article_none">キーワードを入力して、nanapiの記事を検索してください</p>
					<ul class="select_article_list">
						<li ng-repeat="recipe in Recipes" ng-click="addRecipe(recipe.recipe_id,recipe.title,recipe.image)">
							<img src="{{recipe.image}}?quality=85&size=250">
							<p>{{recipe.title}}</p>
							<a href="http://nanapi.jp/{{recipe.recipe_id}}" target="_blank">nanapiで記事を確認</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="sort_article">
				<p class="sort_article_title">ドラッグして並び替え</p>
				<ul class="sort_article_list">
					<li ng-repeat="selectedrecipe in SelectedRecipes" draggable="true">
						<img src="{{selectedrecipe.img_url}}?quality=85&size=250">
						<p>{{selectedrecipe.title}}</p>
						<i ng-click="removeRecipe(selectedrecipe.id)">×</i>
					</li>
					<li>
						<?=$this->Html->image('http://p.cdnanapi.com/r/2014/08/14/16/20140814164209_53ec685155cb0.jpg?quality=85&size=250')?>
						<p>デフォ1</p>
					</li>
					<li>
						<?=$this->Html->image('http://p.cdnanapi.com/r/2014/08/14/16/20140814164209_53ec685155cb0.jpg?quality=85&size=250')?>
						<p>デフォ2</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="edit_info">
			<p class="step"><span>Step2</span>タイトルと説明文を記入</p>
			<?=$this->Form->create('Post',array('class'=>''))?>
				<p class="label">タイトル</p>
				<?=$this->Form->text('title',array('label'=>false,'div'=>false))?>
				<p class="label">説明文</p>
				<?=$this->Form->textarea('comment',array('label'=>false,'div'=>false))?>
			<?=$this->Form->end()?>
		</div>
		<div class="edit_thumb">
			<p class="step"><span>Step3</span>サムネイル画像を選択</p>
			<div class="edit_thumb_box">
				<ul class="edit_thumb_list">
					<?php for($i=0;$i<20;$i++) :?>
					<li><?=$this->Html->image('http://p.cdnanapi.com/r/2014/08/14/16/20140814164209_53ec685155cb0.jpg?quality=85&size=250')?></li>
					<?php endfor?>
				</ul>
			</div>
		</div>
	</div>
</div>
