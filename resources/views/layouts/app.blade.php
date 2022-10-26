<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-black h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-black py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/home') }}" class="text-lg font-semibold text-red-800 no-underline">
                       AITFLIX
                    </a>

                   
                    <a  href="{{ url('freeseries')}}"  class="text-lg font-semibold text-gray-100 no-underline ml-10 mr-10">
                        {{ __('Series') }}
                    </a>

                    <a  href="{{ url('peliculas')}}"  class="text-lg font-semibold text-gray-100 no-underline ml-10 mr-10">
                        {{ __('Peliculas') }}
                    </a>
                    
                    <a  href="{{ url('docus')}}"  class="text-lg font-semibold text-gray-100 no-underline ml-10 mr-10">
                        {{ __('Documentales') }}
                    </a>
                    

                    <a href="https://www.imdb.com/" target="_blank" class="text-lg font-semibold text-gray-100 no-underline ml-10 mr-10">
                        {{ __('IMDb') }}
                    </a>

                    <a href="{{ route('contacta.index')}}" class="text-lg font-semibold text-gray-100 no-underline ml-10 mr-10">
                        {{ __('Contacto') }}
                    </a>

                    @auth                    
                    @endauth
                    @if(Auth::check() and Auth::user()->hasRoles('admin')){
                        <a  href="{{ url('/admin/list_users') }}"  class="text-lg font-semibold text-gray-100 no-underline ml-10 mr-10">
                        {{ __('Admin') }}
                    </a>
                    }
                    @endif
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('ACCEDER') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Salir') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>
                    
        @yield('content')
    </div>
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-danger">AITFLIX</h5>
                    <p>Es una empresa de entretenimiento y una plataforma de streaming estadounidense. Ubicada en Los Gatos (California), la compañía fue creada en 1997 y un año después comenzó su actividad, ofreciendo un servicio de alquiler de DVD a través del correo postal.</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-danger justify-content: center"><img src="css/images/ait2.png"  width="800"></h5>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-danger">Redes Sociales</h5>
                    <a class="btn btn-primary" style="background-color: #3b5998;" href="https://www.facebook.com/search/top?q=netflix"  target="blank"  role="button">
                    <i class="fa fa-facebook" aria-hidden="true"> FACEBOOK</i>
                    </a>
                    <a class="btn btn-primary" style="background-color: #ac2bac;" href="https://www.instagram.com/netflixes/" target="black¡¡nk" role="button">
                        <i class="fab fa-instagram" aria-hidden="true"> INSTAGRAM</i>
                    </a>
                    <a class="btn btn-primary" style="background-color: #ed302f;" href="https://www.youtube.com/c/NetflixEspana"  target="blank"  role="button">
                        <i class="fab fa-youtube">  YOUTUBE  </i>
                    </a>
                    <a class="btn btn-primary" style="background-color: #55acee;" href="https://twitter.com/NetflixES" target="blank" role="button">
                        <i class="fab fa-twitter">TWITTER</i>
                    </a>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-danger">Dirección</h5>
                    <p>
                        <i class="fas fa-home mr-3">Oviedo, Asturias</i>
                    </p>
                    <p>
                        <i class="fas fa-home mr-3">aitflix@netflix.com</i>
                    </p>
                    <p>
                        <i class="fas fa-home mr-3">+111 222 333</i>
                    </p>
                    <p>
                        <i class="fas fa-home mr-3">+92 321 654 89</i>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
