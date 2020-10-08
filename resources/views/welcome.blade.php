@extends('layouts.app')


<link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">



@section('content')

    <div class="col-12">
        @include('layouts.carousel')
    </div>



    <div class="row">

        <div class="col-1"></div>

        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"></strong>
                    <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                    <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a
                        su
                        hermano menor en una desesperada ...</p>
                    <a href="#" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/7.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 text-uppercase">Mulán (2020)</h3>

                    <p class="mb-auto">Cuando el emperador de China lanza un decreto de que un hombre por familia debe
                        servir al Ejército Imperial ...</p>
                    <a href="{{ url('/movies') }}" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/8.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>

        <div class="col-1"></div>

    </div>
    <div class="row">

        <div class="col-1"></div>

        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"></strong>
                    <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                    <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a
                        su
                        hermano menor en una desesperada ...</p>
                    <a href="#" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/7.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 text-uppercase">Mulán (2020)</h3>

                    <p class="mb-auto">Cuando el emperador de China lanza un decreto de que un hombre por familia debe
                        servir al Ejército Imperial ...</p>
                    <a href="#" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/8.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>

        <div class="col-1"></div>

    </div>
    <div class="row">

        <div class="col-1"></div>

        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"></strong>
                    <h3 class="mb-0 text-uppercase">Gretel & Hansel</h3>

                    <p class="mb-auto">Hace mucho tiempo en el distante bosque de un cuento de hadas, una joven lleva a
                        su
                        hermano menor en una desesperada ...</p>
                    <a href="#" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/7.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0 text-uppercase">Mulán (2020)</h3>

                    <p class="mb-auto">Cuando el emperador de China lanza un decreto de que un hombre por familia debe
                        servir al Ejército Imperial ...</p>
                    <a href="#" class="stretched-link">
                        <button class="btn btn-info btn-sm">Leer más</button>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('img/8.jpg') }}" width="200px" alt="">
                </div>
            </div>
        </div>

        <div class="col-1"></div>

    </div>


    <!-- Agregar JavaScript -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@endsection
