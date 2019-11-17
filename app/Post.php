<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const PAGINATE_COUNT_GET_POSTS = 5;
    
    /**
     * 入力可能なホワイトリスト
     *
     * @var array
     */
    protected $fillable = ['title', 'bodycx'];

    /**
     * 投稿5件を取得する
     * 
     * @return Paginate posts
     */
    public function getPaginate()
    {
        return $this->paginate(self::PAGINATE_COUNT_GET_POSTS);
    }

    /**
     * IDから投稿を1つ取得する
     * 
     * @param int $id
     * @return Post post
     */
    public function getById(int $id)
    {
        return $this->findOrFail($id);
    }
}
