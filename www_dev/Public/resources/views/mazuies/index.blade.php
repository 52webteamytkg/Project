@extends('layout')


@section('style')
  <link rel="stylesheet" type="text/css" href="/css/style.css">
@endsection

@section('title')
  Home
@endsection

@section('content')
 <!-- sidebar -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
    {{-- サインアップ --}}
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('mazuimeshi.signup') }}"><button type="button" class="btn btn-outline-primary">Join us!</button></a>
            </li>
          </ul>
    {{-- ログイン・アウト --}}
            <li class="nav-item-inout">
              <a class="nav-link" href="{{ route('mazuimeshi.login') }}"><button type="button" class="btn btn-outline-primary">Login</button></a>
            </li>

            <li class="nav-item-inout">
              {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
              </a> --}}

              <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <button type="button" class="btn btn-outline-primary btn-logout">{{ __('Logout') }}</button></a>
             {{--  <a class="nav-link" href=""><button type="button" class="btn btn-outline-primary">Logout</button></a> --}}
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
    {{-- 検索 --}}
          <ul class="nav nav-pills flex-column">
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
