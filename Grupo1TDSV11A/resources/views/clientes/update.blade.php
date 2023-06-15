@extends('layouts.app')

@section('content')
<h1 class="text-center">Modificar</h1>
    <h5 class="text-center">Formulario para actualizar registro de clientes</h5>
    <hr>
    <div class="container">
        <form action="/clientes/update/{{$cliente->Id_Cliente}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row row col-6 m-auto">
                <div class="col-6">
                    Nombre
                    <input type="text" class="form-control" name="Nombre" value="{{$cliente->Nombre}}">
                    @error('nombre')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-6">
                    Apellido
                    <input type="text" class="form-control" name="Apellido" value="{{$cliente->Apellido}}">
                    @error('Apellido')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-6" style="margin-top: 10px">
                    Fecha de nacimiento
                    <input type="date" class="form-control" name="Fecha_Nac" value="{{$cliente->Fecha_Nac}}">
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