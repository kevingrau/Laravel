@extends('layouts.default')
@section('content')
<div class="container">
    <form action="{{route('funcionario.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label class="form-label">Nome<label>
                <input type="text" class="form-control" name="nome" id="nome" value="">
            </div>
            <div class="col-lg-6">
                <label class="form-label">Data de Nascimento<label>
                <input type="date" class="form-control" name="dtNascto" id="dtNascto" value="">
            </div>
            <div class="col-lg-6">
                <label class="form-label">Salario<label>
                <input type="text" class="form-control" name="salario" id="salario" value="">
            </div>
            <div class="col-lg-6">
                <label class="form-label">Status<label>
                <select class="form-select" name="status" id="status">
                    <option value="A" >Ativo<option>
                    <option value="I" >Inativo<option>
                </select>
            </div>
            <div class="col-lg-12 d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" class="btn btn-outline-primary" value="Salvar">
            </div>
        </div>
    </form>
</div>
@endsection