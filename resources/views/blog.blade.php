@extends('template.layoutBD')

@section('Titulo')
  Dinosaurs Watchers - Blog
@endsection

@section('Encabezado')
<section id="banner">
  <div class="parallax-container">
    <div class="parallax">
      <img src="/img/fondo-2.webp">
    </div>
    <div class="overlay-header">       
    </div>
    <div class="overlay-content blog-head">
      <div class="container">
          <h1 class="header-title">Todas Las Publicaciones </h1>                  
      </div>
    </div>
  </div>
</section>
@endsection

@section('Contenido')
<div class="blog-content blog-archive"> 
  
  <!-- Aquí se cargan Todas las Publicaciones -->
  @foreach($Publis as $Publi)
    <div class="blog-post">
      <div class="card">
        <div class="card-image">
          <img src="{{$Publi['Imagen']}}">     
        </div>
        <div class="card-content blog-post-content">
          <h2><a href="blog-single.html">{{$Publi['Titulo']}}</a></h2>
          <div class="meta-media">
            <div class="single-meta">
              Publicado Por {{$Publi['Autor']}}</a>
            </div>
            <div class="single-meta">
              Fecha de Publicación: <a href="#">{{$Publi['created_at']}}</a>
            </div>
          </div>
          <p>{{$Publi['Resumen']}}</p>
        </div>
        <div class="card-action">
          <a class="post-comment"><i class="material-icons">comment</i><span>{{$NumeroC}}</span></a>
          <a href="{{route('publicacion', $Publi['ID'])}}" class="readmore-btn">Leer Más</a>
        </div>
      </div>
    </div>  
  @endforeach
  
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
