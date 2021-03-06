@extends('layouts.app')
@section('content');
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<div class="title">
<h1>News overview</h1>
    <a href="{{ url('news/create') }}">Add news</a>
</div>
@foreach($news as $new)
    <article>
        <header>
        <h3>{{$new->title}}</h3>
        </header>
        <article>
        <p>{{$new->content}}</p>
        </article>

    <form method="post" action="/news/{{$new->id}}">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <input type="submit" value="Delete">
        <a href="{{ url("news/$new->id/edit") }}">Edit</a><br><br>
    </form>
    </article>
@endforeach



@endsection