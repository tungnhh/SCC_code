<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
<!--icons-css-->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">

</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Login</h1>
			</div>
			<div class="login-block">
				<form action="{{url('login')}}" method="POST">
                    @if($errors->has('errorlogin'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{$errors->first('errorlogin')}}
                        </div>
                    @endif
					<input type="text" name="email" placeholder="Email" value="{{old('email')}}" >
					@if($errors->has('email'))
						<p  style="color:red; padding-bottom: 10px">{{$errors->first('email')}}</p>
					@endif
					<input type="password" name="password" class="lock" placeholder="Password">
					@if($errors->has('password'))
						<p style="color:red ">{{$errors->first('password')}}</p>
					@endif
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>Remember me</label>
								</li>
							</ul>
						</div>
						<div class="forgot">
							<a href="#">Forgot password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					{!! csrf_field() !!}

					<button type="submit" class="btn btn-primary">Đăng nhập</button>
					<h3>Not a member?<a href="signup.html"> Sign up now</a></h3>
					<h2>or login with</h2>
					<div class="login-icons">
						<ul>
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>						
						</ul>
					</div>
				</form>
				<h5><a href="index.html">Go Back to Home</a></h5>
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2018 Source Code Checker. All Rights Reserved | Design by  <a href="" target="_blank">Source Code Checker</a> </p>
</div>		
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
		<script src="{{asset('js/scripts.js')}}"></script>
		<!--//scrolling js-->
<script src="{{asset('js/bootstrap.js')}}"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
