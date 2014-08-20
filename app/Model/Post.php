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

}
?>
