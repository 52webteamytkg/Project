<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap4 css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <!-- Font Amatic SC -->
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">

 {{--  <link rel="stylesheet" href="css/style.css"> --}}
  <link rel="stylesheet" type="text/css" href="/css/style.css">


    <title>MazuiMeshi.com</title>

</head>
<body style="padding-top: 90px;">
    @guest
        {{--ログインしていない（ゲスト状態）場合の処理 --}}
        ゲスト
    @else
        {{-- ログインしている場合の処理 --}}
        ログイン
        {{Auth::user()->name}}
    @endguest

    <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" style="border-bottom: 2px solid #32CDA6;">
          <a class="navbar-brand" href="#"><img src="/imgs/Mazui_homelogo.png" alt="homelogo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="mypage">
            <li><a class="btn-mypage" style="color: #FF3F6F;" href="/mypage">Mypage</a></li>
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

 <!-- sidebar -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href=""><button type="button" class="btn btn-outline-primary">Join us!</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=""><button type="button" class="btn btn-outline-primary">Login</button></a>
            </li>
            <li class="nav-item">
              <form class="form-inline">
              <input class="form-control mr-sm-2" style="width: 170px;" type="search" placeholder="Search" aria-label="Search">
              <i class="fas fa-search fa-lg" style="color:#FF3F6F;"></i>
              </form>
            </li>
          </ul>
          <ul class="nav nav-pills flex-column">
            {{-- <li class="nav-item">
              <a class="nav-link" href="">Website Policy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">About Our Website </a>
            </li> --}}
          </ul>
          <ul class="nav nav-pills flex-column">
          {{--   <li class="nav-item">
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
            </li> --}}
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

<script>
  (function () {
  'use strict'

  if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style')
    msViewportStyle.appendChild(
      document.createTextNode(
        '@-ms-viewport{width:auto!important}'
      )
    )
    document.head.appendChild(msViewportStyle)
  }

  }())
</script>

    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>