<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePost as CreatePostRequest;
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
     * @return Reposnse index view
     */
    public function index()
    {
        return view('posts/index')->with(['posts' => $this->post_model->getPaginate()]);
    }

    /**
     * 特定IDのpostを表示する
     *
     * @return Reposnse post view
     */
    public function show(int $id)
    {
        return view('posts/show')->with(['post' => $this->post_model->getById($id)]);
    }

    /**
     * post作成画面を表示する
     * 
     * @return Reposnse create view
     */
    public function getCreate()
    {
       return view('posts/create'); 
    }
    
    /**
     * post作成する
     * 
     * @param Request $request
     * @return Reposnse created view
     */
    public function postCreate(CreatePostRequest $request)
    {
        $input_post = $request['post'];
        $this->post_model->create($input_post);

        return redirect()->action('PostController@index');
    }
}
