@extends('layouts.app')

@section('content')
<h1 class="text-center">Crear</h1>
<h5 class="text-center">Formulario para registro de cliente</h5>
<hr>
<br>
<br>
<div class="container">
    <form action="/clientes/store" method="POST">
        @csrf
    <div class="row col-6 m-auto">
        <div class="col-6">
            Nombre
            <input type="text" class="form-control" name="Nombre">
            @error('Nombre')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="col-6">
            Apellido
            <input type="text" class="form-control" name="Apellido">
            @error('Apellido')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="col-6" style="margin-top: 10px">
            Fecha de nacimiento
            <input type="date" class="form-control" name="Fecha_Nac">
            @error('Fecha_Nac')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="col-12 mt-2">
            <button class="btn btn-primary">Guardar</button>
        </div>
    </div>
    </form>
</div> 
@endsection