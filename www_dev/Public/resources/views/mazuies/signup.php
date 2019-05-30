<!DOCTYPE html>
<html lang="jp">
<head>
	<meta charset="UTF-8">

	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<!-- Font Amatic SC -->
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">

		<<!-- link rel="stylesheet" href="css/login.css"> -->
	<link rel="stylesheet" type="text/css" href="/css/signup.css">

	<title>Signup</title>
</head>
<body>
	<div class="container">
	    <div class="row">
	      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	        <div class="card card-signin my-5">
	          <div class="card-body">
	            <h4 class="card-title text-center">Sign up!</h4>
	            <form class="form-signin">
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

	              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign Up</button>
	              <hr class="my-4">

								<div class="sns-coment text-center">
									<p>Or Sign Up Using</p>
								</div>

	              <div class="btn-sns">
		              <ul>
		              	<li class="btn-facebook">
			              	<a href=""><i class="fab fa-facebook-square fa-5x"></i></a>
			             	</li>
		              	<li class="btn-twitter">
			              	<a href=""><i class="fab fa-twitter-square fa-5x"></i></a>
			             	</li>
			             	<li class="btn-google">
			              	<a href=""><i class="fab fa-google-plus-square fa-5x"></i></a>
			             	</li>
			          	</ul>
			          </div>

			          <div class="signup text-center">
			          	<a class="signup_text" href="">Sign In</a>
			          </div>
	            </form>
	          </div>
	       	</div>
	     	</div>
	   	</div>
	 </div>

	<!-- bootstrap js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>