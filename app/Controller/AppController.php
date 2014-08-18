<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $uses = array('User','Following','Country');
	public $helpers = array('Html','Form','Session');
	public $components = array(
		'Session',
		'Map',
		'Twitter',
		'Cookie',
		'Auth' => array(
	        'authenticate' => array(
	            'Form' => array(
	                'userModel' => 'User',
	                'passwordHasher' => array(
                        'className' => 'None'
                    ),
	                'fields' => array('username' => 'twitter_oauth_token' , 'password'=>'twitter_oauth_token_secret'),
	            ),
	        ),
	        'loginError' => 'パスワードもしくはログインIDをご確認下さい。',
	        'authError' => 'ご利用されるにはログインが必要です。',
	        'loginAction' => array('controller' => 'users', 'action' => 'create'),
	        'loginRedirect' => array('controller' => 'friends', 'action' => 'index'),
	        'logoutRedirect' => array('controller' => 'users', 'action' => 'create'),
	    ),
	);

	public function beforeFilter() {

	}
}
