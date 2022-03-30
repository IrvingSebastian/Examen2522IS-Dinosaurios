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

                  <!-- Menú Para La Vista Index -->                
                  <ul class="right hide-on-med-and-down custom-nav">
                    <li><a href="{{route('index')}}">Inicio</a></li>
                    <li class="{{!Route::is('blog')?: 'active'}} {{!Route::is('publicacion')?: 'active'}}"><a href="{{route('blog')}}">Blog</a></li>
                    <li class="{{!Route::is('dinos')?: 'active'}}"><a href="{{route('dinos', 1)}}">Dinosaurios</a></li>
                    <li><a href="#footer">Comentarios</a></li>
                  </ul>
                  <!-- Para Móviles -->
                  <ul id="slide-out" class="side-nav">
                    <li><a href="{{route('index')}}">Inicio</a></li>
                    <li class="{{!Route::is('blog')?: 'active'}} {{!Route::is('publicacion')?: 'active'}}"><a href="{{route('blog')}}">Blog</a></li>
                    <li class="{{!Route::is('dinos')?: 'active'}}"><a href="{{route('dinos', 1)}}">Dinosaurios</a></li>
                    <li><a href="#footer">Comentarios</a></li>
                  </ul>
                  <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
              </div>
            </div>
          </nav>
        </div>  
      </header>

      <div class="main-wrapper">
        <main role="main">

            @yield('Encabezado')
            
            <section id="blog-details">
              <div class="container">
                <div class="row">
                  <div class="col s12 m8 l8">
                            
                    @yield('Contenido')

                    <!-- Start Sidebar -->
                        <div class="col s12 m4 l4">
                          <aside class="sidebar">
                            <!-- Start Single Sidebar -->
                            <div class="single-sidebar">
                                <h3>Algunos Dinosaurios</h3>

                                @yield('Dinos')
                                
                            </div>
                            <!-- Start Single Sidebar -->
                            <div class="single-sidebar">
                                <h3>Otros Proyectos</h3>
                                <!-- Single Category -->
                                <div class="tagcloud">
                                <a href="https://sebastian-rick-and-morty.herokuapp.com" target="_blank">Rick and Morty Proyecto</a>
                                <a href="http://codigos-postales-igsi.herokuapp.com/index" target="_blank">Códigos Postales</a>
                                <a href="http://blog-cliente-servidor.herokuapp.com/inicio" target="_blank">Blog Cliente Servidor</a>
                                <a href="http://animalesaurios.herokuapp.com/index" target="_blank">Dinoanimales</a>
                                </div>
                            </div>
                            <!-- Start Single Sidebar -->
                            <div class="single-sidebar">
                                <h3>Enlaces de Interés</h3>                      
                                <ul>
                                <li><a href="http://www.sgm.gob.mx/Web/MuseoVirtual/Fosiles/Paleontologia.html">Paleontología GOB.MX</a></li>
                                <li><a href="https://historia.nationalgeographic.com.es">National Geographic</a></li>
                                <li><a href="https://www.mundoprehistorico.com">Mundo Prehistórico</a></li>
                                <li><a href="https://www.jurassicworld.com">Jurassic World</a></li>
                                </ul>
                            </div>
                          </aside>
                        </div>
                  </div>
                </div>
              </div>
            </section>
          
            @if(Route::is('publicacion'))
            <!-- Start Footer -->
            <div class="footer-top" id="footer">
                <div class="container">
                    <div class="col s12">
                    <div class="footer-top-inner">
                        <h2 class="title">Deja Un Comentario</h2>
                        <p>Llena el formulario si deseas dejar un comentario de la publicación, tu comentario
                        aparecerá en la página :). <br>
                        Como dato extra, el formulario calcula mediante probabilidaad de que país es tu nombre,
                        gracias a <a href="https://nationalize.io">Nationalize.io</a></p>
                        </p>
                        </p>
                        <div class="contact">
                        <div class="col s12 m6 l6">
                            <div class="contact-form">
                            <form>
                                <div class="input-field">
                                <input type="text" class="input-box" name="contactName" id="contact-name">
                                <label class="input-label" for="contact-name">Nombre</label>
                                </div>
                                <div class="input-field">
                                <input type="email" class="input-box" name="contactEmail" id="email">
                                <label class="input-label" for="email">Email</label>
                                </div>
                                <div class="input-field textarea-input">
                                <textarea class="materialize-textarea" name="contactMessage" id="textarea1"></textarea>
                                <label class="input-label" for="textarea1">Comentario</label>
                                </div>
                                <button class="left waves-effect btn-flat brand-text submit-btn" type="submit">Enviar Comentario</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            @endif

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
    </body>
  </html>