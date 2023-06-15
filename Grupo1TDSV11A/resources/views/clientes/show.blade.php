@extends('layouts.app')

@section('content')
<h1 class="text-center">Clientes</h1>
    <h5 class="text-center">Registro de clientes</h5>
    <hr>

    <br>
    <div class="container">
    <a class="btn btn-success btn-sm" href="/clientes/create">Agregar nuevo cliente</a>
    <br>
    <br>
    <table class="container table table-hover table-bordered mt-2">

        <tr class="table-dark">
            <td>Id Cliente</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Fecha de nacimiento</td>
            <td>Acciones</td>
        </tr>
        @foreach ($clientes as $item)
        <tr>
            <td>{{$item->Id_Cliente}}</td>
            <td>{{$item->Nombre}}</td>
            <td>{{$item->Apellido}}</td>
            <td>{{$item->Fecha_Nac}}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="/clientes/edit/{{$item->Id_Cliente}}">Modificar</a>
                <button class="btn btn-danger btn-sm" url="/clientes/destroy/{{$item->Id_Cliente}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection

@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{asset('js/cliente.js')}}"></script>
@endsection