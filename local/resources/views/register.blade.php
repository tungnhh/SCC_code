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
                            <form role="form" action="#">
                                <div class="form-group">
                                    <label class="control-label">Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email Address:</label>
                                    <input type="email" class="form-control" placeholder="Enter your email address">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password:</label>
                                    <input type="password" class="form-control" placeholder="Enter your password">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Confirm Password:</label>
                                    <input type="password" class="form-control" placeholder="Enter your password">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Phone Number:</label>
                                    <input type="tel" class="form-control" placeholder="Enter your phone number">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Workplace:</label>
                                    <input type="email" class="form-control" placeholder="Enter your workplace">
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date Of Birth </label>
                                    <input type="date" name="dob" id="dob" class="form-control">
                                    <span id="error_dob" class="text-danger"></span>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Register</button>
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