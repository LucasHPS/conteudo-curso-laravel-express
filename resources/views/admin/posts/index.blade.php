@extends('template')

@section('content')
    <h1>Blog Admin</h1>

    <br>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-success">
        Criar novo post
    </a>

    <br>
    <br>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Ação</th>
        </tr>

        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>
                <a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" class="btn btn-primary btn-sm">Editar</a>
                 |
                <a href="{{ route('admin.posts.delete', ['id' => $post->id]) }}" class="btn btn-danger btn-sm">Excluir</a>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $posts->render() !!}
@endsection