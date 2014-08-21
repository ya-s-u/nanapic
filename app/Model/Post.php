<?php
class Post extends AppModel {
	public $name = 'Post';
	public $recursive = -1;

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
	public function createPost($id, $request, $img_url) {
		$this->create();
		$this->data = array(
			'user_id' => $id,
        	'title' => $request['title'],
        	'comment' => $request['comment'],
       		'thumb_img_url' => $img_url,
			'created' => date("Y-m-d G:i:s"),
		);
		return $this->save($this->data);
	}

}
?>
