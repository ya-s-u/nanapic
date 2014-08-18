<?php
App::uses('AuthComponent', 'Controller/Component');

class PostLink extends AppModel {
	public $name = 'PostLink';
	
	public $belongsTo = array(
        'User' => array(
            'className' => 'Post',
            'foreignKey' => 'post_id',
        ),
    );

	public $validate = array(

	);

}
?>
