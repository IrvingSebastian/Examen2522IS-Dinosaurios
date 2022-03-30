@extends('template.layoutBD')

@section('Titulo')
  Dinosaurs Watchers - {{$Publi['Titulo']}}
@endsection
  
@section('Encabezado')
     <!-- START BLOG BANNER -->
     <section id="banner">
      <div class="parallax-container">
        <div class="parallax">
          <img src="{{$Publi['Imagen']}}">
        </div>
        <div class="overlay-header">       
        </div>
        <div class="overlay-content">
          <div class="container">
            <h1 class="header-title">{{$Publi['Titulo']}}</h1>
            <div class="meta-media">
              <div class="single-meta">
                Post By {{$Publi['Autor']}}</a>
              </div>
              <div class="single-meta">
                <a href="#comments" class="post-comment"><i class="material-icons">comment</i><span>{{$Publi->Comentarios->count()}}</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('Contenido')
    <div class="blog-content">
      <br>
      <div class="blog-image">
        <img src="{{$Publi['Imagen']}}"> 
      </div>
      <br><br>

      <!--- Mostrar la Publicación -->
      {!! $Publi['Contenido'] !!}

    </div>
    <!-- Start Blog Navigation -->
    <div class="blog-navigation">
      <div class="blog-navigation-left">

        <!-- Condicional para los Botones de Navegación -->
        @if($ID==1)
          <a class="prev-post" onclick="">Publicación Anterior</a>
        @else
          <a class="prev-post" href="{{route('publicacion', $ID-1)}}">Publicación Anterior</a>
        @endif

      </div>
      <div class="blog-navigation-right">

        <!-- Condicional para los Botones de Navegación -->
        @if($ID==8)
          <a class="next-post" onclick="">Publicación Siguiente</a>
        @else
          <a class="next-post" href="{{route('publicacion', $ID+1)}}">Publicación Siguiente</a>
        @endif

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
            
            <!-- Aquí se cargan las Publicaciones -->
            @foreach ($PublisAlternas as $PubliAlterna)
              <div class="col s12 m6 l6">
                <div class="card">
                  <div class="card-image">
                    <img src="{{$PubliAlterna['Imagen']}}">     
                  </div>
                  <div class="card-content blog-post-content">
                    <h2><a href="{{route('publicacion', $PubliAlterna['ID'])}}">{{$PubliAlterna['Titulo']}}</a></h2>
                    <div class="meta-media">
                      <div class="single-meta">
                        Publicado Por {{$PubliAlterna['Autor']}}</a>
                      </div>
                      <div class="single-meta">
                        Fecha de Publicación: {{$PubliAlterna['created_at']}}</a>
                      </div>
                    </div>
                    <p>{{$Publi['Resumen']}}</p>
                  </div>
                  <div class="card-action">
                    <a class="post-comment"><i class="material-icons">comment</i><span>{{$PubliAlterna->Comentarios->count()}}</span></a>
                    <a class="readmore-btn" href="{{route('publicacion', $PubliAlterna['ID'])}}">Leer Más...</a>
                  </div>
                </div>
              </div> 
            @endforeach
          
          </div>
        </div>
      </div>
    </div>
    <!-- Start Comments -->
    <div class="row">
      <div class="col s12">
        <div class="comments-area" id="comments">
          @if($Publi->Comentarios->count() == 0)
            <h3 class="comments-title">Aún No Hay Comentarios</h3>
          @else
            <h3 class="comments-title">{{$Publi->Comentarios->count()->count()}} Comentarios</h3>
          @endif
          <div class="comments">
            <ul class="commentlist">
              <!-- Aquí se cargan los Comentarios -->	

              @foreach ($Publi->Comentarios as $Comentario)
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
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>          
  </div>
@endsection

@section('Dinos')
  <!-- Aquí se cargan 3 Dinosaurios -->
  @foreach ($Dinos as $Dino)
  <div class="recent-news">
    <div class="recent-img">
        <a href="{{route('dinos', $Dino['ID'])}}"><img src="{{$Dino['Imagen']}}" alt="img"></a>
    </div>
    <div class="recent-body">
        <h4><a href="{{route('dinos', $Dino['ID'])}}">{{$Dino['Nombre']}}</a></h4>
        <p>{{$Dino['Alimentación']}}</p>
    </div>
  </div>  
  @endforeach  
@endsection