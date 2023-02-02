@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Bienvenido</h1>
        <a href="https://www.youtube.com/watch?v=mCdA4bJAGGk" class="btn btn-success">Hay que comenzar nuestra aventura</a>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://w7.pngwing.com/pngs/645/674/png-transparent-gruyere-cheese-processed-cheese-shop-afacere-dairy-cheese-food-building-cheese-thumbnail.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://w7.pngwing.com/pngs/219/12/png-transparent-cheese-gruyere-cheese-swiss-cheese-yellow-cheese-food-cheese-rectangle-thumbnail.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://w7.pngwing.com/pngs/220/73/png-transparent-cheese-cream-milk-cheese-cartoon-cheese-food-rectangle-cheese-thumbnail.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        @endauth

        @guest
        <h1>¿Quien chota sos?</h1>
        <p class="lead">
            Hazme el favor de hacer <a href="/login">login</a>
            o de <a href="/register">registrarte</a> porque no se quien eres y no quiero llamar al FBI
        </p>
        @endguest
    </div>
@endsection