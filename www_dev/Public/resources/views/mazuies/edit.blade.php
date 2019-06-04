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

	<link rel="stylesheet" href="css/edit.css">

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