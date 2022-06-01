@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class=" card-header card-body d-flex justify-content-between align-items-center">
                    Creación de un Portafolio
                    <a href="{{route('portafolio')}}" class="btn btn-danger btn-sm">Regresar</a>
                </div>
                <div class="card-body">

                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row mb-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre</label>
                            <div class="col-sm-10">

                                <input type="text" name="nombre"
                                    class="form-control form-control-sm @error('nombre')is-invalid @enderror"
                                    placeholder="Ingrese información" value="{{ old('nombre') }}">

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="colFormLabelSm"
                                class="col-sm-2 col-form-label col-form-label-sm ">Descripción</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('descripcion')is-invalid @enderror"
                                    name="descripcion" rows="3">{{ old('descripcion') }}</textarea>
                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="colFormLabelSm"
                                class="col-sm-2 col-form-label col-form-label-sm">Categoría</label>
                            <div class="col-sm-10">
                                <input type="text" name="categoria"
                                    class="form-control form-control-sm @error('categoria')is-invalid @enderror"
                                    placeholder="Ingrese información" value="{{ old('categoria') }}">
                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Imagen</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control @error('imagen')is-invalid @enderror"
                                    id="inputGroupFile01" name="imagen">
                                @error('imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Vídeo</label>
                            <div class="col-sm-10">
                                <input type="text" name="video"
                                    class="form-control form-control-sm @error('video')is-invalid @enderror"
                                    placeholder="Ingrese información" value="{{ old('video') }}">
                                @error('video')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Registrar</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <br>

    @endsection


