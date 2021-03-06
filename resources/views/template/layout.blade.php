<!DOCTYPE html>
  <html>
    <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>
        @yield('Titulo')
      </title>
      <!-- CSS  -->      
      <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <!-- Font Awesome -->
      <link href="/css/font-awesome.css" rel="stylesheet">
      <!-- Skill Progress Bar -->
      <link href="/css/pro-bars.css" rel="stylesheet" type="text/css" media="all" />
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="/css/owl.carousel.css">
      <!-- Default Theme CSS File-->
      <link id="switcher" href="/css/themes/brown-theme.css" type="text/css" rel="stylesheet" media="screen,projection"/>     
      <!-- Main css File -->
      <link href="/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

      <!-- Font -->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body>
      <!-- BEGAIN PRELOADER -->         
      <div id="preloader">        
        <div class="progress">
          <div class="indeterminate"></div>
        </div>        
      </div>
      <!-- END PRELOADER -->
      <header id="header" role="banner">
        <div class="navbar-fixed">
          <nav>
            <div class="container">
              <div class="nav-wrapper">

                <!-- LOGO -->

                <!-- TEXT BASED LOGO -->
                <a href="{{route('index')}}" class="brand-logo">Dinosaurs Watchers</a>

                <!-- Condicional del Menú -->
                @if (Route::is('index'))
                <!-- Menú Para La Vista Index -->                
                  <ul class="right hide-on-med-and-down custom-nav menu-scroll">
                    <li><a href="#edcuation">Introducción</a></li>
                    <li><a href="#portfolio">Dinosaurios</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#testimonial">Opiniones</a></li>
                    <li><a href="#about">Acerca De</a></li>
                    <li><a href="#footer">Contacto</a></li>
                  </ul>
                  <!-- Para Móviles -->
                  <ul id="slide-out" class="side-nav menu-scroll">
                    <li><a href="#edcuation">Introducción</a></li>
                    <li><a href="#portfolio">Dinosaurios</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#testimonial">Opiniones</a></li>
                    <li><a href="#about">Acerca De</a></li>
                    <li><a href="#footer">Contacto</a></li>
                  </ul>
                  <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                
                @else
                  <!-- Menú Para Las Otras Vistas -->                
                  <ul class="right hide-on-med-and-down custom-nav menu-scroll">
                    <li><a href="#footer">Contacto</a></li>
                  </ul>
                  <!-- Para Móviles -->
                  <ul id="slide-out" class="side-nav menu-scroll">
                    <li><a href="#footer">Contacto</a></li>
                  </ul>
                  <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                @endif

              </div>
            </div>
          </nav>
        </div>  
      </header>

      <div class="main-wrapper">
        <main role="main">

          @yield('Contenido')
          
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-inner">
                      <!-- Bottom to Up Btn -->
                      <button class="btn-floating btn-large up-btn"><i class="mdi-navigation-expand-less"></i></button>
                     <p class="design-info">Realizado por <a href="http://sebastian-blog-personal.herokuapp.com" target="_blank">IrvinGreg51</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </main>
      </div>
      
      <!-- jQuery Library -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- Materialize js -->
      <script type="text/javascript" src="/js/materialize.min.js"></script>
      <!-- Skill Progress Bar -->
      <script src="/js/appear.min.js" type="text/javascript"></script>
      <script src="/js/pro-bars.min.js" type="text/javascript"></script>
      <!-- Owl slider -->      
      <script src="/js/owl.carousel.min.js"></script>    
      <!-- Mixit slider  -->
      <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
      <!-- counter -->
      <script src="/js/waypoints.min.js"></script>
      <script src="/js/jquery.counterup.min.js"></script>     

      <!-- Custom Js -->
      <script src="/js/custom.js"></script>  

      @yield('Script')

    </body>
  </html>