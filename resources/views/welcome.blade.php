<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Integrativa Med</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>



    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light ">
            <div class="container-fluid">
              {{-- <a class="navbar-brand" href="#">Integrativa Med</a> --}}
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="nav-link active" aria-current="page">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link" >Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link" >Registrar</a>
                            @endif
                        @endauth
                    @endif
                </div>
              </div>
            </div>
        </nav>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <img src="{{asset('img/logo/integrativa.png')}}" class="rounded mx-auto d-block">
                </div>
            </div>
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Integrativa Med</h1>
                    <p class="lead text-muted">Nossa paixão é oferecer cuidados de saúde excepcionais, impulsionados pela inovação e empatia. Com uma equipe dedicada de profissionais médicos e tecnológicos, buscamos transformar a experiência de cuidados médicos..</p>
                </div>
            </div>
        </section>
    </body>
</html>

