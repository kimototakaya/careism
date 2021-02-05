<?php
namespace App\Controller;

class PostsController extends AppController 
{
    // ページネーションのプロパティを設定している
    public $paginate = [
        'limit' => 10, //1ページに表示するデータ件数
        'order' => [
            'Posts.created' => 'desc' //データが作られた順に表示する
        ]
        ];
    public function index()
    {
        $posts = $this->paginate($this->Posts->find());
            // ->where(['title LIKE' => '%タイトル%'])
            // ->andWhere(['published' => false]);
            

        $this->set(compact('posts'));
    }

    public function view($id = null)
    {
        $post = $this->Posts->get($id);

        $this->set(compact('post'));
    }
}