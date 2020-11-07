@extends('layouts.website_layout')

@section('content')
<div class="container-fluid" style="padding: 0; margin: 0;">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner upper-slider">
        <div class="carousel-item active">
          <img src="Hunza.jpg" class=" w-100" alt="...">
          <div class="carousel-caption text-center d-sm-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item ">
          <img src="Fairy.jpg" class=" w-100" alt="...">
          <div class="carousel-caption text-center d-sm-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item ">
          <img src="Skardu.jpg" class=" w-100" alt="...">
          <div class="carousel-caption justify-content-center d-sm-block">
            <h5 >Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev" style="left:0;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next" style="right:0;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
     
    <br>
    <br>
        <div class="trip">   
         <div class="text-center" id="outer">
             <h1 class=" container title pb-0 mb-0">Yaadgar Packages</h1>
          <div class="row">
            <div class="col-lg-12">
                  <div class="container my-1 myh1">
                    <div class="row second-slider">
                        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-4 col-auto">
                                        <div class="card card-body">
                                            <img class="img-fluid" src="p1.JPG" width="100%" height="100%">
                                            <div class="row">
                                              <div class="col-auto">
                                                <ul style="text-align: left;">
                                                  <li>First item</li>
                                                  <li>Second item</li>
                                                  <li>Third item</li>
                                                  <li>Fourth item</li>
                                               </ul> 
                                              </div>
                                              <div class="col-auto pr-0">
                                                <h4 style="padding-top: 4%;">28,000 PKR</h4>                                          
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <img class="img-fluid" src="p1.JPG" width="100%" height="100%">
                                              <div class="row">
                                                  <div class="col-auto">
                                                    <ul style="text-align: left">
                                                      <li>First item</li>
                                                      <li>Second item</li>
                                                      <li>Third item</li>
                                                      <li>Fourth item</li>
                                                   </ul> 
                                                  </div>
                                                  <div class="col-auto pr-0">
                                                    <h4 style="padding-top: 4%">28,000 PKR</h4>                                          
                                                  </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <img class="img-fluid" src="p3.JPG" width="100%" height="100%">                                        
                                              <div class="row">
                                                  <div class="col-auto">
                                                    <ul style="text-align: left">
                                                      <li>First item</li>
                                                      <li>Second item</li>
                                                      <li>Third item</li>
                                                      <li>Fourth item</li>
                                                   </ul> 
                                                  </div>
                                                  <div class="col-auto pr-0">
                                                    <h4 style="padding-top: 4%">28,000 PKR</h4>                                          
                                                  </div>
                                              </div>
                                        </div>                              
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <img class="img-fluid" src="p4.JPG" width="100%" height="100%">
                                              <div class="row">
                                                <div class="col-auto">
                                                  <ul style="text-align: left">
                                                    <li>First item</li>
                                                    <li>Second item</li>
                                                    <li>Third item</li>
                                                    <li>Fourth item</li>
                                                 </ul> 
                                                </div>                                            
                                                <div class="col-auto pr-0">
                                                  <h4 style="padding-top: 4%;">28,000 PKR</h4>                                          
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <img class="img-fluid" src="p5.JPG" width="100%" height="100%">
                                              <div class="row">
                                                <div class="col-auto">
                                                  <ul style="text-align: left">
                                                    <li>First item</li>
                                                    <li>Second item</li>
                                                    <li>Third item</li>
                                                    <li>Fourth item</li>
                                                 </ul> 
                                                </div>
                                                <div class="col-auto pr-0">
                                                  <h4 style="padding-top: 4%">28,000 PKR</h4>                                          
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <img class="img-fluid" src="p6.JPG" width="100%" height="100%">
                                            <div class="row">
                                                <div class="col-auto">
                                                  <ul style="text-align: left">
                                                    <li>First item</li>
                                                    <li>Second item</li>
                                                    <li>Third item</li>
                                                    <li>Fourth item</li>
                                                 </ul> 
                                                </div>
                                                <div class="col-auto pr-0">
                                                  <h4 style="padding-top: 4%">28,000 PKR</h4>                                          
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev" style="left: 0">
                                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next" style="right: 0">
                                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
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
                            <blockquote id="myquote">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit consectetur mollitia quos possimus illum doloribus.</blockquote>
                            <h3>Asad Rajput</h3>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>

@endsection

@section('css')
<style>
          .row {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -ms-flex-wrap: wrap;
              flex-wrap: wrap;
              margin-right: 0px;
              margin-left: 0px;
          }
          .upper-slider img {
          vertical-align: middle;
          border-style: none;
          height: 60vh;
            }
          h1, h2, h3, h4, h5, h6 {
          font-family: 'Raleway', sans-serif;

          }
          .hero-image {
          background-image: url("p2.jpg");
          background-color: #cccccc;
          height: auto;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
          }

          .trip h1{
          padding-top: 3%;
          }

          .hero-image p {
          color: white;
          }
          .card-body {
          -webkit-box-flex: 1;
          -ms-flex: 1 1 auto;
          flex: 1 1 auto;
          padding: 0px;
          }
          .card-body ul {
          list-style: none;
          }
          .card-body ul li {
          background: url(bullet1.png) no-repeat top left;
          background-position: 0 6.46px;
          line-height: 1.5625;
          padding: 0 0 4px 32px;
          margin-left: -2em;
          }
          h4{
          color: #598942;
          font-size: 22px;
          }
          ul{
          padding-top: 5%;
          }
          .list-group-item {
          position: relative;
          display: block;
          padding: .75rem 1.25rem;
          margin-bottom: 0px;
          background-color: #fff;
          line-height: 0;
          }
          .carousel-control-next {
          right: -90px;
          }
          .carousel-control-prev {
          left: -90px;
          }
          .container{
          padding: 0px ;
          }
        /*.trip div h1{
          line-height: 18vh;
          }*/
          .trip div p{
            font-size: 120%;
            /*    margin-top: 3%;*/
          }
          .title {
            text-align: center;
            font-weight: bold;
            color: #e6223d;
            padding-bottom: 28px;
            font-family: 'Great Vibes', cursive;
            font-size: 84px;
            letter-spacing: 6px

          }
        /*.title::after {
        content: '';
        background: #007bff;
        display: block;
        height: 3px;
        widows: 170px;
        margin: 20px auto 5px;
        }*/
      
        /* testimonial styling */
        .testimonials {
          margin: 50px auto;
          padding:0px;
        }
        .testimonials h1 {
          text-align: center;
          font-weight: bold;
          color: #e6223d;
          padding-bottom: 10px;
          font-size: 84px;
          letter-spacing: 6px;
          font-family: 'Great Vibes', cursive;
        }

        .testimonials h1::after {
          content: '';
          background: black;
          display: block;
          height: 1px;
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
          color: black;
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
        .nav-link{
          font-weight: bold;
        }
        @media (max-width: 768px) {
          .second-slider .carousel-inner .carousel-item > div {
            display: none;
          }
          .second-slider .carousel-inner .carousel-item > div:first-child {
            display: block;
          }
        }

        .second-slider .carousel-inner .carousel-item.active,
        .second-slider .carousel-inner .carousel-item-next,
        .second-slider .carousel-inner .carousel-item-prev {
          display: flex;
        }

        /* display 3 */
        @media (min-width: 768px) {
          
          .second-slider .carousel-inner .carousel-item-right.active,
          .second-slider .carousel-inner .carousel-item-next {
            transform: translateX(33.333%);
          }
          
          .second-slider .carousel-inner .carousel-item-left.active, 
          .second-slider .carousel-inner .carousel-item-prev {
            transform: translateX(-33.333%);
          }
        }

        .second-slider .carousel-inner .carousel-item-right,
        .second-slider .carousel-inner .carousel-item-left{ 
          transform: translateX(0);
        }

        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">

      </style>

@endsection

@section('js')
<script type="text/javascript">$('#recipeCarousel').carousel({
  interval: 10000
})

$('.second-slider .carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        
        next.children(':first-child').clone().appendTo($(this));
      }
});
</script>
@endsection
