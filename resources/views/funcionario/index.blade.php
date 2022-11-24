@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-lg-12">
    <a href="{{route('funcionario.create')}}" class="btn btn-primary">Adicionar</a>
    </div>
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($funcionarios as $funcionario)
                    <tr>
                    <th scope="row">{{ $funcionario->id }}</th>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->status == "A"? "Ativo":"Inativo" }}</td>
                    <td><a href="{{route('funcionario.show',$funcionario->id)}}" class="btn btn-primary">Visualizar</a>
                        &nbsp;
                        <a href="{{route('funcionario.edit',$funcionario->id)}}" class="btn btn-success">Editar</a>
                        &nbsp;
                        <a href="{{route('funcionario.delete',$funcionario->id)}}" class="btn btn-danger">Excluir</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection