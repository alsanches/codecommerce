@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Incluir categorias</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        @endif


        {!! Form::open(['route'=>'categories.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nome:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Descrição:') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Salvar Categoria', ['class'=>'btn btn-primary']) !!}

            </div>


        {!! Form::close() !!}



    </div>

@endsection