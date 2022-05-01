@extends('SP.main_SP')

@section('title')
  TQYES || Интернет-магазин по продаже комплектующих
@endsection

@section('content')
@if(session('alert')) 
  @include('module_SP.alert')
@endif
<div class="row justify-content-center">
  <div class="col colas-block">
    <div class="container-{breakpoint}">
      <div id="carouselExampleCaptions" class="carousel slide border border-5 border-dark" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block center-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block center-block">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Следующий</span>
        </button>
      </div>
    </div>
  </div>
  <div class="col colas-block2">
    <div class="jumbotron p-3 m-5 text-white bg-dark">
      <div class="px-0">
        <h1 class="font-italic">Акции</h1>
        <hr>
        <p class="lead my-3">Multiple lines of text that form the lede.</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
      </div>
    </div>
  </div>
  <div class="row w-100">
    <div class="container-fluid bg-dark">
      <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

