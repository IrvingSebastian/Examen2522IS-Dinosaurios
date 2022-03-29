@extends('template.layout')

@section('Titulo')
  Dinosaurs Watchers - Inicio
@endsection

@section('Contenido')
<!-- START HOME SECTION -->
<section id="home">
  <div class="overlay-section">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="home-inner">
            <h1 class="home-title">¡Hola! Bienvenido a <span>Dinosaurs Watchers</span></h1>
            <p>Solo una página de un estudiante apasionado por la programación y por los Dinosaurios :D</p>
            <a class="hire-me-btn btn waves-effect waves-light btn-large" href="#footer">Contacto<i class="mdi-content-send left"></i>                     
            </a>
            <!-- Call to About Button -->
            <button class="btn btn-floating waves-effect waves-light btn-large white call-to-about"><i class="material-icons">play_for_work</i></button>                  
          </div>
        </div>  
      </div>
    </div>
  </div>
</section>
<!-- Start Resume -->
<section id="resume">
  <!-- Start Education -->
  <section id="edcuation">
    <div class="container">
      <div class="education-inner">
        <h2 class="title">Introducción</h2>
        <p style="font-size: 18px">Entre todos los seres vivientes que alguna vez poblaron la tierra, los Dinosaurios
          siempre han ejercido una fascinación especial sobre el hombre. El conocimiento que 
          tenemos sobre estos animales se ha edificado en su totalidad mediante el estudio
          de fósiles. El significado etimológico de la palabra dinosaurio, significa "Lagarto Temible".
          Sin embargo hay que recordar que los comienzos de la vida en la tierra fueron unas 
          bacterias microscópicas hace unos 3000 millones de años, a esas bacterias les siguieron 
          los peces, luego los anfibios y por último los reptiles, que han logrado ser los más
          fascinantes para el ser humano, hasta ahora.<br><br>
          Estos reptiles se hicieron los amos del planeta durante casi 200 millones de años,
          denominámdose esa época como la era de los dinosaurios. Hay que recordar que en 
          su mayoría, estos enormes lagartos eran herbívoros y probablemente poco agresivos, 
          por otro lado, los pocos eran los carnívoros. En general, estos animales tenían un 
          cerebro ridiculamente pequeño en comparació con su enorme tamaño corporal. <br><br>
          La era de los dinosaurios, es decir el Mesozoico se divide en tres períodos, 
          que a su vez están compuestos por diferentes épocas con distintas edades. 
          Los períodos son el Triásico, el Jurásico y el Cretácico. En el límite inferior del Mesozoico tuvo 
          lugar una extinción masiva del Pérmico-Triásico. <br><br>
          Durante ese tiempo desaparecieron el 70% de vertebrados terrestres y entre el 90% y el 96% de 
          todas las especies marinas. Puesto que se considera que es la extinción masiva más grande que 
          ha existido, también se la conoce como «The Great Dying» o «Gran Mortandad». En cuanto 
          al límite superior del Mesozoico, este está fijado en la extinción masiva del Cretácico-Terciario. 
          Los expertos especulan que tuvo lugar por el impacto de un asteroide en la tierra, que 
          fue el causante del cráter de Chicxulub en Yucatán. Esta vez desapareció el 50% de todos 
          los géneros de aquel entonces. Este porcentaje incluye a todos los dinosaurios no avianos.
        </p>
          <div id="owl-carousel1" class="experience-slider row">
            <!-- Start Single Experience -->
            <div class="col s12">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                <h2 class="experience-title">Hace 252 millones - 201 millones de años </h2>
                  <img class="activator" src="/img/triasico.webp">
                </div>
                <div class="card-content">
                  <span class="card-title activator reveal-title"><strong>Triásico</strong><i class="material-icons right">more_vert</i></span>
                  <p>El primero de los tres períodos...</p>
                </div>
                <div class="card-reveal">
                  <span class="card-title reveal-title"><strong>Triásico</strong><i class="material-icons right">close</i></span>
                  <p>Durante este período tuvieron mucha importancia los arcosaurios. Dominaron el 
                    cielo como pterosaurios, los océanos como notosaurios e ictiosaurios y la 
                    tierra como dinosaurios. Otros animales como los cinodontos evolucionaron 
                    encogiéndose y su aspecto se iba pareciendo cada vez más al de un mamífero, 
                    hasta que finalmente se convirtieron en ello. También aparecen el orden 
                    crocodilia, los peces óseos, los corales actuales y muchos clados de insectos 
                    modernos. Además, los anfibios grandes acuáticos y las plantas pertenecientes 
                    al género Dicroidium eran muy comunes en aquel entonces.</p>
                </div>
              </div>
            </div>
            <!-- Start Single Experience -->
            <div class="col s12">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                <h2 class="experience-title">Hace 201 millones - 152 millones de años</h2>
                  <img class="activator" src="/img/jurasico.webp">
                </div>
                <div class="card-content">
                  <span class="card-title activator reveal-title"><strong>Jurásico</strong><i class="material-icons right">more_vert</i></span>
                  <p>El periodo más famoso de todos...</p>
                </div>
                <div class="card-reveal">
                  <span class="card-title reveal-title"><strong>Jurásico</strong><i class="material-icons right">close</i></span>
                  <p>A nivel botánico son muy comunes las gimnospermas y los helechos. En cuanto a los dinosaurios, 
                    los más característicos de este período son los saurópodos, los estegosaurios y los carnosaurios.
                     Los mamíferos de aquel entonces son bastante habituales pero pequeños. Además, 
                     aparecen los primeras lagartos y aves. Respecto a la vida acuática, los plesiosaurios y 
                     los ictiosaurios se diversifican y hay abundancia de ammonites, belemnites y bivalvos. Otros 
                     seres del agua comunes son las estrellas de mar, los crinoides, las esponjas, los rinconélidos 
                     y los braquiópodos terebratúlidos. Durante el Jurásico tuvo lugar un acontecimiento importante: 
                     El supercontinente Pangea se partió en dos, formando Gondwana y Laurasia.
                  </p>
                </div>
              </div>
            </div>
            <!-- Start Single Experience -->
            <div class="col s12">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                <h2 class="experience-title">Hace 152 millones - 72 millones de años</h2>
                  <img class="activator" src="img/cretacico.webp">
                </div>
                <div class="card-content">
                  <span class="card-title activator reveal-title"><strong>Cretácico</strong><i class="material-icons right">more_vert</i></span>
                  <p>El final del reinado de los dinosaurios...</p>
                </div>
                <div class="card-reveal">
                  <span class="card-title reveal-title"><strong>Cretácico</strong><i class="material-icons right">close</i></span>
                  <p>El último período del Mesozoico está marcado por la ruptura de Gondwana. Durante el Cretácico 
                    aparecieron nuevos tipos de insectos y proliferaron las plantas con flor. También tuvo lugar 
                    la aparición de peces teleósteos más actuales. En este período eran muy comunes los belemnites, 
                    los ammonites, los equinoides, las esponjas y los bivalvos rudistas. Además, evolucionaron 
                    cocodrilos modernos y dinosaurios terrestres: Tiranosáuridos, hadrosáuridos, titanosáuridos, 
                    carcarodontosáuridos, ceratópsidos, dromeosáuridos, espinosáuridos, abelisáuridos, 
                    anquilosáuridos y estegosáuridos. En el mar aparecieron los pliosaurios, los mosasaurios y 
                    los tiburones modernos. Las condiciones del Cretácico también dieron lugar a marsupiales, 
                    monotremas y mamíferos placentarios. Queda por destacar que los pterosaurios iban siendo 
                    reemplazados gradualmente por las aves primitivas.</p>
                </div>
              </div>
            </div>              
          </div>
      </div>
    </div>
  </section>
</section>
<!-- Start Portfolio -->
<section id="portfolio">
  <div class="portfolio-top">
    <div class="container">
      <div class="portfolio-top-inner">
         <h2 class="title">Dinosaurios</h2>
         <div class="controls">  
          <button class="filter waves-effect waves-light btn" data-filter="all">Todos</button>
          <button class="filter waves-effect waves-light btn" data-filter=".html">Terópodos</button>
          <button class="filter waves-effect waves-light btn" data-filter=".design">Sauropodomorfos</button>
          <button class="filter waves-effect waves-light btn" data-filter=".fashion">Tiréforos</button>
          <button class="filter waves-effect waves-light btn" data-filter=".photoshop">Marginocéfalos</button>
          <button class="filter waves-effect waves-light btn" data-filter=".wordpress">Ornítopodos</button>
      </div>
    </div>
  </div>
  </div>
  <div class="portfolio-bottom">
    <div class="container">
      <div class="portfolio-bottom-inner">
        <div id="portfolio-list">                    
          <div class="mix html" data-value="2">
            <a href="#">
              <img src="img/portfolio/html/html-2.jpg" alt="img">
              <i class="material-icons view-icon">pageview</i>
            </a>
          </div>
          <div class="mix fashion" data-value="4">
            <a href="#">
              <img src="img/portfolio/fashion/fashion-1.jpg" alt="img">
              <i class="material-icons view-icon">pageview</i>           
            </a>
          </div>
          <div class="mix design" data-value="1">
            <a href="#">
              <img src="img/portfolio/design/design-1.jpg" alt="img">
              <i class="material-icons view-icon">pageview</i>
            </a>
          </div>
          <div class="mix html" data-value="5">
            <a href="#">
              <img src="img/portfolio/html/html-1.jpg" alt="img">
              <i class="material-icons view-icon">pageview</i>
            </a>
          </div>
          <div class="mix fashion" data-value="3">
            <a href="#">
              <img src="img/portfolio/fashion/fashion-2.jpg" alt="img">
              <i class="material-icons view-icon">pageview</i>
            </a>
          </div>
          <div class="mix design" data-value="9">
            <a href="#">
              <img src="img/portfolio/design/design-2.jpg" alt="img">
              <i class="material-icons view-icon">pageview</i>
            </a>
          </div>
          <div class="mix html" data-value="12">
            <a href="#">
              <img src="img/portfolio/html/html-3.jpg" alt="img">
              <i class="material-icons view-icon">pageview</i>
            </a>
          </div>
          <div class="mix fashion" data-value="7">
            <a href="#">
              <img src="img/portfolio/fashion/fashion-3.jpg" alt="img">
              <i class="material-icons view-icon">pageview</i>
            </a>
          </div>
          <div class="mix design" data-value="6">
            <a href="#">
              <img src="img/portfolio/design/design-3.jpg" alt="img">
              <i class="material-icons view-icon">pageview</i>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<!-- Start Blog -->
<section id="blog">
  <div class="container">
    <div class="row">
     <div class="col s12">
       <div class="blog-inner">
         <h2 class="title">Blog</h2>
         <p style="font-size: 18px">Si deseas saber alguna cosa más acerca de estas fascinantes criaturas solo
          da clic en alguna imagen de abajo y descrubriras lo que deseas, de igual forma puedes ver todos las 
          publicaciones del blog.</p>
        <!-- Start Blog area -->
        <div class="blog-area">
          <div class="row">
            <!-- Start single blog post -->
            <div class="col s12 m4 l4">
              <div class="blog-post">
                <div class="card">
                  <div class="card-image">
                    <img src="img/blog1.jpg">     
                  </div>
                  <div class="card-content blog-post-content">
                    <h2><a href="blog-single.html">Awesome Post Title</a></h2>
                    <div class="meta-media">
                      <div class="single-meta">
                        Post By <a href="#">Admin</a>
                      </div>
                      <div class="single-meta">
                        Category : <a href="#">Web/Design</a>
                      </div>
                    </div>
                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                  </div>
                  <div class="card-action">
                    <a class="post-comment" href="#"><i class="material-icons">comment</i><span>15</span></a>
                    <a class="readmore-btn" href="blog-single.html">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Start single blog post -->
            <div class="col s12 m4 l4">
              <div class="blog-post">
                <div class="card">
                  <div class="card-image">
                    <img src="img/blog2.jpg">     
                  </div>
                  <div class="card-content blog-post-content">
                    <h2><a href="blog-single.html">Awesome Post Title</a></h2>
                    <div class="meta-media">
                      <div class="single-meta">
                        Post By <a href="#">Admin</a>
                      </div>
                      <div class="single-meta">
                        Category : <a href="#">Web/Design</a>
                      </div>
                    </div>
                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                  </div>
                  <div class="card-action">
                    <a class="post-comment" href="#"><i class="material-icons">comment</i><span>10</span></a>
                    <a class="readmore-btn" href="blog-single.html">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Start single blog post -->
            <div class="col s12 m4 l4">
              <div class="blog-post">
                <div class="card">
                  <div class="card-image">
                    <img src="img/blog3.jpg">     
                  </div>
                  <div class="card-content blog-post-content">
                    <h2><a href="blog-single.html">Awesome Post Title</a></h2>
                    <div class="meta-media">
                      <div class="single-meta">
                        Post By <a href="#">Admin</a>
                      </div>
                      <div class="single-meta">
                        Category : <a href="#">Web/Design</a>
                      </div>
                    </div>
                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                  </div>
                  <div class="card-action">
                    <a class="post-comment" href="#"><i class="material-icons">comment</i><span>15</span></a>
                    <a class="readmore-btn" href="blog-single.html">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- All Post Button -->
          <a class="waves-effect waves-light btn-large allpost-btn" href="{{route('blog')}}">Todas las Publicaciones</a>
        </div>                    
       </div>
      </div>
    </div> 
  </div>
</section>
<!-- Testimonial -->
<section id="testimonial">
<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="testimonial-inner">
        <h2 class="title">Opiniones</h2>
        <!-- Start Testimonial Slider -->
        <div class="testimonial-slider-area">
          <div id="owl-carousel2" class="testimonial-slider row">
            <div class="col s12">
              <div class="single-testimonial">
                <div class="testimonial-img">
                  <img src="img/profile-img.jpg" alt="img">
                </div>
                <div class="testimonial-content">
                  <h3>Mike Jones</h3>
                  <span>CEO, Google Inc.</span>
                  <p>"The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"</p>
                </div>
              </div>
            </div>
            <div class="col s12">
              <div class="single-testimonial">
                <div class="testimonial-img">
                  <img src="img/profile-img1.jpg" alt="img">
                </div>
                <div class="testimonial-content">
                  <h3>Mike Jones</h3>
                  <span>CEO, Google Inc.</span>
                  <p>"The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"</p>
                </div>
              </div>
            </div> 
            <div class="col s12">
              <div class="single-testimonial">
                <div class="testimonial-img">
                  <img src="img/profile-img.jpg" alt="img">
                </div>
                <div class="testimonial-content">
                  <h3>Mike Jones</h3>
                  <span>CEO, Google Inc.</span>
                  <p>"The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"</p>
                </div>
              </div>
            </div>
            <div class="col s12">
              <div class="single-testimonial">
                <div class="testimonial-img">
                  <img src="img/profile-img1.jpg" alt="img">
                </div>
                <div class="testimonial-content">
                  <h3>Mike Jones</h3>
                  <span>CEO, Google Inc.</span>
                  <p>"The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"</p>
                </div>
              </div>
            </div>                                       
          </div>
          <div class="customNavigation">
            <a class="btn prev2 btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-left brand-text"></i></a>
            <a class="btn next2 btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-right brand-text"></i></a>
          </div>                  
        </div>
      </div>
    </div>
    </div> 
</div>
</section>
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="about-inner">
          <div class="row">
            <div class="col s12 m4 l3">
              <div class="about-inner-left">
                <img class="profile-img" src="/img/perfil.webp" alt="Imagen de Perfil">
              </div>
            </div>
            <div class="col s12 m8 l9">
              <div class="about-inner-right">
                <h3>Acerca De Mi</h3>
                <p>¡Hola! Soy un estudiante de ingeniería en Software y como parte de la misma carrera, 
                  he realizado este pequeño blog, para dar a conocer un poco sobre dinosaurios, este proyecto
                  en general incluye todos los temas vistos entre Enero y Abril.</p>
                <div class="personal-information col s12 m12 l6">
                  <h3>Información Personal</h3>
                  <ul>
                    <li><span>Nombre : </span>Irving Gregorio</li>
                    <li><span>Edad : </span>19 Año</li>
                    <li><span>Celular : </span>5523844575</li>
                    <li><span>Domicilio : </span>Técamac, Estado de México</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Start Footer -->
<footer id="footer" role="contentinfo">
  <!-- Start Footer Top -->
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="footer-top-inner">
            <h2 class="title">Contacto</h2>
            <p>¿Alguna duda, queja o sugerencia, o alguna opinión? Puedes dejarla llenando el formulario
              de abajo. Si deseas que tu opinión aparezca en la página, llena el campo de Asunto con el texto
              "Opinión" y tu mensaje aparecerá.</p>
            </p>
            <div class="contact">
              <div class="row">
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
                      <div class="input-field">
                        <input type="text" class="input-box" name="contactSubject" id="subject">
                        <label class="input-label" for="subject">Asunto</label>
                      </div>
                      <div class="input-field textarea-input">
                        <textarea class="materialize-textarea" name="contactMessage" id="textarea1"></textarea>
                        <label class="input-label" for="textarea1">Mensaje</label>
                      </div>
                      <button class="left waves-effect btn-flat brand-text submit-btn" type="submit">Enviar</button>
                    </form>
                  </div>
                </div>
                <div class="col s12 m6 l6">
                  <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.96430478041!2d-98.98036838255616!3d19.714143800000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ed2fa5d3a6c1%3A0x1f383377175dc58a!2sUniversidad%20Politecnica%20de%20Tecamac!5e0!3m2!1ses-419!2smx!4v1648544310291!5m2!1ses-419!2smx" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection