@extends('user/welcome')

    @section('main')
    <div id="content-block">
		
	
		<div class="head-bg">
				<div class="head-bg-img"></div>
				<div class="head-bg-content">
					<h1>projet</h1>
					<a class="be-register btn color-3 size-1 hover-6"><i class="fa fa-lock"></i>sign up now</a>
				</div>	
			</div>
					
			<div class="container-fluid custom-container">
				<div class="row">
					
									
					<div class="col-md-10">
						<div class="row _post-container_">
							<div class="custom-column-5">
								<div class="be-post">
									<a href="{{route('profile') }} " class="be-img-block">
									<img src="{{ asset ('user/img/p1.jpg') }}" alt="omg">
									</a>
									<a href="{{route('profile') }} " class="be-post-title">The kitsch destruction of our world</a>
									<span>
										<a href="{{route('profile') }} " class="be-post-tag">Interaction Design</a>, 
										<a href="{{route('profile') }} " class="be-post-tag">UI/UX</a>,  
										<a href="{{route('profile') }} " class="be-post-tag">Web Design</a>
									</span>
									<div class="author-post">
										<img src="img/a1.png" alt="" class="ava-author">
										<span>by <a href="{{route('profile') }} ">Hoang Nguyen</a></span>
									</div>
									<div class="info-block">
										<span><i class="fa fa-thumbs-o-up"></i> 360</span>
										<span><i class="fa fa-eye"></i> 789</span>
										<span><i class="fa fa-comment-o"></i> 20</span>
									</div>
								</div>
							</div>
						</div>
					</div>
	
				</div>
			</div>
			</div>
    @endsection