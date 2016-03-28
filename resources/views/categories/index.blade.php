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
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>
                        <a href="{{ route('categories.edit',['id'=>$category->id]) }}">Editar</a> |
                        <a href="{{ route('categories.destroy',['id'=>$category->id]) }}">Deletar</a>
                    </td>

                </tr>
            @endforeach
        </table>



    </div>

@endsection