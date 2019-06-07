@extends('layout')


@section('style')
  <link rel="stylesheet" type="text/css" href="/css/style.css">
@endsection

@section('title')
  Home
@endsection

</head>
<body style="padding-top: 90px;">
    <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" style="border-bottom: 2px solid #32CDA6;">
          <a class="navbar-brand" href="#"><img src="/imgs/Mazui_homelogo.png" alt="homelogo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="mypage">
            <li><a class="btn_mypage" style="color: #FF3F6F;" href="/mypage">Mypage</a></li>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fab fa-facebook fa-lg" style="color:#32CDA6"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-twitter fa-lg" style="color:#32CDA6"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-instagram fa-lg" style="color:#32CDA6"></i></a>
              </li>
            </ul>
          </div>
        </nav>

@section('content')
 <!-- sidebar -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('mazuimeshi.signup') }}"><button type="button" class="btn btn-outline-primary">Join us!</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('mazuimeshi.login') }}"><button type="button" class="btn btn-outline-primary">Login</button></a>
            </li>
            <li class="nav-item">
              <form class="form-inline">
              <input class="form-control mr-sm-2" style="width: 170px;" type="search" placeholder="Search" aria-label="Search">
              <i class="fas fa-search fa-lg" style="color:#FF3F6F;"></i>
              </form>
            </li>
          </ul>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('mazuimeshi.policy') }}">Website Policy</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('mazuimeshi.about') }}">About Our Website </a>

            </li>
          </ul>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <p class="nav-link" href="">Category</p>
            </li>
            <li class="nav-item">
              <a class="nav-category-link" href="">Ranking</a>
            </li>
            <li class="nav-item">
              <a class="nav-category-link" href="">Area</a>
            </li>
            <li class="nav-item">
              <a class="nav-category-link" href="">Genre</a>
            </li>
            <li class="nav-item">
              <a class="nav-category-link" href="">Vibe</a>
            </li>
          </ul>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <p class="nav-link" href="">Filter</p>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- posted area -->
    <div class="container-fluid">
      <main class="col-sm-9 offset-sm-6 col-md-6 offset-md-3 pt-3">
        <section class="row text-center pictures">
          <div class="col-9 col-sm-6 picture">
            <img src="imgs/pictures/pizza.png" width="400" height="400" alt="">
          </div>
          <div class="col-9 col-sm-6 picture">
            <img src="imgs/pictures/ice.png" width="400" height="400" alt="">
          </div>
        </section>
        <section class="row text-center pictures">
          <div class="col-9 col-sm-6 picture">
            <img src="imgs/pictures/mooncafe.jpg" width="400" height="400" alt="">
          </div>
          <div class="col-9 col-sm-6 picture">
            <img src="imgs/pictures/dinner.JPG" width="400" height="400" alt="">
          </div>
        </section>
        <section class="row text-center pictures">
          <div class="col-9 col-sm-6 picture">
            <img src="imgs/pictures/fish.jpg" width="400" height="400" alt="">
          </div>
          <div class="col-9 col-sm-6 picture">
            <img src="imgs/pictures/cake.JPG" width="400" height="400" alt="">
          </div>
        </section>
        <section class="row text-center pictures">
          <div class="col-9 col-sm-6 picture">
            <img src="imgs/pictures/apa.jpg" width="400" height="400" alt="">
          </div>
          <div class="col-9 col-sm-6 picture">
            <img src="imgs/pictures/panini.JPG" width="400" height="400" alt="">
          </div>
        </section>
        </main>
    </div>
@endsection
