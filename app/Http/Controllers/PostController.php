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
     * @FIXME Add Validate For Request
     * @param Request $request
     * @return Reposnse created view
     */
    public function postCreate(Request $request)
    {
        if (!isset($request['post'])) {
            throw new \Exception('無効なリクエストです');
        }

        try {
            $input_post = $request['post'];
            $this->post_model->create($input_post);

            return redirect()->action('PostController@index');
        } catch (Exception $e) {
            dd($e);
        }
    }
}
