<div class="belt">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="/">nanapicトップ</a></li>
			<li><a href="/curators">管理ページ</a></li>
			<li><a href="/curators/create">新規投稿</a></li>
		</ul>
	</div>
</div>
<div class="main">
	<div class="container">
		<h2>新規投稿</h2>
		<p class="h2_sub">キュレーション記事を作成します。</p>
		<p class="step"><span>Step1</span>まとめる記事を選択</p>
		<div class="edit_article">
			<div class="select_article">
				<div class="select_article_head">
					<input type="text" ng-model="search" id="ArticleSearch" placeholder="エンターキーを押して検索">
					<p class="select_article_count">選択中の記事数: <span>3</span>/10</p>
				</div>
				<div class="select_article_body">
					<ul class="select_article_list">
						<?php for($i=0;$i<20;$i++) :?>
						<li>
							<?=$this->Html->image('http://p.cdnanapi.com/r/2014/08/14/16/20140814164209_53ec685155cb0.jpg?quality=85&size=250')?>
							<p>在庫を減らそう！在庫を残してはいけない理由</p>
							<a href="http://nanapi.jp/business/5939" target="_blank">記事を見る</a>
						</li>
						<?php endfor?>
					</ul>
				</div>
			</div>
			<div class="sort_article">
				<p class="sort_article_title">ドラッグして並び替え</p>
				<ul class="sort_article_list">
					<?php for($i=0;$i<10;$i++) :?>
					<li>
						<?=$this->Html->image('http://p.cdnanapi.com/r/2014/08/14/16/20140814164209_53ec685155cb0.jpg?quality=85&size=250')?>
						<p>1時間後のピンポイント予報も！気象庁公式天気予報システム</p>
					</li>
					<?php endfor?>
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