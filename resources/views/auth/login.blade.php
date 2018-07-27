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
	
		
	<!-- MAIN CONTENT -->
		@section('main')
            @show


            <div></div>
            <div>



            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a href="{{ route('register') }}" class="btn btn-primary">
                                    Register
                                </a>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                    </div>
	<!-- THE FOOTER -->
	<footer>
		@include('user/layouts/footer')		
	</footer>

	<div class="be-fixed-filter"></div>
	
	


	<!-- SCRIPTS	 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{	asset('user/script/bootstrap.min.js')}}"></script>		
	<script src="{{	asset('user/script/idangerous.swiper.min.js')}}"></script>
	<script src="{{	asset('user/script/isotope.pkgd.min.js')}}"></script>
	<script src="{{	asset('user/script/jquery.viewportchecker.min.js')}}"></script>		
	<script src="{{	asset('user/script/global.js')}}"></script>	
	</body>
</html>

