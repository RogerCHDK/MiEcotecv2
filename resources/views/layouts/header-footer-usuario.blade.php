<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>EcoTec</title>
        <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assets/img/Logo/logo%201.1.1.png') }}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome5-overrides.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    </head>
    <body id="page-top" style="min-width: 450px;">
        <div id="wrapper">
            <nav class="navbar navbar-light navbar-expand-md align-items-start sidebar sidebar-dark accordion bg-gradient-primary-prb p-0" style="max-width: 100px;">
                <div class="container-fluid d-flex flex-column p-0">
                    <ul class="nav navbar-nav text-light" id="accordionSidebar" style="margin-top: 78px;max-width: 100%;">
                        @if (Route::has('login'))
                            @guest
                                @if (Route::has('register'))
                                    <li class="nav-item" role="presentation" style="max-width: 100%;">
                                        <a class="nav-link text-center" href="{{ route('register') }}" style="font-size: 15px;max-width: 100%;">
                                            <i class="fas fa-user-plus" style="width: 17px;font-size: 20px;"></i>
                                            <span class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">Registro</span>
                                        </a>
                                    </li>
                                @endif
                            @endguest
                        @endif
                        <li class="nav-item" role="presentation" style="max-width: 100%;">
                            <a class="nav-link text-center" style="font-size: 15px;max-width: 100%;" href="{{ route('evento.index') }}">
                                <i class="far fa-calendar-check" style="width: 17px;font-size: 20px;"></i>
                                <span class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">Eventos</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" style="max-width: 100%;">
                            <a class="nav-link text-center" href="{{ route('consejo.index') }}" style="font-size: 15px;max-width: 100%;">
                                <i class="fas fa-child" style="width: 17px;font-size: 20px;"></i>
                                <span class="d-flex justify-content-center">Consejos</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" style="max-width: 100%;">
                            <a class="nav-link text-center" href="{{ route('asesor.index') }}" style="font-size: 15px;max-width: 100%;">
                                <i class="fas fa-users" style="font-size: 20px;"></i>
                                <span class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">Asesores</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" style="max-width: 100%;">
                            <a class="nav-link text-center" href="{{route('productos.index')}}"  style="font-size: 15px;max-width: 100%;">
                                <i class="fas fa-shopping-bag" style="width: 17px;font-size: 20px;"></i>
                                <span class="d-flex justify-content-center">Productos</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" style="max-width: 100%;"> 
                            <a class="nav-link text-center" href="{{route('servicios.index')}}" style="font-size: 15px;max-width: 100%;">
                                <i class="far fa-building" style="width: 17px;font-size: 20px;"></i>
                                <span class="d-flex justify-content-center">Servicios</span>
                            </a>
                        </li> 
                        <li class="nav-item" role="presentation" style="max-width: 100%;">
                            <a class="nav-link text-center" href="{{route('usuario.publicidad')}}" style="font-size: 15px;max-width: 100%;">
                                <i class="fab fa-product-hunt" style="width: 17px;font-size: 20px;"></i>
                                <span class="d-flex justify-content-center">Publicidad</span></a>
                        </li>
                        <li class="nav-item" role="presentation" style="max-width: 100%;">
                            <a class="nav-link text-center" href="{{route('comentarios.create')}}" style="font-size: 15px;max-width: 100%;">
                                <i class="fas fa-comment" style="width: 17px;font-size: 20px;"></i>
                                <span class="d-flex justify-content-center">Sugerencias o comentarios</span>
                            </a>
                        </li> 
                    </ul>
                </div>
            </nav>
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="height: 80px;">
                        <div class="container-fluid">
                            <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button">
                                <i class="fas fa-list-ul" style="color: #267d24;"></i>
                            </button>
                            <a class="navbar-brand d-xl-flex align-items-xl-end sidebar-brand m-0" href="{{ url('/') }}" style="height: 100%;">
                                <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" style="margin-right: 15px;height: 60px;" src="{{ asset('assets/img/Logo/logo%201.1.png') }}">
                                <img data-aos="fade-right" data-aos-duration="1000" style="height: 45px;margin-right: 10px;" src="{{ asset('assets/img/Logo/logo%201.2.png') }}">
                            </a>
                            @if (Route::has('login'))
                                <ul class="nav navbar-nav flex-nowrap ml-auto">
                                    @auth
                                        <li class="nav-item dropdown no-arrow" role="presentation">
                                            <div class="nav-item dropdown no-arrow">
                                                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
                                                    <span class="d-none d-lg-inline mr-2 small" style="color: #267d24;font-size: 15px;">{{ Auth::user()->nombre }}</span>
                                                    @if(Auth::user()->imagen)
                                                        <img class="border rounded-circle img-profile" src="{{ route('usuario.imagen', ['filename' => Auth::user()->imagen]) }}" style="height: 55px;width: 55px;">
                                                    @else
                                                        <i class="fa fa-user-circle-o" style="font-size: 30px;color: #267d24;"></i>
                                                    @endif
                                                </a>
                                                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                                    <a class="dropdown-item" role="presentation" href="{{ route('usuario.edit',Auth::user()->id) }}" style="font-size: 15px;">
                                                        <i class="fas fa-user fa-sm fa-fw mr-2"></i>&nbsp;Perfil
                                                    </a>
                                                    <a class="dropdown-item" role="presentation" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="font-size: 15px;">
                                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>&nbsp;Cerrar sesión
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        <li class="nav-item d-flex d-md-flex d-xl-flex align-items-center align-items-md-center align-items-xl-center dropdown no-arrow" role="presentation">
                                            <a class="nav-link" href="{{ route('login') }}">
                                                <span class="d-none d-lg-inline mr-2 small" style="font-size: 15px;color: #267d24;">Iniciar sesión</span>
                                                <i class="fa fa-user-circle-o" style="font-size: 30px;color: #267d24;"></i>
                                            </a>
                                        </li>
                                    @endauth
                                </ul>
                            @endif
                        </div>
                    </nav>
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                <footer class="bg-white sticky-footer">
                    <div class="container my-auto">
                        <div class="text-center my-auto copyright">
                            <span style="font-size: 16px;color: rgb(0,0,0);">Copyright &copy; EcoTec <?= date('Y') ?></span>
                        </div>
                        <div class="text-center my-auto copyright copyrightEmail">
                            <span style="font-size: 13px;color: rgb(0,0,0); margin-top: 5px;">Correo electrónico: ecotec@gmail.com</span><br>
                        </div>
                        <div class="text-center my-auto copyright copyrightTel">
                            <span style="font-size: 13px;color: rgb(0,0,0); margin-top: 5px;">Teléfono: +52 1 722 123 45 67</span><br>
                        </div>
                    </div>
                </footer>
            </div>
            <a class="border rounded d-inline scroll-to-top" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
        </div>
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
        <script src="{{ asset('assets/js/script.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagen.js') }}"></script>
    </body>
</html>