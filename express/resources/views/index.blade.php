@extends('layouts.main_site')

@section('title','RapidocExpress')

@section('content')

<!-- Head-->
<header class="masthead bg-warning text-white text-center " >
    <div class="container d-flex align-items-center flex-column">
        <!-- Head Title-->
        <h1 class="masthead-heading   mb-0">{{$header->title ?? ''}}</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class=" fa fa-exchange"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="img-container">
            <!-- Head Image-->
            @if (isset($header))
            <img class="img-thumbnail rounded mb-5" src="../../assets/img/header/{{$header->image}}" alt="{{$header->image}}" />    
            @endif
       </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0"></p>
    </div>
</header>
 <!-- Atualizacoes Section-->
<section class="page-section atualizacoes" id="atualizacoes">
    <div class="container">
        <!-- Atualizacoes Section Heading-->
        <h2 class="page-section-heading text-center   text-secondary mb-0">Atualizações</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
         <div class="divider-custom-line"></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Grid Items-->
        <div class="row justify-content-center">
            @if (isset($novidades))
            <!-- Item 1-->
            @foreach ($novidades as $novidade)
            <div class="atualizacoes-modal modal fade" id="atualizacoesModal{{$novidade->id}}" tabindex="-1" aria-labelledby="atualizacoesModal{{$novidade->id}}" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Atualizacoes Modal - Title-->
                                        <h2 class="atualizacoes-modal-title text-secondary   mb-0">{{$novidade->title}}</h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Atualizacoes Modal - Image-->
                                        @if (isset($novidade->image))
                                        <img class="img-thumbnail rounded mb-5" src="assets/img/novidades/{{$novidade->image}}" alt="{{$novidade->title}}" />
                                        @endif
                                        <!-- Atualizacoes Modal - Text-->
                                        <p class="mb-4">{{$novidade->description}}</p>
                                        <button class="btn btn-warning" data-bs-dismiss="modal">
                                            <i class="fas fa-xmark fa-fw"></i>
                                            Fechar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="atualizacoes-item mx-auto" data-bs-toggle="modal" data-bs-target="#atualizacoesModal{{$novidade->id}}">
                    <div class="atualizacoes-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="atualizacoes-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"> {{$novidade->title}} </i></div>
                    </div>
                    @if (isset($novidade->image))
                    <img class="img-thumbnail" style="align-content: center" src="assets/img/novidades/{{$novidade->image}}" alt="{{$novidade->title}}" />
                    @endif
                </div>
                <p>{{$novidade->date->format('d/m/Y')}}</p>
                <h3>{{$novidade->title}}</h3>
                <p>{{$novidade->description}}</p>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>

<section class="page-section atualizacoes bg-secondary text-white"  id="depoimentos">
    <div class="container">
        <!-- Atualizacoes Section Heading-->
        <h2 class="page-section-heading text-center text-white mb-0">Depoimentos</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
         <div class="divider-custom-line"></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Grid Items-->
        <div class="row justify-content-center">
            @if (isset($depoimentos))
            <!-- Item 1-->
            @foreach ($depoimentos as $depoimento)
            <div class="col-md-6 col-lg-4 mb-5 bg-white  text-secondary" id="pagina">
                <div class="atualizacoes-item mx-auto" data-bs-toggle="modal">
                    <div class="atualizacoes-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="atualizacoes-item-caption-content text-center"><i class="fas fa-star fa-3x"> {{$depoimento->title}} </i></div>
                    </div>
                    <img class="img-thumbnail rounded mb-5" src="../../img/avatar.jpg" alt="{{$depoimento->title}}" />
                </div>
                <p>{{$depoimento->date->format('d/m/Y')}}</p>
                <h3>{{$depoimento->title}}</h3>
                <p>{{$depoimento->description}}</p>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
<!-- Contato Section-->
<section class="page-section"  id="contato">
    <div class="container">
        <div class="row justify-content-center">
             <!-- Contato Section Heading-->
            <h2 class="page-section-heading text-center text-secondary mb-0">Entrar em Contato</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <img style="width: 50px" src="../img/local.png" alt="Local no Mapa" srcset="">    
                <div class="divider-custom-line"></div>
            </div>
            
            <a class="row justify-content-center" href="https://www.google.com/maps/place/Rapidoc+Express+Motoboy/data=!3m1!4b1!4m2!3m1!1s0x94ce67113e8fb6b3:0x8fab1dd263e7acf1" target="_blank">
            <img style="width: 800px" src="https://maps.googleapis.com/maps/api/staticmap?scale=1&size=1600x900&style=feature:poi.business|visibility:off&style=feature:water|visibility:simplified&style=feature:road|element:labels.icon|visibility:off&style=feature:road.highway|element:labels|saturation:-90|lightness:25&format=jpg&language=pt-BR&region=BR&markers=color:0x48487f|-23.5473073,-46.5730526&zoom=16&client=google-presto&signature=EletQ7hRf9Vq5ulh-yapv3y9-Fo" alt="Local no Mapa" srcset="">
            </a>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class=" mb-4">Rotas</h4>
                <p class="lead mb-0">
                    Rua Cantagalo, 74 - Tatuapé
                    São Paulo - SP
                    03307-005
                    Brasil
                </p>
                <a class="btn btn-warning" href="https://www.google.com/maps/dir//Rapidoc+Express+Motoboy/data=!4m8!4m7!1m0!1m5!1m1!1s0x94ce67113e8fb6b3:0x8fab1dd263e7acf1!2m2!1d-46.5730526!2d-23.5473073" target="_blank" rel="noopener noreferrer"> Ver Rotas</a>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="mb-4">Contato</h4>
                <p class="lead mb-0">
                    (11) 97589-2648 <br/>
                    (11) 94732-9746
                </p>
                <a class="btn btn-warning" href="tel:+55-11-97589-2648" target="_blank" rel="noopener noreferrer"> Ligar Agora </a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="  mb-4">Horários </h4>
                <p class="lead mb-0">
                    seg.:	08:00 – 20:00
                    ter.:	08:00 – 20:00
                    qua.:	08:00 – 20:00
                    qui.:	08:00 – 20:00
                    sex.:	08:00 – 20:00
                    sáb.:	08:00 – 17:00
                    dom.:	Fechado
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; Rapidoc Express 2022</small></div>
</div>

@endsection