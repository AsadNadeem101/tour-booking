@extends('layouts.website_layout')

@section('content')

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Fairy.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="Hunza.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="Skardu.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br>
    <div class="trip">   
     <div class="text-center" id="outer">
         <h1 class="title">YadGar</h1>
      <div class="row">
        <div class="col-md-8">
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
        </div>
        <div class="col-xs-4">
     		   <a href=""><button class="btn btn-primary"><h1>Customize Your Trip Now!</h1></button></a>
        </div>
      </div>
     </div>
  	</div>

    <div class="trip">   
     <div class="text-center" id="outer">
         <h1 class="title">YadGar Packages</h1>
      <div class="row">
        <div class="col-md-4">
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
        </div>
        <div class="col-md-4">
           <a href=""><button class="btn btn-primary"><h1>Customize Your Trip Now!</h1></button></a>
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
  .trip div:hover{
    background-color:black;
  }
  .trip h1:hover{
    opacity: 10;
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
