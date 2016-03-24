@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Categorias</h1>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <th>{{$category->id}}</th>
                    <th>{{$category->name}}</th>
                    <th>{{$category->description}}</th>
                    <th></th>
                    
                </tr>
            @endforeach
        </table>



    </div>

@endsection