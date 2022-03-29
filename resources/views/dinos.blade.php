@extends('template.layout')

@section('Titulo')
  Dinosaurs Watchers - Dinosaurio {{$ID}}
@endsection

@section('Contenido')
    <!-- START BLOG BANNER -->
    <section id="banner">
        <div class="parallax-container">
          <div class="parallax">
            <img src="/img/fondo-2.webp">
          </div>
          <div class="overlay-header">       
          </div>
          <div class="overlay-content blog-head">
            <div class="container">
              <h1 class="header-title"> XD </h1>                  
            </div>
          </div>
        </div>
      </section>
      <section id="blog-details">
        <div class="container">
          <div class="row">
            <div class="col s12 m8 l8">
              <div class="blog-content blog-archive"> 
              <!-- Start Single Blog-->
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
                      <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                    </div>
                    <div class="card-action">
                      <a href="#" class="post-comment"><i class="material-icons">comment</i><span>15</span></a>
                      <a href="blog-single.html" class="readmore-btn">Read More</a>
                    </div>
                  </div>
                </div> 
              </div> 
              <!-- Start Pagination -->
              <div class="row">
                <div class="col s12">                      
                  <ul class="pagination custom-pagination">
                    <li><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#">{{$ID}}</a></li>
                    <li class="waves-effect"><a href="#">{{$ID+1}}</a></li>
                    <li class="waves-effect"><a href="#">{{$ID+2}}</a></li>
                    <li class="waves-effect"><a href="#">{{$ID+3}}</a></li>
                    <li class="waves-effect"><a href="#">{{$ID+4}}</a></li>
                    <li class="waves-effect"><a href="#"><i class="material-icons">chevron_right</i></a></li>
                  </ul>            
                </div>
              </div>
            </div>
            <!-- Start Sidebar -->
            <div class="col s12 m4 l4" id="dinos">
              <aside class="sidebar">
                <!-- Start Single Sidebar -->
                <div class="single-sidebar">
                  <h3>Otros Dinosaurios</h3>
                  <!-- Single Recent News -->
                  <div class="recent-news">
                    <div class="recent-img">
                      <a href="blog-single.html"><img src="img/blog1.jpg" alt="img"></a>
                    </div>
                    <div class="recent-body">
                      <h4><a href="blog-single.html">Recent News Title</a></h4>
                      <p>The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                    </div>
                  </div>
                  <!-- Single Recent News -->
                  <div class="recent-news">
                    <div class="recent-img">
                      <a href="blog-single.html"><img src="img/blog2.jpg" alt="img"></a>
                    </div>
                    <div class="recent-body">
                      <h4><a href="blog-single.html">Recent News Title</a></h4>
                      <p>The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                    </div>
                  </div>
                  <!-- Single Recent News -->
                  <div class="recent-news">
                    <div class="recent-img">
                      <a href="blog-single.html"><img src="img/blog3.jpg" alt="img"></a>
                    </div>
                    <div class="recent-body">
                      <h4><a href="blog-single.html">Recent News Title</a></h4>
                      <p>The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                    </div>
                  </div>
                </div>
                 <!-- Start Single Sidebar -->
                <div class="single-sidebar">
                  <h3>Otros Proyectos</h3>
                  <!-- Single Category -->
                  <ul class="archives">
                   <li><a href="#">March 2015</a></li>
                   <li><a href="#">April 2015</a></li>
                   <li><a href="#">May 2015</a></li>
                   <li><a href="#">June 2015</a></li>
                   <li><a href="#">July 2015</a></li>
                  </ul>
                </div>
                 <!-- Start Single Sidebar -->
                <div class="single-sidebar">
                  <h3>Enlaces de Interés</h3>                      
                  <ul>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Link One</a></li>
                    <li><a href="#">Link Two</a></li>
                    <li><a href="#">Link Three</a></li>
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>     
      <!-- Start Footer -->
      <footer id="footer" role="contentinfo">    
@endsection