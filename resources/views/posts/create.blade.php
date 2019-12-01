<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>投稿</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            投稿
        </h1>
        <div class="content">
            <form action="/posts/create" method="POST">
                {{ csrf_field() }}
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]'>
                    <p class='content__title__error'>{{ $errors->first('post.title') }}</p>
                </div>
                <div class='content__body'>
                    <h2>本文</h2>
                    <input type='text' name='post[body]'>
                    <p class='content__body__error'>{{ $errors->first('post.body') }}</p>
                </div>
                <input type="submit">
            </form>
        </div>
    </body>
</html>
