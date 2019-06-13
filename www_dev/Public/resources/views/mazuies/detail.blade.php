@extends('layouts.layout')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/detail.css">
@endsection

@section('title')
 | Detail
@endsection

@section('sidebar_content')
    <ul class="nav nav-pills flex-column">
        @guest
            {{-- サインアップ --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">
                    <button type="button" class="btn btn-outline-primary">{{__('Join us!')}}</button>
                </a>
            </li>
            {{-- ログイン --}}
            <li class="nav-item-inout d-inline">
                <a class="nav-link" href="{{ route('login') }}"><button type="button" class="btn btn-outline-primary">{{__('Login')}}</button></a>
            </li>
        @else
            {{-- ログアウト --}}
            <li class="nav-item-inout">
            {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a> --}}

            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <button type="button" class="btn btn-outline-primary btn-logout">{{ __('Logout') }}</button></a>
            {{--  <a class="nav-link" href=""><button type="button" class="btn btn-outline-primary">Logout</button></a> --}}
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endauth
    </ul>
    {{-- 検索 --}}
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
            <form class="form-inline search">
            <input class="form-control mr-sm-2" style="width: 170px;" type="search" placeholder="Search" aria-label="Search">
            <i class="fas fa-search fa-lg"></i>
            </form>
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
@endsection

@section('main_content')
	<div class="container">
	    <div class="row">
	      <div class="col-sm-9 col-md-9 col-lg-8 mx-auto">
	        <div class="card card-signin my-3">
	          <div class="card-body">
                <div class="pic text-center">
                    <img src="{{ str_replace('public/', '../storage/', $post->img_url) }}" alt="{{$post->title}}">
                </div>
                <div class="btn-dislike">
                    <ul>
                        <li><i class="fas fa-thumbs-down fa-2x"></i></li>
                        <li><i class="fas fa-thumbs-down fa-2x"></i></li>
                        <li><i class="fas fa-thumbs-down fa-2x"></i></li>
                    </ul>
                </div>
                <div class="pic-title text-center">
                    <p>{{$post->title}}</p>
                </div>
                <div class="pic-info text-center">
                <span>{{$post->caption}}</span>
                </div>

                <hr class="my-4">
               {{--  @foreach($comments as $comment) --}}
                <div class="coment-list">
                    <span>{{-- {{$comment['content'] }} --}}</span>
                </div>
                {{-- @endforeach --}}
                {{-- <div class="coment-list">
                    <span>aaaaaaaaaaaaaaaaaaaaaaa</span>
                </div>
                <div class="coment-list">
                    <span>iiiiiiiiiiiiiiiiiiiiiiiii</span>
                </div>
                <div class="coment-list">
                    <span>uuuuuuuuuuuuuuuuuuuuuuuuuuuu</span>
                </div> --}}
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
