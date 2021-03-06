@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Novo Histórico</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'historicos.store']) !!}
        
        <div class="form-group">
            {!! Form::label('habito_id', 'Hábito:') !!}
            {{ Form::select('habito_id', 
                \App\Habito::orderby('nome')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control']) }}
            </div>

            <div class="form-group">
            {!! Form::label('data', 'Data:') !!}
            {!! Form::date('data', null, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('hora', 'Hora:') !!}
            {!! Form::number('hora', null, ['class'=>'form-control']) !!}
            </div>
            

            <div class="form-group">
            {!! Form::submit('Criar Histórico', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>
@endsection