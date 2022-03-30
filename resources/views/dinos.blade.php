@extends('template.layoutBD')

@section('Titulo')
  Dinosaurs Watchers - {{$Dino['Nombre']}} 
@endsection
  
@section('Encabezado')
     <!-- START BLOG BANNER -->
     <section id="banner">
      <div class="parallax-container">
        <div class="parallax">
          <img src="{{$Dino['Imagen']}}">
        </div>
        <div class="overlay-header">       
        </div>
        <div class="overlay-content">
          <div class="container">
            <h1 class="header-title">{{$Dino['Nombre']}}</h1>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('Contenido')
    <div class="blog-content">
      <br>
      <div class="blog-image">
        <img src="{{$Dino['Imagen']}}"> 
      </div>
      <br><br>
      <blockquote>
        <p style="font-size: 18px"><strong>Orden: </strong> {{$Dino->Suborden->Orden->Nombre}}</p>
      </blockquote>
      <blockquote>
        <p style="font-size: 18px"><strong>Suborden: </strong> {{$Dino->Suborden->Nombre}}</p>
      </blockquote>
      <blockquote>
        <p style="font-size: 18px"><strong>Alimentación: </strong> {{$Dino['Alimentación']}}</p>
      </blockquote>
      <blockquote>
        <p style="font-size: 18px"><strong>Dimensiones: </strong> {{$Dino['Dimensiones']}} de Longitud</p>
      </blockquote>
      <blockquote>
        <p style="font-size: 18px"><strong>Ubicación Geográfica: </strong> {{$Dino['Ubicación Geográfica']}}</p>
      </blockquote>
      <blockquote>
        <p style="font-size: 18px"><strong>Descripción: </strong> 
          <br>
        {{$Dino['Descripción']}}</p>
      </blockquote>   
    </div>
    <!-- Start Blog Navigation -->
    <div class="blog-navigation">
      <div class="blog-navigation-left">

        <!-- Condicional para los Botones de Navegación -->
        @if($ID==1)
          <a class="prev-post" onclick="">Publicación Anterior</a>
        @else
          <a class="prev-post" href="{{route('dinos', $ID-1)}}">Publicación Anterior</a>
        @endif

      </div>
      <div class="blog-navigation-right">

        <!-- Condicional para los Botones de Navegación -->
        @if($ID==8)
          <a class="next-post" onclick="">Publicación Siguiente</a>
        @else
          <a class="next-post" href="{{route('dinos', $ID+1)}}">Publicación Siguiente</a>
        @endif

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