@extends('layout')

@section('title')
  My page
@endsection

@section('content')


{{--  <link rel="stylesheet" href="css/style.css"> --}}
  <link rel="stylesheet" type="text/css" href="/css/mypage.css">

 <!-- sidebar -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Edit</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

  <!-- posted area -->
    <div class="container-fluid">
      <main class="col-sm-9 offset-sm-6 col-md-6 offset-md-3 pt-3">
        <!-- photo area -->
        <p class="title-mypage">My Photos</p>
            <section class="row text-center pictures">
              <div class="col-6 col-sm-4 picture">
                <img src="imgs/pictures/pizza.png" width="200" height="200" alt="">
              </div>
              <div class="col-6 col-sm-4 picture">
                <img src="imgs/pictures/ice.png" width="200" height="200" alt="">
              </div>
              <div class="col-6 col-sm-4 picture">
                <img src="imgs/pictures/ice.png" width="200" height="200" alt="">
              </div>
            </section>
            <section class="row text-center pictures">
              <div class="col-6 col-sm-4 picture">
                <img src="imgs/pictures/mooncafe.jpg" width="200" height="200" alt="">
              </div>
              <div class="col-6 col-sm-4 picture">
                <img src="imgs/pictures/dinner.JPG" width="200" height="200" alt="">
              </div>
              <div class="col-6 col-sm-4 picture">
                <img src="imgs/pictures/dinner.JPG" width="200" height="200" alt="">
              </div>
            </section>

        <!--dislike area -->
        <p class="title-mypage">Dislikes</p>
            <section class="row text-center pictures">
              <div class="col-6 col-sm-4 picture">
                <img src="imgs/pictures/fish.jpg" width="200" height="200" alt="">
              </div>
              <div class="col-6 col-sm-4 picture">
                <img src="imgs/pictures/cake.JPG" width="200" height="200" alt="">
              </div>
              <div class="col-6 col-sm-4 picture">
                <img src="imgs/pictures/cake.JPG" width="200" height="200" alt="">
              </div>
            </section>
            <section class="row text-center pictures">
              <div class="col-6 col-sm-4 picture">
                <img src="imgs/pictures/apa.jpg" width="200" height="200" alt="">
              </div>
              <div class="col-6 col-sm-4 picture">
                <img src="imgs/pictures/panini.JPG" width="200" height="200" alt="">
              </div>
              <div class="col-6 col-sm-4 picture">
                <img src="imgs/pictures/panini.JPG" width="200" height="200" alt="">
              </div>
            </section>
        </main>
    </div>
  @endsection