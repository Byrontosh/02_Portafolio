@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header card-body d-flex justify-content-between align-items-center">
                    Gestión de Portafolios
                    <a  class="btn btn-primary btn-sm" href="{{route('create')}}">Crear</a>
                </div>
            </div>
        </div>
    </div>
    <br>

    @forelse ($portafolios as $portafolio)
    <h5 class="card-title">Nombre: {{ $portafolio->nombre }}</h5>
    <h5 class="card-title">Descripción: {{ $portafolio->descripcion }}</h5>
    <h5 class="card-title">Categoría: {{ $portafolio->categoria }}</h5>
    <h5 class="card-title">Imagen: {{ $portafolio->imagen }}</h5>
    <h5 class="card-title">Vídeo: {{ $portafolio->url }}</h5>
    <a href="{{route('show',$portafolio)}}" class="btn btn-primary btn-sm">Más información</a>
    <hr>
    @empty
    <p>No Existen proyectos</p>
    @endforelse

    @endsection


