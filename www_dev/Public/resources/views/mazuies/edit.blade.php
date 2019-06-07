@extends('layout')

@section('title')
  Edit page
@endsection

@section('style')
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/edit.css">
@endsection


	<title>Edit page</title>

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

	<!-- edit area -->
    <div class="container">
        <div class="row">
            <div class="profile-area">
              <!-- 画像 -->
                  <img class="profile-photo"src="imgs/GEN2.jpg" alt="サンプル画像">

                <div class="profile-edit">
                <!-- 画像アップ -->
                  <div class="form-group">
                      <label for="img_url">Profile Photo</label>
                      <input type="file" name="img_url" class="form-control" id="img_url">
                  </div>
                <!-- コメント -->
                  <div class="title-comment">
                    <p>Comment</p>
                  </div>
                  <div class="comment-content">
                    <span class="w-nomal">wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww</span>
                  </div>
                </div>

            </div>
        </div>

        <div class="container">
           <form class="form-edit" style="margin-left: 250px;">
              <div class="form-label-group">
                  <input type="id" id="inputId" class="form-control" placeholder="ID" required autofocus>
                  <label for="inputId">ID</label>
              </div>

              <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputEmail">Email</label>
              </div>

              <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
              </div>

              <div class="form-label-group">
                    <input type="checkpw" id="inputCheckpw" class="form-control" placeholder="Checkpw" required>
                    <label for="inputCheckpw">Check pw</label>
              </div>
            </form>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" style="margin-left: 420px;">Edit!</button>

        </div>

  @endsection