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
        $this->set('title_for_layout', 'ログアウト');

    }

    /**
     * 新規投稿
     */
    public function create() {
        $this->set('title_for_layout', '新規投稿');

    }

}