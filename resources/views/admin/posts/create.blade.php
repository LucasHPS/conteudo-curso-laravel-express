@extends('template')

@section('content')
    <h1>Criar novo Post</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'admin.posts.store', 'method'=>'post']) !!}

    @include('admin.posts._form')

    <div class="form-group">
        {!! Form::submit('Criar post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@endsection