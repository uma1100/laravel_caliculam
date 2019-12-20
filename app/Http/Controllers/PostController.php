<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePost as CreatePostRequest;
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
     * @param Request $request
     * @return Reposnse created view
     */
    public function postCreate(CreatePostRequest $request)
    {
        $input_post = $request['post'];
        $this->post_model->create($input_post);

        return redirect()->action('PostController@index');
    }

    public function destroy(int $id) {
        $post = $this->post_model->findOrFail($id);
        $post->delete();
        return redirect()->action('PostController@index');
    }

    // getでmessages/id/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        return view('posts/edit')->with(['post' => $this->post_model->getById($id)]);
    }
    public function update(Request $request, $id)
    {
        $input_post = $request['post'];
        $post = $this->post_model->findOrFail($id);
        $post->title = $input_post['title'];
        $post->body = $input_post['body'];
        $post->save();

        return redirect('/');
    }
}
