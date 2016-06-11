<div class="form-group">
    {!! Form::label('lbltitle', 'Título: ') !!}
    <br>
    {!! Form::text('title', null, ['class'=>'form-controle']) !!}
</div>

<div class="form-group">
    {!! Form::label('lblpost', 'Conteúdo: ') !!}
    <br>
    {!! Form::textarea('post', null, ['class'=>'form-controle']) !!}
</div>