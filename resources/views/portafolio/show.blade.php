@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header card-body d-flex justify-content-between align-items-center">
                    Detalle del Portafolio
                    <a href="{{route('portafolio')}}" class="btn btn-danger btn-sm">Regresar</a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <h5 class="card-title">Nombre: {{ $portafolio->nombre }}</h5>
    <h5 class="card-title">Descripción: {{ $portafolio->descripcion }}</h5>
    <h5 class="card-title">Categoría: {{ $portafolio->categoria }}</h5>
    <h5 class="card-title">Imagen: {{ $portafolio->imagen }}</h5>
    <h5 class="card-title">Vídeo: {{ $portafolio->url }}</h5>
    <a href="{{route('edit',$portafolio)}}" class="btn btn-success btn-sm" >Actualizar</a>
    <form action="{{route('destroy',$portafolio)}}" method="POST" style="display: inline;" onsubmit="return confirmation()">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm" >Eliminar</button>
        <script type="text/javascript">
            function confirmation()
            {
                if(confirm("¿Estás seguro de eliminar el registro?"))
                {
                    return true;
                }
            else
                {
                    return false;
                }
            }
        </script>
    </form>
    <hr>

    @endsection


