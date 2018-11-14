@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Novo Hábito</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
            <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'habitos.store']) !!}
            <div class="form-group">
            {!! Form::label('nome', 'Nome:' ) !!}
            {!! Form::text('nome', null, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('descricao', 'Descrição:') !!}
            {!! Form::textarea('descricao', null, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('tp_habito', 'Tipo:') !!}
            {!! Form::select('tp_habito', 
            array('B' => 'Bom', 'R' => 'Ruim'), 'B', ['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('objetivo', 'Objetivo:') !!}
            {!! Form::number('objetivo', null, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('dt_inicio_ctrl', 'Data:') !!}
            {!! Form::date('dt_inicio_ctrl', '2017-05-18 00:00:00', ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::submit('Criar hábito', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>
@endsection