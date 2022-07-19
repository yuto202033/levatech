@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <p class='create'>[<a href='/posts/create'>create</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <a href="/posts/{{ $post->id }}"> <h2 class='title'>{{ $post->title }}</h2></a>
                   
                   <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                   
                   <a href="">{{ $post->category->name}}</a>
                    
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
         <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
@endsection