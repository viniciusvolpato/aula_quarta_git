@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Editando Hábito: {{ $habito->nome }}</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
            <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' =>["habitos.update", $habito->id], 'method'=>'put']) !!}
            <div class="form-group">
            {!! Form::label('nome', 'Nome:' ) !!}
            {!! Form::text('nome', $habito->nome, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('descricao', 'Descrição:') !!}
            {!! Form::textarea('descricao', $habito->descricao, ['class'=>'form-control', 'require']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('tp_habito', 'Tipo:') !!}
            {!! Form::select('tp_habito', 
            array('B' => 'Bom', 'R' => 'Ruim'), $habito->tp_habito, ['class' =>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('objetivo', 'Objetivo:') !!}
            {!! Form::number('objetivo', $habito->objetivo, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('dt_inicio_ctrl', 'Data:') !!}
            {!! Form::date('dt_inicio_ctrl', $habito->dt_inicio_ctrl, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::submit('Editar hábito', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>
@endsection