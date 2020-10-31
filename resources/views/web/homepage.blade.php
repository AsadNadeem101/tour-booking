@extends('layouts.website_layout')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Hunza.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Fairy.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Skardu.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
<br>
    <div class="trip">   
     <div class="text-center" id="outer">
         <h1 class="title">Yaadgar</h1>
      <div class="row">
        <div class="col-md-8 ">
          <p class="px-5">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
        </div>
        <div class="col-md-4 my-auto">
     		   <a href=""><button class="btn btn-outline-primary btn-lg ">Customize Your Trip Now!</button></a>
        </div>
      </div>
     </div>
  	</div>

    <div class="trip">   
     <div class="text-center" id="outer">
         <h1 class="title">Yaadgar Packages</h1>
      <div class="row">
        <div class="col-md-8">
          <p class="px-5">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
        </div>
        <div class="col-md-4 my-auto">
           <a href=""><button class="btn btn-outline-primary btn-lg">Customize Your Trip Now!</button></a>
        </div>
      </div>
     </div>
    </div>

@endsection

@section('css')
 <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: auto;
  }
  .trip div h1{
    line-height: 18vh;
  }
  .trip div p{
    font-size: 120%;
    margin-top: 3%;
  }
  .title{ color: black; font-family: "Great Vibes", cursive; font-size: 70px; font-weight: normal; margin-bottom: 0px; margin-top: 40px; text-align: center; text-shadow: 0 1px 1px #fff; }
  </style>
@endsection

@section('js')

@endsection
