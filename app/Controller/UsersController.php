<?php
class UsersController extends AppController {
	public $name = 'Users';

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('logout');
	}

	/**
	 * ログアウト
	 */
	 public function logout() {
	 
	 }
	 
}