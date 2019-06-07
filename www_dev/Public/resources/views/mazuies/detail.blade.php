@extends('header')

@section('style')

	<link rel="stylesheet" type="text/css" href="/css/detail.css">

@endsection

@section('title')
  Detail
@endsection

@section('content')
	<div class="container">
	    <div class="row">
	      <div class="col-sm-9 col-md-9 col-lg-8 mx-auto">
	        <div class="card card-signin my-5">
	          <div class="card-body">
							<div class="pic text-center">
								<img src="imgs/pictures/pizza.png" alt="pizza">
							</div>
							<div class="btn-dislike">
								<ul>
									<li><i class="fas fa-thumbs-down fa-2x"></i></li>
									<li><i class="fas fa-thumbs-down fa-2x"></i></li>
									<li><i class="fas fa-thumbs-down fa-2x"></i></li>
								</ul>
							</div>
							<div class="pic-title text-center">
								<p>Pizza</p>
							</div>
							<div class="pic-info text-center">
								<span>店を潰したくて作ったとしか思えない。もし本当にそうなら天才だ。</span>
							</div>

							<hr class="my-4">

							<div class="coment-list">
								<span>映えてない。</span>
							</div>
							<div class="coment-list">
								<span>aaaaaaaaaaaaaaaaaaaaaaa</span>
							</div>
							<div class="coment-list">
								<span>iiiiiiiiiiiiiiiiiiiiiiiii</span>
							</div>
							<div class="coment-list">
								<span>uuuuuuuuuuuuuuuuuuuuuuuuuuuu</span>
							</div>
							<div class="form-group mt-4">
						    <label for="exampleFormControlTextarea1">Comment</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
						  </div>

							<div class="btn-submit">
						  <input type="submit" class="btn btn-outline-primary" value="Submit!">
							</div>

	          </div>
	        </div>
	      </div>
	    </div>
	</div>
@endsection