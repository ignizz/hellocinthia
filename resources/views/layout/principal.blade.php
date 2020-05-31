<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>hellocinthia.com @yield('title')</title>
  </head>
  <body>
    <div class="container-fluid">
        <section id="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a href="#" class="navbar-brand">HelloCinthia.com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item @if(Route::currentRouteName() == 'home') active @endif">
                            <a href="#" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item  @if(Route::currentRouteName() == 'about-us') active @endif" >
                            <a href="#" class="nav-link">Nosotros</a>
                        </li>
                        <li class="nav-item  @if(Route::currentRouteName() == 'contact') active @endif" >
                            <a href="#" class="nav-link">Contácto</a>
                        </li>
                        <li class="nav-item" >
                            <a href="#" class="nav-link @if(Route::currentRouteName() == 'blog') active @endif">Blog</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section id="main">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
        <!-- Footer -->
        <footer class="page-footer font-small dark">

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">
            <a target="_blank" href="http://www.iskareem.com" class="btn btn-light"> Desarrollado por Kareem Lorenzana © </a>
          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @yield('before_scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('after_scripts')
  </body>
</html>