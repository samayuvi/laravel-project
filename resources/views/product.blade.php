@extends('layouts.app')
@section('title')
Product Card
@endsection

@section('content')
    
<div id="carouselExampleDark" class="carousel carousel-dark slide w-70" data-bs-ride="carousel">
    <div class="carousel-indicators">
      
      @for ($i = 0; $i < count($data); $i++)
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$i}}" class="active" aria-current="true" ></button>
      @endfor
    </div>

    <div class="carousel-inner">
      

      
      <div class="carousel-item active" >
        <img src="{{(string) $data[0]->src}}" class="d-block w-100" alt="...">
      </div>

        @for ($i = 1; $i < sizeof($data); $i++)
        <div class="carousel-item " >
        <img src="{{(string) $data[$i]->src}}" class="d-block w-100" alt="...">
      </div>
        @endfor

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <script>
      $('.carousel').carousel();
  </script>

  @endsection
@section('aside-content')
    @include('inc.description')
@endsection