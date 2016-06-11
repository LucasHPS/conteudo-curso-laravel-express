@extends('template')

@section('content')
    <h1>Editar Post - [ID: {{ $post->id }}]</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($post, ['route'=> ['admin.posts.update', $post->id], 'method'=>'put']) !!}

    @include('admin.posts._form')

    <div class="form-group">
        {!! Form::submit('Salvar post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@endsection