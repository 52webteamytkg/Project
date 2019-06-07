@extends('layout')

@section('style')
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/mypage.css">
@endsection

@section('title')
  My page
@endsection

</head>
<body style="padding-top: 90px;">
	<!-- navbar -->
	  <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" style="border-bottom: 2px solid #32CDA6;">
		  <a class="navbar-brand" href="#"><img src="imgs/Mazui_homelogo.png" alt="homelogo"></a>
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
>>>>>>> f9026520c18877bbbfa8e4d48bcbdfdc4f0844e3

@section('content')
 <!-- sidebar -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('mazuimeshi.mypage') }}">Profile</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('mazuimeshi.edit') }}">Edit</a>

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
