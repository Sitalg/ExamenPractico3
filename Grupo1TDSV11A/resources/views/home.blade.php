@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-bg-secondary">
                <div class="card-header">Información</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h3>Alumnos:</h3>
                    @foreach ($alumnos as $item)
                        <br>
                        <h5>Nombre: {{$item['Nombre']}}</h5>
                        <h5>Carnet: {{$item['Carnet']}}</h5>
                    @endforeach
                    
                    <h3 style="margin-top: 20px;">Materia:</h3>
                    <h5>{{$grupo['Materia']}}</h5>
                    
                    <h3 style="margin-top: 20px;">Grupo:</h3>
                    <h5>{{$grupo['Grupo']}}</h5>

                    <h3 style="margin-top: 20px;">Grupo de proyecto:</h3>
                    <h5>#   {{$grupo['GrupoProyecto']}}</h5>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
