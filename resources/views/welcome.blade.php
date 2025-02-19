@extends('layouts.main')

@section('title', 'Vale Fest')

@section('content')

<div class="container py-5">
    <div id="search-container" class="col-md-12 mb-5" style="background-size: cover; background-position: center; background-repeat: no-repeat; padding: 4rem 0; border-radius: 10px; position: relative;">
        <div style="background-color: rgba(0,0,0,0.5); position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 10px; background-image: url('/img/banner.jpg'); background-size: cover; background-position: center;"></div>
        <div style="position: relative; z-index: 1;">
            <h1 class="text-center display-4 mb-5 text-black" style="text-shadow: -1px -1px 0 #000000, 1px -1px 0 #000000, -1px 1px 0 #000000, 1px 1px 0 #000000;">
                Eventos em Araçuaí - MG</h1>
            <form action="/" method="GET" class="col-md-6 mx-auto">
                <div class="input-group input-group-lg shadow-sm">
                    <input type="text" id="search" name="search" class="form-control border-primary" placeholder="Buscar eventos..." aria-label="Buscar eventos">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4 hover:bg-primary-dark transition-colors duration-200" type="submit">
                            <i class="fas fa-search"></i> Buscar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    
    <div id="events-container" class="col-md-12">
        @if($search)
            <h2 class="display-6 mb-4 text-center">Resultados para: "{{ $search }}"</h2>
        @else
            <div class="text-center mb-5">
                <h2 class="display-5 mb-3">Próximos Eventos</h2>
                <p class="lead text-muted">Descubra experiências incríveis que acontecerão nos próximos dias</p>
            </div>
        @endif
        <div id="cards-container" class="row row-cols-1 row-cols-md-10 g-4">
            @forelse($events as $event)
                <div class="col">
                    <div class="card h-10">
                        <img src="/img/events/{{ $event->image }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $event->title }}">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">{{ $event->title }}</h5>
                                <span class="badge bg-primary">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ date('d/m/Y', strtotime($event->date)) }}
                                </span>
                            </div>
                            <p class="card-text text-muted">
                                <i class="fas fa-users me-2"></i>
                                {{ count($event->users) }} participantes
                            </p>
                            <a href="/events/{{ $event->id }}" class="btn btn-primary w-100 d-flex justify-content-between align-items-center px-4 transition-all hover-shadow">
                                <span>Saber mais</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        @if($search)
                            <p class="mb-0">
                                <i class="fas fa-info-circle me-2"></i>
                                Nenhum evento encontrado para "{{ $search }}".
                                <a href="/" class="alert-link">Ver todos os eventos</a>
                            </p>
                        @else
                            <p class="mb-0">
                                <i class="fas fa-calendar-times me-2"></i>
                                Não há eventos disponíveis no momento.
                            </p>
                        @endif
                    </div>
                </div>
            @endforelse
        </div>
        </div>
    </div>
</div>

<style>
.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
}

.transition-all {
    transition: all .3s ease;
}

.card {
    border-radius: 1rem;
    overflow: hidden;
}

.card-img-top {
    transition: transform .3s ease;
}

.card:hover .card-img-top {
    transform: scale(1.05);
}

.btn-outline-primary:hover {
    transform: translateX(5px);
}
</style>

@endsection