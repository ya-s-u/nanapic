<?php
class UsersController extends AppController {
	public $name = 'Users';

	public function beforeFilter() {
		parent::beforeFilter();
	}
	
	/**
	* ダッシュボード
	*/
	public function index() {
	
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