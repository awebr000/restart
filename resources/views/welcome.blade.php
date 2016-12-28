@extends('layouts.app')
@section('title')
  Home
@endsection

@section('hero')
  <section id="hero-home">
    <div class="container">
      <div class="row">

      </div>
    </div>
    <nav class="navbar">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
        <li><a href="#">Page Jogo-jogo<span style="margin-left:20px;">|</span></a></li>
        <li><a href="#"><i class="fa fa-instagram fa-lg"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
      </ul>
    </div>
  </nav>
  </section>
@endsection

@section('content')
  <section class="container" id="home-page">
      <h1 class="bold-title">What's New</h1>
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="col-md-6 col-sm-6 gallery" style="margin-top: 0">
            <img src="{{asset('images/product-3.jpg')}}" class="images" alt="" data-toggle="tab" data-target="#product-3">
          </div>
          <div class="col-md-6 col-sm-6 gallery" style="margin-top: 0">
            <img src="{{asset('images/product-2.jpg')}}" class="images" alt="" data-toggle="tab" data-target="#product-2">
          </div>
          <div class="col-md-6 col-sm-6 gallery">
            <img src="{{asset('images/product-10.jpg')}}" class="images" alt="" data-toggle="tab" data-target="#product-10">
          </div>
          <div class="col-md-6 col-sm-6 gallery">
            <img src="{{asset('images/product-6.jpg')}}"  class="images" alt="" data-toggle="tab" data-target="#product-6">
          </div>
        </div>
        <div class="col-md-5">
          <div class="col-md-12 tab-content">
            <div class="tab-pane explanation" id="product-2">
              <h2>Product 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="tab-pane explanation" id="product-3">
              <h2>Product 3 </h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="tab-pane explanation" id="product-10">
              <h2>Product yang dibawa ke bandung</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="tab-pane explanation" id="product-6">
              <h2>test product 6</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection

@section('script')
  <script type="text/javascript">
    $('.gallery').on('click', function() {
      $(this).addClass('gallery-active').siblings().removeClass('gallery-active');
    });
    $('.images').hover(function() {
      var location = $(this).attr('data-target');
      console.log(''+location+'')
      $(location).toggleClass('hover-active').siblings().toggleClass('hover-inactive');
    })
  </script>
@endsection
