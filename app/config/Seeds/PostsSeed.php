<?php
use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => '最初の投稿',
                'description' => '最初の投稿',
                'body' => '最初の投稿',
                'published' => 1,
                'created' => '2020-02-01 10:00:00',
                'modified' => '2020-02-01 10:00:00'
            ],[
                'title' => '2番目の投稿',
                'description' => '2番目の投稿',
                'body' => '2番目の投稿',
                'published' => 1,
                'created' => '2020-02-01 10:00:00',
                'modified' => '2020-02-01 10:00:00'
            ],
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
