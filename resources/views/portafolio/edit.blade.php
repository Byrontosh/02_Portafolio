@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class=" card-header card-body d-flex justify-content-between align-items-center">
                    Actualización de un Portafolio
                    <a href="{{route('show',$portafolio)}}" class="btn btn-danger btn-sm">Regresar</a>
                </div>
                <div class="card-body">

                    <form action="{{route('update',$portafolio)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group row mb-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" class="form-control form-control-sm" id="colFormLabelSm" value="{{$portafolio->nombre}}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Descripción</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" >{{$portafolio->descripcion}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Categoría</label>
                            <div class="col-sm-10">
                                <input type="text" name="categoria" class="form-control form-control-sm" id="colFormLabelSm" value="{{$portafolio->categoria}}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Imagen</label>
                            <div class="col-sm-10">
                                <input type="text" name="imagen" class="form-control form-control-sm" id="colFormLabelSm" value="{{$portafolio->imagen}}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Vídeo</label>
                            <div class="col-sm-10">
                                <input type="text" name="video"  class="form-control form-control-sm" id="colFormLabelSm" value="{{$portafolio->url}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>

    @endsection


