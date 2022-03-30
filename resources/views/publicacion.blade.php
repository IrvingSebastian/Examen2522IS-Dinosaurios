@extends('template.layoutBD')

@section('Titulo')
  Dinosaurs Watchers - {{$Tema}}
@endsection
  
@section('Encabezado')
     <!-- START BLOG BANNER -->
     <section id="banner">
      <div class="parallax-container">
        <div class="parallax">
          <img src="/img/blog-header-bg.jpg">
        </div>
        <div class="overlay-header">       
        </div>
        <div class="overlay-content">
          <div class="container">
            <h1 class="header-title">Awesome Image Post Title</h1>
            <div class="meta-media">
              <div class="single-meta">
                Post By </a>
              </div>
              <div class="single-meta">
                <a href="#comments" class="post-comment"><i class="material-icons">comment</i><span>15</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('Contenido')
    <div class="blog-content">
      <div class="blog-image">
        <img src="/img/blog1.jpg"> 
      </div>
      
    </div>
    <!-- Start Blog Navigation -->
    <div class="blog-navigation">
      <div class="blog-navigation-left">
        <a class="prev-post" href="#">Publicación Anterior</a>
      </div>
      <div class="blog-navigation-right">
        <a class="next-post" href="#">Publicación Siguiente</a>
      </div>
    </div>
    <!-- Strat Related Post -->
    <div class="row">
      <div class="col s12">
        <div class="related-post">
          <h2>Podría Interesarte</h2>
        </div>
        <div class="related-post-content">
          <div class="row">
            <div class="col s12 m6 l6">
              <div class="card">
                <div class="card-image">
                  <img src="/img/blog1.jpg">     
                </div>
                <div class="card-content blog-post-content">
                  <h2><a href="#">Awesome Post Title</a></h2>
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
                  <a href="#" class="post-comment"><i class="material-icons">comment</i><span>15</span></a>
                  <a href="#" class="readmore-btn">Read More</a>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l6">
              <div class="card">
                <div class="card-image">
                  <img src="/img/blog1.jpg">     
                </div>
                <div class="card-content blog-post-content">
                  <h2><a href="#">Awesome Post Title</a></h2>
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
                  <a href="#" class="post-comment"><i class="material-icons">comment</i><span>15</span></a>
                  <a href="#" class="readmore-btn">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Start Comments -->
    <div class="row">
      <div class="col s12">
        <div class="comments-area" id="comments">
          <h3 class="comments-title">5 Comments</h3>
          <div class="comments">
            <ul class="commentlist">
              <li>
                <div class="media">
                  <div class="media-left">    
                    <img class="media-object news-img" src="/img/profile-img1.jpg" alt="img">      
                  </div>
                  <div class="media-body">
                    <h4 class="author-name">Dr. Jack Johnson</h4>
                    <span class="comments-date"> May 16, 2015 / 10:29 am</span>
                    <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                    <a href="#" class="reply-btn">Reply</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="media">
                  <div class="media-left">    
                    <img class="media-object news-img" src="/img/profile-img1.jpg" alt="img">      
                  </div>
                  <div class="media-body">
                    <h4 class="author-name">Dr. Jack Johnson</h4>
                    <span class="comments-date"> May 16, 2015 / 10:29 am</span>
                    <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                    <a href="#" class="reply-btn">Reply</a>
                  </div>
                </div>
              </li>
              <ul class="children">
                <li class="author-comments">
                  <div class="media">
                    <div class="media-left">    
                        <img class="media-object news-img" src="/img/profile-img1.jpg" alt="img">  
                    </div>
                    <div class="media-body">
                      <h4 class="author-name">Dr. Jack Johnson</h4>
                      <span class="comments-date"> May 16, 2015 / 10:29 am</span>                                  
                      <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                      <a href="#" class="reply-btn">Reply</a>
                    </div>
                  </div>
                </li>
                <ul class="children">
                  <li>
                    <div class="media">
                      <div class="media-left">    
                        <img class="media-object" src="/img/profile-img1.jpg" alt="img">      
                      </div>
                      <div class="media-body">
                        <h4 class="author-name">Dr. Jack Johnson</h4>
                        <span class="comments-date"> May 16, 2015 / 10:29 am</span>
                        <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                        <a href="#" class="reply-btn">Reply</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </ul>
              <li>
                <div class="media">
                  <div class="media-left">    
                    <img class="media-object" src="/img/profile-img1.jpg" alt="img">      
                  </div>
                  <div class="media-body">
                    <h4 class="author-name">Dr. Jack Johnson</h4>
                    <span class="comments-date"> May 16, 2015 / 10:29 am</span>
                    <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                    <a href="#" class="reply-btn">Reply</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>          
  </div>
@endsection

@section('Dinos')
 <!-- Single Recent News -->
 <div class="recent-news">
  <div class="recent-img">
      <a href="blog-single.html"><img src="/img/blog1.jpg" alt="img"></a>
  </div>
  <div class="recent-body">
      <h4><a href="blog-single.html">Recent News Title</a></h4>
      <p>The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
  </div>
  </div>   
@endsection