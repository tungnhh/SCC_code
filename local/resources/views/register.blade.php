<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng kí</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
    <!--icons-css-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <header>
        <nav class="navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{url('/login')}}">Log In</a></li>
                        <li><a href="{{url('/register')}}">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3">
                    <h2>Join as a SCC Member</h2>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form role="form" action="register" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="control-label">Name (<span style="color: red">*</span>):</label>
                                    <input type="text" class="form-control" placeholder="Enter your name" name="name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="control-label">Email Address(<span style="color: red">*</span>):</label>
                                    <input type="email" class="form-control" placeholder="Enter your email address" name="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="control-label">Password(<span style="color: red">*</span>):</label>
                                    <input type="password" class="form-control" placeholder="Enter your password" name="password" >
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('passwordAgain') ? ' has-error' : '' }}">
                                    <label class="control-label">Confirm Password(<span style="color: red">*</span>):</label>
                                    <input type="password" class="form-control" placeholder="Enter your password" name="passwordAgain">
                                    @if ($errors->has('passwordAgain'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('passwordAgain') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Phone Number:</label>
                                    <input type="tel" class="form-control" placeholder="Enter your phone number" name="phone">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Workplace:</label>
                                    <input type="text" class="form-control" placeholder="Enter your workplace" name="place">
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date Of Birth </label>
                                    <input type="date" name="dob" id="dob" class="form-control" >
                                    <span id="error_dob" class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="submit"></label>
                                    <div class="col-md-5 ">
                                        <a href="{{url('/login')}}" id="cancel" name="cancel" class="btn btn-danger">Cancel</a>
                                        <button id="submit" name="submit" class="btn btn-primary" value="1">Sign Up</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <p class="text-center">
                Copyright &copy; 2018 | All Right Reserved
            </p>
        </div>
    </footer>
</div>
<script src="{{asset('js/bootstrap.js')}}"> </script>
</body>
</html>