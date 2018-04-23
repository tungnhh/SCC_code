<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
	<title>Source Code checker</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<base href="{{url('user')}}">
	<!--Data Table -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="shortcut icon" href="img/sccIcon.png">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="css/animate.css" rel="stylesheet" type="text/css"/>
	<!--js-->
	<script src="js/jquery-2.1.1.min.js"></script>
	<!--icons-css-->
	<link href="css/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
</head>
<body>
<div class="page-container sidebar-collapsed">
	<div class="left-content">
		<div class="mother-grid-inner">
			<!--header start here-->
			<div class="header-main">
				<div class="header-left">
					<div class="logo-name">
						<a href="index.html"> <h1>SCChecker</h1>
							<!--<img id="logo" src="" alt="Logo"/>-->
						</a>
					</div>
					<!--search-box-->
					<!--//end-search-box-->
					<div class="clearfix"> </div>
				</div>
				<div class="header-right">

					<!--notification menu end -->
					<div class="profile_details">
						<ul>
							<li class="dropdown profile_details_drop">
								@if(Auth::user()!==null)
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">
												<span class="prfil-img">
													@if(Auth::user()->image == null)
														<img style="border-radius: 50%;" width="42px" height="42px" src="img/p1.png" alt="">
													@else
														<img src="{{Auth::user()->image}}" alt="">
													@endif

												</span>
											<div class="user-name">
												<p>{{Auth::user()->name}}</p>
												<span>User</span>
											</div>
											<i class="fa fa-angle-down lnr"></i>
											<i class="fa fa-angle-up lnr"></i>
											<div class="clearfix"></div>
										</div>
									</a>
								@endif
								<ul class="dropdown-menu drp-mnu">

									<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
									<li> <a href="logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--heder end here-->
			<!-- script-for sticky-nav -->
			<script>
                $(document).ready(function() {
                    var navoffeset=$(".header-main").offset().top;
                    $(window).scroll(function(){
                        var scrollpos=$(window).scrollTop();
                        if(scrollpos >navoffeset){
                            $(".header-main").addClass("fixed");
                        }else{
                            $(".header-main").removeClass("fixed");
                        }
                    });

                });
			</script>
			<!-- /script-for sticky-nav -->
			<!--inner block start here-->
			<div class="inner-block" style="min-height:900px">


				<!-- Main Here -->
				@yield('main')


			</div> <!-- inner block -->
			<!--inner block end here-->
			<!--copy rights start here-->
			<div class="copyrights">
				<p>© 2018 Source Code Checker. All Rights Reserved
			</div>
			<!--COPY rights end here-->
		</div>
	</div>
	<!--slider menu-->
	<div class="sidebar-menu">
		<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
				<!--<img id="logo" src="" alt="Logo"/>-->
			</a> </div>
		<div class="menu">
			<ul id="menu" >
				<li id="menu-image"><a href=""><span><img src="images/p1.png" alt=""></span></a></li>
				<li><a href="">

						<span style="color:orange">Malorum</span> <br>
						<span style="color:gray">User</span>
						<hr>

					</a></li>




				<li id="menu-home" ><a href="{{url('dashboard')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
				<li><a style="font-size:12px;" href="{{ url('users/subject/list') }}"><i class="fa fa-book"></i><span>Source Code Management</span></a></li>

				<li id="menu-comunicacao" ><a href="{{ url('users/compare') }}"><i class="fa fa-balance-scale"></i><span>Compare</span></a></li>


				<li id="menu-academico" ><a href="{{ url('users/report') }}"><i class="fa fa-clipboard"></i></i><span>Report</span></a></li>



			</ul>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
    var toggle = false;

    $(".sidebar-icon").click(function() {
        if (toggle)
        {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position":"absolute"});
        }
        else
        {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({"position":"relative"});
            }, 400);
        }
        toggle = !toggle;
    });
</script>
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<script src="js/custom-file-input.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<!-- mother grid end here-->
</body>
</html>                     