<?php

class PostsController extends AppController {
    public $name = 'Posts';

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('create'));
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
        
        if ($this->request->isPost()) {
        
        	//サムネイルURLを取るためnanapiAPIにアクセス
        	$recipe_id = $this->request->data['thumb'];
	        $data = file_get_contents('http://api.nanapi.jp/v1/recipeLookupDetails/?recipe_id='.$recipe_id.'&key=4cb94f0895324&format=json');
			$data = json_decode($data, true);
        
        	//記事情報をdbに保存
        	$post = array(
        		'user_id' => $this->Auth->user('id'),
        		'title' => $this->request->data['title'],
        		'comment' => $this->request->data['comment'],
        		'thumb_img_url' => $data['response']['recipe']['image'],
        	);
        	$this->Post->cretaePost();

	        //レシピデータを取得しdbに保存
	        for ($i=0; $i<10; $i++) {
	        	$recipe_id = $this->request->data['recipe'.$i];
	        
	        	//nanapiAPIにアクセス
	        	$data = file_get_contents('http://api.nanapi.jp/v1/recipeLookupDetails/?recipe_id='.$recipe_id.'&key=4cb94f0895324&format=json');
				$data = json_decode($data, true);
				
				//post_linkに保存
				$recipe = array(
					'post_id' => $post_id,
					'order' => $i,
					'title' => $data['response']['recipe']['title'],
					'description' => $data['response']['recipe']['description'],
					'thumb_img_url' => $data['response']['recipe']['image'],
					'nanapi_article_id' => $recipe_id,
				);
				$this->Post->createPost($recipe);
	        }
			
			//リダイレクト
			$this->redirect(array('controller'=>'users','action'=>'index'));
		}
    }

}