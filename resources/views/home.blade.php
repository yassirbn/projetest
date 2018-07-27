<!DOCTYPE html>
<html>
	<head>
		@include('user/layouts/head')
	    
	</head>
	<body>

	<!-- THE LOADER -->

	<div class="be-loader">
	    	<div class="spinner">
				<div class="spinner-container container1">
			    <div class="circle1"></div>
			    <div class="circle2"></div>
			    <div class="circle3"></div>
			    <div class="circle4"></div>
				</div>
			  	<div class="spinner-container container2">
			    <div class="circle1"></div>
			    <div class="circle2"></div>
			    <div class="circle3"></div>
			    <div class="circle4"></div>
			  	</div>
			  	<div class="spinner-container container3">
			    <div class="circle1"></div>
			    <div class="circle2"></div>
			    <div class="circle3"></div>
			    <div class="circle4"></div>
  				</div>
			</div>
	    </div>
	<!-- THE HEADER -->
	<header>
		@include('user/layouts/header')
	</header>
		
	<!-- MAIN CONTENT -->
	<div id="content-block">
		
	
		<div class="head-bg">
				<div class="head-bg-content">
					<h1>projet</h1>
					
				</div>	
		</div>
					
			<div class="container-fluid custom-container">
				<div class="row">
					@foreach($user as $users)
									
					<div class="col-md-10">
						<div class="row _post-container_">
							<div class="custom-column-5">
								<div class="be-post">
									<a href="{{route('profile') }} " class="be-img-block">
									<img src="{{ asset ('user/img/p1.jpg') }}" alt="omg">
									</a>
									<a href="{{route('profile') }} " class="be-post-title">{{$users->name}}</a>
									<span>
										<a href="{{route('profile') }} " class="be-post-tag">{{$users->email}}</a>, 
										<a href="{{route('profile') }} " class="be-post-tag"></a> 
										<a href="{{route('profile') }} " class="be-post-tag"></a>
									</span>
									
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
	</div>
	
	<!-- THE FOOTER -->
	<footer>
		@include('user/layouts/footer')		
	</footer>
	<!-- SCRIPTS	 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{	asset('user/script/bootstrap.min.js')}}"></script>		
	<script src="{{	asset('user/script/idangerous.swiper.min.js')}}"></script>
	<script src="{{	asset('user/script/isotope.pkgd.min.js')}}"></script>
	<script src="{{	asset('user/script/jquery.viewportchecker.min.js')}}"></script>		
	<script src="{{	asset('user/script/global.js')}}"></script>	
	</body>
</html>