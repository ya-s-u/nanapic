<?php

class PostsController extends AppController {
    public $name = 'Posts';

    public function beforeFilter() {
        parent::beforeFilter();
    }

    /**
     * 新着記事一覧
     */
    public function index() {
        $this->set('title_for_layout', 'ログアウト');

    }

    /**
     * 記事投稿
     */
    public function create() {
        $this->set('title_for_layout', '新規投稿');
        
        //ファイルから取得
		$array = file_get_contents('http://api.nanapi.jp/v1/recipeLookupDetails/?recipe_id=118233&key=4cb94f0895324&format=json');
			$array = json_decode($array);
			print_r($array->responce);
        
        //記事詳細を取得
        
        //dbに保存
		//$this->Post->createPost();
		
		//リダイレクト
    }

}