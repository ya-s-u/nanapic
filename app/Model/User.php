<?php
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
	public $name = 'User';

	public $validate = array(
	);
	
	/**
	* 登録済みが判定
	*/
	public function checkTwitterUserId($twitter_user_id) {
		$params = array(
			'conditions' => array(
				'User.twitter_user_id' => $twitter_user_id,
			),
		);
		$User = $this->find('first',$params);

		if($User) {
			return 1;
		} else {
			return 0;
		}
	}
	
	/**
	* 新規ユーザー登録
	*/
	public function newUser($Data) {
		$this->set($Data);
		$this->validates();
		$this->create();
		$this->data = array(
			'twitter_user_id' => $Data['user_id'],
			'twitter_screen_name' => $Data['screen_name'],
			'twitter_oauth_token' => $Data['oauth_token'],
			'twitter_oauth_token_secret' => $Data['oauth_token_secret'],
			'created' => date("Y-m-d G:i:s"),
			'modified' => date('Y-m-d H:i:s'),
		);

		if($this->save($this->data)) {
			return 1;
		} else {
			return 0;
		}
	}
	
	/**
	* アクセストークンを取得
	*/
	public function getAccessToken($id) {
		$params = array(
			'conditions' => array(
				'User.id' => $id,
			),
			'fields' => Array(
				'User.twitter_oauth_token',
				'User.twitter_oauth_token_secret',
			),
		);
		$Data = $this->find('first',$params);
		$access_token = $Data['User'];

		return $access_token;
	}
	
	/**
	* ユーザー名、使用言語、プロフィール画像URLを更新
	*/
	public function updateProfile($id,$Data) {
		$this->updateAll(
			array(
				'User.twitter_user_name' => "'".$Data['name']."'",
				'User.twitter_description' => "'".$Data['description']."'",
				'User.twitter_profile_img_url' => "'".$Data['profile_image_url_https']."'",
			),
			array(
				'User.id' => $id,
			)
		);

		return;
	}

}
?>
