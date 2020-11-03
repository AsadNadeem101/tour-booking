@extends('layouts.website_layout')

@section('content')
<div class="container-fluid">
	<div class="row">
	  	<div class="col-md-3"></div>
	 	<div class="col-md-6 text-center my-4"><h1>Make Your Customized Trip</h1></div> 
	 	<div class="col-md-3"></div>
	</div>
	<br>
	<form >
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 px-md-0 px-sm-5"><h4>Contact Details</h4></div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-2 col-sm-12 px-md-0 px-sm-5 input-box1">
		  	  <div class="form-group">
			    <label for="name">YOUR FULL NAME</label>
			    <input type="text" class="form-control" placeholder="Enter name" id="name">
			  </div>
			</div>  
			<div class="col-md-2 col-sm-12 px-md-1 px-sm-5 input-box1">
		  		<div class="form-group">
		   		 <label for="email">YOUR EMAIL</label>
		    	 <input type="email" class="form-control" placeholder="Enter email" id="email">
		   		 </div>
		   	</div>
		   	<div class="col-md-2 col-sm-12 px-md-0 px-sm-5 input-box1"> 
		   		<div class="form-group">	   		
		    	 <label for="mobile">YOUR MOBILE</label>
		   		 <input type="text" class="form-control" placeholder="Enter number" id="mobile">
		   		</div>
		    </div>
		    <div class="col-md-3"></div>
		</div> 
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 px-md-0 px-sm-5"><hr id="myhr"></div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 px-md-0 px-sm-5"><h4>Number of Travellers</h4></div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-2 col-sm-12 px-md-0 px-sm-4 input-box1">
		  	  <div class="form-group">
			    <label for="name">HOW MANY ADULTS?</label>
			    	 <div class="input-group-prepend">
						    <button class="input-group plus-minus-btn" type="button" onclick="onClickIncrement()"><span class="px-md-1 py-md-1">+</span></button>
						    <input type="text" class="form-control my-radius" id="adults">
						    <button class="input-group plus-minus-btn" type="button" onclick="onClickDecrement()"><span class="px-md-1 py-md-1">-</span></button>
					 </div>
			  </div>
			</div>  
			<div class="col-md-2 col-sm-12 px-md-1 px-sm-4 input-box1">
		  		<div class="form-group">
		   		 <label for="email">HOW MANY CHILDREN?</label>
		   		 	<div class="input-group-prepend">
		   		 		<button class="input-group plus-minus-btn" type="button" onclick="onClickIncrement1()"><span class="px-md-1 py-md-1">+</span></button>
		    	 		<input type="text" class="form-control my-radius" type="button" id="children">
		    	 		<button class="input-group plus-minus-btn" type="button" onclick="onClickDecrement1()"><span class="px-md-1 py-md-1">-</span></button>
		    	 	</div>
		   		</div>
		   	</div>
		   	<div class="col-md-2 col-sm-12 px-md-0 px-sm-4 input-box1"> 
		   		<div class="form-group">	   		
		    	 <label for="mobile">HOW MANY ROOM REQUIRED?</label>
		    	 	<div class="input-group-prepend">
				    	 <button class="input-group plus-minus-btn" type="button" onclick="onClickIncrement2()"><span class="px-md-1 py-md-1">+</span></button>
				   		 <input type="text" class="form-control my-radius" id="rooms">
				   		 <button class="input-group plus-minus-btn" type="button" onclick="onClickDecrement2()"><span class="px-md-1 py-md-1">-</span></button>
				   	</div>	 
		   		</div>
		    </div>
		    <div class="col-md-3"></div>
		</div> 
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 px-md-0 px-sm-5"><hr id="myhr"></div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 px-md-0 px-sm-5"><h4>When would you like to go?</h4></div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-3 col-sm-12 px-md-0 px-sm-5 input-box1">
		  	 	<div class="form-group">
			   		<label for="name">DEPARTURE CITY</label>
			    	<input type="text" class="form-control" id="Departure_city" placeholder="Please Enter Departure City" id="Departure_city">
			   	</div>
			  	<div class="form-check-inline">
	  				<label class="form-check-label">
	    			 	<input type="checkbox" class="form-check-input" value="">MY DATE IS SOMEWHAT FLEXIBLE
	  				</label>
				</div>
			</div>  
			<div class="col-md-3 col-sm-12 px-md-1 px-sm-5 input-box1">
		  		<div class="form-group">
		   				<label for="date">DATE</label>
		    				<input type="date" class="form-control" id="date">
		   		</div>			   	
		   	</div>
		    <div class="col-md-3"></div>
		</div>  
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 px-md-0 px-sm-5"><hr id="myhr"></div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 px-md-0 px-sm-5"><h4>Additional Requirements</h4></div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-3 col-sm-12 px-md-0 px-sm-5 input-box1">
		  	 	<div class="form-group">
			   		<label for="name">TRIP TYPE</label>
						  <select class="form-control" id="select1">
						    <option>Select Trip Type</option>
						    <option>Adventure</option>
						    <option>Sightseeing</option>
						    <option>Adventrue+Sightseeing</option>
						    <option>Honeymoon</option>
						    <option>School Trip</option>
						    <option>Coperate Trip</option>
						  </select>
			   	</div>
			   	<div class="form-group">
			    <label for="name">NO. OF DAYS</label>
			    	 <div class="input-group-prepend" style="width: 65%">
						    <button class="input-group plus-minus-btn" type="button" onclick="onClickIncrement3()"><span class="px-md-1 py-md-1">+</span></button>
						    <input type="text" class="form-control my-radius" id="days">
						    <button class="input-group plus-minus-btn" type="button" onclick="onClickDecrement3()"><span class="px-md-1 py-md-1">-</span></button>
					 </div>
			  </div>
			  	<div class="form-check-inline">
	  				<label class="form-check-label">
	    			 	<input type="checkbox" class="form-check-input" value="">MY TOUR DURATION IS SOMEWHAT FLEXIBLE
	  				</label>
				</div>
			</div>  
			<div class="col-md-3 col-sm-12 px-md-1 px-sm-5 input-box1">
		  		<div class="form-group">
		   				<label for="date">LOCATION</label>
		    				<select class="form-control selectpicker" multiple data-live-search="true">
							  <option>SKARDU</option>
							  <option>HUNZA</option>
							  <option>FAIRY MEADOWS</option>
							</select>
		   		</div>			   	
		   	</div>
		    <div class="col-md-3"></div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 px-md-0 px-sm-5"><hr id="myhr"></div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 px-md-0 px-sm-5"><h4>Please share further details/preferences?</h4></div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 col-md-3 col-sm-12 px-md-0 px-sm-5"> 
				<div class="form-group">
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  				</div>
  			</div>
  			<div class="col-md-3"></div>	
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 px-md-0 px-sm-5"><hr id="myhr"></div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 px-md-0 px-sm-5" align="center"><button class="btn btn-primary" style="width: 40%; height: 130%">NEXT</button></div>
			<div class="col-md-3"></div>
		</div>

	</form>
</div>
<br>	
@endsection
@section('css')
 <style>
 	.input-box1
 	{
 		padding: 0.16%;
 		margin: 0px;
 		width: 100%;
 	}
 	#myhr{
  	border-top: 0.1px dashed black;
	}
	.plus-minus-btn
	{
		width: 10%; 
		border: none;
		color: white;
		text-align: center;
		font-weight: bold;
		background: #007bff;
	}
	.my-radius
	{
		border-radius: 0px;
	}
	label{
		font-weight: 500;
	}
	.bootstrap-select .dropdown-toggle .filter-option {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    text-align: left;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    color: #495057;
	}
	.bootstrap-select > .dropdown-toggle.bs-placeholder, .bootstrap-select > .dropdown-toggle.bs-placeholder:hover, .bootstrap-select > .dropdown-toggle.bs-placeholder:focus, .bootstrap-select > .dropdown-toggle.bs-placeholder:active {
    background-color: #fff; 
    color: #495057;
    height: 105%;
    top: -1px;
	}
 </style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endsection

@section('js')
 	<script type="text/javascript">
	 	let adults = document.getElementById('adults');
	 	adults.value="1";
	 	adults.style.textAlign="center";
	 	adults.style.fontWeight="bold";
	 	let number_adults = parseInt(adults.value);
	 	console.log(number_adults);

	 	let onClickDecrement = () =>
	 	{
	 		if(number_adults>=1)
	 		{
	 			number_adults-=1;
	 			adults.value=number_adults;
	 		}
	 		else
	 		{
	 			adults.value=0;
	 		}
	 	}
	 	let onClickIncrement = () =>
	 	{
	 		if(number_adults<=9)
	 		{
	 			number_adults+=1;
	 			adults.value=number_adults;
	 		}
	 		else
	 		{
	 			adults.value=10;
	 		}
	 	}
 	</script>
	<script type="text/javascript">
	 	let children = document.getElementById('children');
	 	children.value="1";
	 	children.style.textAlign="center";
	 	children.style.fontWeight="bold";
	 	let number_child = parseInt(children.value);
	 	console.log(number_child);

	 	let onClickDecrement1 = () =>
	 	{
	 		if(number_child>=1)
	 		{
	 			number_child-=1;
	 			children.value=number_child;
	 		}
	 		else
	 		{
	 			children.value=0;
	 		}
	 	}
	 	let onClickIncrement1 = () =>
	 	{
	 		if(number_child<=9)
	 		{
	 			number_child+=1;
	 			children.value=number_child;
	 		}
	 		else
	 		{
	 			children.value=10;
	 		}
	 	}
	</script>
   	<script type="text/javascript">
	 	let rooms = document.getElementById('rooms');
	 	rooms.value="1";
	 	rooms.style.textAlign="center";
	 	rooms.style.fontWeight="bold";
	 	let number_room = parseInt(rooms.value);
	 	console.log(number_room);

	 	let onClickDecrement2 = () =>
	 	{
	 		if(number_room>=1)
	 		{
	 			number_room-=1;
	 			rooms.value=number_room;
	 		}
	 		else
	 		{
	 			rooms.value=0;
	 		}
	 	}
	 	let onClickIncrement2 = () =>
	 	{
	 		if(number_room<=9)
	 		{
	 			number_room+=1;
	 			rooms.value=number_room;
	 		}
	 		else
	 		{
	 			rooms.value=10;
	 		}
	 	}
 	</script>
 	<script type="text/javascript">
	 	let days = document.getElementById('days');
	 	days.value="1";
	 	days.style.textAlign="center";
	 	days.style.fontWeight="bold";
	 	let number_days = parseInt(days.value);
	 	console.log(number_days);

	 	let onClickDecrement3 = () =>
	 	{
	 		if(number_days>=1)
	 		{
	 			number_days-=1;
	 			days.value=number_days;
	 		}
	 		else
	 		{
	 			days.value=0;
	 		}
	 	}
	 	let onClickIncrement3 = () =>
	 	{
	 		if(number_days<=9)
	 		{
	 			number_days+=1;
	 			days.value=number_days;
	 		}
	 		else
	 		{
	 			days.value=10;
	 		}
	 	}
 	</script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@endsection