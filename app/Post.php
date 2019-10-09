<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const MAX_COUNT_GET_POSTS = 10;

    public function getAll()
    {
        return $this->limit(self::MAX_COUNT_GET_POSTS)->get();
    }
}
