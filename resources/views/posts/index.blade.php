@extends('template')

@section('content')
    <h1>Blog</h1>

    <hr>

    @foreach($posts as $p)
        <h2>{{ $p->title }} <i>({{ $p->created_at }})</i></h2>
        <p style="margin:5px 20px;">{{ $p->post }}</p>
        <br>
        <p>
            <strong>Tags: </strong>
            @foreach ($p->tags as $tag)
                {{ $tag->name }},
            @endforeach
        </p>
        <hr>

        <h4>Comentários</h4>
        @foreach($p->comments as $comment)
            <p><strong>Name:</strong> {{ $comment->name }} -> <small>{{ $comment->email }}</small></p>
            <p><strong>Comment:</strong> {{ $comment->comment }}</p>
        @endforeach
    @endforeach
@endsection