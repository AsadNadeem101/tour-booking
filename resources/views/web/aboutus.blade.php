@extends('layouts.website_layout')

@section('content')
<h2 class="head-ding">About Us</h2>
    <h3 class="head-ding3">About Yaadgar Trip</h2>
    <p class="text-justify px-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed officiis nemo aliquid minus provident omnis magni quaerat placeat quia iste reprehenderit officia quae corrupti doloremque, nobis a perferendis? Temporibus, natus!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed officiis nemo aliquid minus provident omnis magni quaerat placeat quia iste reprehenderit officia quae corrupti doloremque, nobis a perferendis? Temporibus, natus!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed officiis nemo aliquid minus provident omnis magni quaerat placeat quia iste reprehenderit officia quae corrupti doloremque, nobis a perferendis? Temporibus, natus!</p>
    <section class="team">
      <div class="container">
        <h3 class="head-ding3">Our Team</h2>
          <div class="row">
            <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="a.jpg" class="img-fluid" alt="Responsive image">
                  <ul>
                    <a href=""><li><i class="fab fa-facebook-f"></i></li></a>
                    <a href=""><li><i class="fab fa-instagram"></i></li></a>
                  </ul>
              </div>
              <h2>Dr Strange</h2>
              <h3>Founder / CEO</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, labore.</p>
            </div>
            <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="j.jpg" class="img-fluid" alt="Responsive image">
                  <ul>
                    <a href=""><li><i class="fab fa-facebook-f"></i></li></a>
                    <a href=""><li><i class="fab fa-instagram"></i></li></a>
                  </ul>
              </div>
              <h2>Dr Strange</h2>
              <h3>Founder / CEO</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, labore.</p>
            </div>
            <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="s.jpg" class="img-fluid" alt="Responsive image">
                  <ul>
                    <a href=""><li><i class="fab fa-facebook-f"></i></li></a>
                    <a href=""><li><i class="fab fa-instagram"></i></li></a>
                  </ul>
              </div>
              <h2>Dr Strange</h2>
              <h3>Founder / CEO</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, labore.</p>
            </div>
            <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="u.jpg" class="img-fluid" alt="Responsive image">
                  <ul>
                    <a href=""><li><i class="fab fa-facebook-f"></i></li></a>
                    <a href=""><li><i class="fab fa-instagram"></i></li></a>
                  </ul>
              </div>
              <h2>Dr Strange</h2>
              <h3>Founder / CEO</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, labore.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="a.jpg" class="img-fluid" alt="Responsive image">
                  <ul>
                    <a href=""><li><i class="fab fa-facebook-f"></i></li></a>
                    <a href=""><li><i class="fab fa-instagram"></i></li></a>
                  </ul>
              </div>
              <h2>Dr Strange</h2>
              <h3>Founder / CEO</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, labore.</p>
            </div>
            <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="j.jpg" class="img-fluid" alt="Responsive image">
                  <ul>
                    <a href=""><li><i class="fab fa-facebook-f"></i></li></a>
                    <a href=""><li><i class="fab fa-instagram"></i></li></a>
                  </ul>
              </div>
              <h2>Dr Strange</h2>
              <h3>Founder / CEO</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, labore.</p>
            </div>
            <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="s.jpg" class="img-fluid" alt="Responsive image">
                  <ul>
                    <a href=""><li><i class="fab fa-facebook-f"></i></li></a>
                    <a href=""><li><i class="fab fa-instagram"></i></li></a>
                  </ul>
              </div>
              <h2>Dr Strange</h2>
              <h3>Founder / CEO</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, labore.</p>
            </div>
            <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="u.jpg" class="img-fluid" alt="Responsive image">
                  <ul>
                    <a href=""><li><i class="fab fa-facebook-f"></i></li></a>
                    <a href=""><li><i class="fab fa-instagram"></i></li></a>
                  </ul>
              </div>
              <h2>Dr Strange</h2>
              <h3>Founder / CEO</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, labore.</p>
            </div>
          </div>    
      </div>
    </section>

@endsection

@section('css')
<style type="text/css">
.head-ding {
	padding-top: 3%;
	text-align: center;
	font-family: 'Great Vibes', cursive;
	font-weight: 900;
	font-size: 5rem;
	background-color: #e0ffff;
	padding-bottom: 3%;
}
.head-ding3 {
	text-align: center;
	padding-top: 1.5%;
	padding-left: 1.5%;
	padding-right: 1.5%;
	font-family: 'Great Vibes', cursive;
	letter-spacing: 3px;
	font-weight: 900;
	font-size: 3.5rem;
	color: #e6223d;
	padding-bottom: 1.5%;
}
p {
	padding-left: 1.5%;
}
.profile {
	padding-top: 1.5%;
	padding-bottom: 1.5%;
}
.profile .img-box {
	opacity: 1;
	display: block;
	position: relative;
}
.profile h2 {
	font-size: 22px;
	font-weight: bold;
	margin-top: 15px;
}
.profile h3 {
	font-size: 15px;
	font-weight: bold;
	margin-top: 15px;
}
.img-box:after {
	content: '';
	opacity: 0;
	background-color: rgba(0, 0, 0, 0.6);
	position: absolute;
	right: 0;
	left: 0;
	top: 0;
	bottom: 0;
}
.img-box ul {
	margin: 0;
	padding: 20px 0;
	position: absolute;
	z-index: 1;
	bottom: 0;
	display: block;
	left: 50%;
	transform: translateX(-50%);
	opacity: 0;
}
.img-box ul li {
	width: 30px;
	height: 30px;
	margin: 3px;
	padding: 7px;
	display: inline-block;
}
.img-box a {
	color: #fff;
}
.img-box:hover:after {
	opacity: 1;
}
.img-box:hover ul {
	opacity: 1;
}
.img-box a:hover li {
	color: #007bff;
}
.img-box:after,
.img-box ul,
.img-box ul li {
	transition: all 0.5s ease-in-out 0s;
}
</style>
@endsection