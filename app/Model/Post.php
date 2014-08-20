<?php
class Post extends AppModel {
	public $name = 'Post';

	public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
        ),
    );

	public $validate = array(
	);
	
	/**
	* 記事投稿
	*/
	public function createPost($Data) {
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
		return $this->save($this->data);
	}

}
?>
