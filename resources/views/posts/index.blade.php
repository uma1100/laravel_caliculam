<!doctype html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->

<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <h1 class="title">
        Hello This is Laraposts;
    </h1>
    <div class="content">
        <div class="content__header">
            [<a href="{{ url('/posts/create') }}">投稿</a>]
        </div>
        <div class="content__body">
            @foreach ($posts as $post)
            <h3>{{ $post->title }}
            <form action="{{ action('PostController@destroy', $post->id) }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <!-- <a href="#" data-id="{{ $post->id }}" onclick="deletePost(this);" class="fs12">delete</a> -->
                <button type="submit">delete</button>
            </form>
            </h3>
            <p>{{ $post->body }}
                <a href="/posts/{{$post->id}}/edit">編集</a>
            </p>
            @endforeach
            {{$posts->links('pagination::bootstrap-4')}}
        </div>
<script>
    function deletePost(e) {
        'use strict';

        if (confirm('are you sure?')) {
            document.getElementById('form_' + e.dataset.id).submit();
        }
    }
</script>
</body>

</html>