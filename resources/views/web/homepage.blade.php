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
      <img src="Hunza.jpg" class=" w-100" alt="...">
      <div class="carousel-caption text-center d-sm-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item h-50">
      <img src="Fairy.jpg" class=" w-100" alt="...">
      <div class="carousel-caption text-center d-sm-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item h-50">
      <img src="Skardu.jpg" class=" w-100" alt="...">
      <div class="carousel-caption justify-content-center d-sm-block">
        <h5 >Third slide label</h5>
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
         <h1 class="title container">Yaadgar</h1>
      <div class="row">
        <div class="col-lg-8 ">
          <p class="px-5">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
        </div>
        <div class="col-lg-4 my-auto">
     		   <a href="/customize"><button class="btn btn-outline-primary btn-lg ">Customize Your Trip Now!</button></a>
        </div>
      </div>
     </div>
  	</div>

    <div class="trip">   
     <div class="text-center" id="outer">
         <h1 class=" container title">Yaadgar Packages</h1>
      <div class="row">
        <div class="col-lg-8">
          <p class="px-5">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
        </div>
        <div class="col-lg-4 my-auto">
           <a href=""><button class="btn btn-outline-primary btn-lg">Customize Your Trip Now!</button></a>
        </div>
      </div>
     </div>
    </div>
    <section class="testimonials">
        <div class="container">
            <h1>Reviews</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, exercitationem.</p>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="profile">
                        <img src="Q.jpg " class="user w-auto h-auto ">
                        <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit consectetur mollitia quos possimus illum doloribus.</blockquote>
                        <h3>Qavi Shaikh</h3>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="profile">
                        <img src="F.jpg" class="user w-auto h-auto">
                        <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit consectetur mollitia quos possimus illum doloribus.</blockquote>
                        <h3>Mohammad Feroz</h3>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="profile">
                        <img src="A.jpg" class="user w-auto h-auto">
                        <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit consectetur mollitia quos possimus illum doloribus.</blockquote>
                        <h3>Asad Rajput</h3>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection

@section('css')
 <style>
  .container{
    padding: 0px ;
  }
  .trip div h1{
    line-height: 18vh;
  }
  .trip div p{
    font-size: 120%;
    margin-top: 3%;
  }
  .title {
	text-align: center;
	font-weight: bold;
	color: #007bff;
	padding-bottom: 10px;
	text-transform: uppercase;
  }
  .title::after {
	content: '';
	background: #007bff;
	display: block;
	height: 3px;
	widows: 170px;
	margin: 20px auto 5px;
  }
  .carousel-caption{
    justify-content: center;
  }
  /* testimonial styling */
.testimonials {
	margin: 50px auto;
  padding:0px;
}
.testimonials h1 {
	text-align: center;
	font-weight: bold;
	color: #007bff;
	padding-bottom: 10px;
	text-transform: uppercase;
}
.testimonials h1::after {
	content: '';
	background: #007bff;;
	display: block;
	height: 3px;
	widows: 170px;
	margin: 20px auto 5px;
}
.row {
	padding: 0;
}
.testimonials .row {
	margin-top: 30px;
}
.col-md-4 {
	margin: 40px auto;
}
.profile {
	padding: 70px 10px 10px 10px;
	background-color: #efefef;
}
.profile img {
	top: -60px;
	position: absolute;
	left: calc(50% - 60px);
	border: 10px solid white;
}
.user {
	width: 120px;
	height: 120px;
	border-radius: 50%;
}
.profile h3 {
	font-size: 20px;
	margin-top: 15px;
	color: #007bff;;
}
blockquote {
	font-size: 16px;
	line-height: 30px;
}
blockquote::before {
	content: '\02BB';
	font-size: 40px;
	position: relative;
	color: #007bff;;
	line-height: 20px;
	bottom: -15px;
	right: 5px;
}
blockquote::after {
	content: '\02BC';
	font-size: 40px;
	position: relative;
	color: #007bff;
	line-height: 10px;
	bottom: -15px;
	left: 5px;
}
.profile:hover {
	box-shadow: 0 0 15px 15px rgba(0, 0, 0, 0.2);
	cursor: pointer;
	transition: 0.5s;
}
  </style>

@endsection

@section('js')

@endsection
