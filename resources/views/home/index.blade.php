@extends('template')

@section('title')
    Blog Laravel - Seja bem vindo!
@stop

@section('content')

    <div class="blog-header">
        <h1 class="blog-title">@yield('title')</h1>
        <p class="lead blog-description">Um blog criado utilizando Laravel</p>
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">

            @foreach($posts as $post)
            <div class="blog-post">
                <h2 class="blog-post-title">{{ $post['title'] }}</h2>
                <p class="blog-post-meta">
                    <strong>Postado em:</strong> {{ $post['date'] }}
                    por <a href="#" title=""> {{ $post['author'] }}</a>
                </p>

                <p>{{ $post['description'] }}</p>

                <button type="button" class="btn btn-primary col-md-offset-11">Leia mais &raquo;</button>
            </div>

            <hr>
            @endforeach

        </div>

        @include('sidebar')
    </div>

    <nav>
        <ul class="pager">
            <li><a href="#">Anterior</a></li>
            <li><a href="#">Próximo</a></li>
        </ul>
    </nav>
@stop