@extends('layouts.template')

@section('content')
<!-- Portfolio Grid Items-->
@forelse ($portafolios as $portafolio)

<div class="col-md-6 col-lg-4 mb-5">
    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $portafolio->id}}">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
        </div>
        <img class="img-fluid" src="/storage/{{$portafolio->imagen }}" alt="..." />

    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal{{ $portafolio->id}}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $portafolio->nombre }}</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="/storage/{{$portafolio->imagen }}" alt="..." />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">
                            <h5 class="card-title text-left">{{ $portafolio->descripcion }}</h5>
                            <br>
                            <span class="badge bg-success ">Categoría: {{ $portafolio->categoria }}</span>
                            <br>
                            <br>
                            Vídeo: {{ $portafolio->url }}
                            </p>

                            <br>
                            <button class="btn btn-warning" href="#!" data-bs-dismiss="modal">
                                <i class="fa fa-desktop"></i>
                                Visualizar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@empty
<p>No Existen proyectos</p>
@endforelse
@endsection


