@extends('layouts.default')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-lg-6">
                <label class="form-label">Nome<label>
                <input type="text" class="form-control-plaintext" name="nome" id="nome" value="{{ $funcionario->nome }}">
            </div>
            <div class="col-lg-6">
                <label class="form-label">Data de Nascimento<label>
                <input type="date" class="form-control-plaintext" name="dtNascto" id="dtNascto" value="{{ $funcionario->dtNascto }}">
            </div>
            <div class="col-lg-6">
                <label class="form-label">Salario<label>
                <input type="text" class="form-control-plaintext" name="salario" id="salario" value="{{ $funcionario->salario }}">
            </div>
            <div class="col-lg-6">
                <label class="form-label">Status<label>
                <input type="text" class="form-control-plaintext" name="status" id="status" value="{{ $funcionario->status == 'A'?'Ativo': 'Inativo' }}">
            </div>
        </div>
</div>
@endsection