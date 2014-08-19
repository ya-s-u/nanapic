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
		$this->set('title_for_layout','ログアウト');
	
	}

	/**
	* ログアウト
	*/
	public function logout() {
		$this->set('title_for_layout','ログアウト');

		$this->Auth->logout();
		$this->Cookie->delete('Auth');
		$this->redirect('/');
	}
	 
}