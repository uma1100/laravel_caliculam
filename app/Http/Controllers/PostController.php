<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as PostModel;

class PostController extends Controller
{
    
    public function __construct(PostModel $post_model)
    {
        $this->post_model = $post_model;
    }

    /**
     * post一覧を表示する
     *
     * @return Reposnse index
     */
    public function index()
    {
        return view('posts/index')->with(['posts' => $this->post_model->getPaginate()]);
    }
}
