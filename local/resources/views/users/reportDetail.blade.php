<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
<title>Source Code checker</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<style>
table#t02 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;

}

#t02 th,#t02  td {
    border: 1px solid #ddd;
    padding: 8px;
}

#t02 tr:nth-child(even){background-color: #f2f2f2;}
#t02 tr:hover {background-color: #ddd;}

#t02 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}



.ex3 {
    background-color: white;
    border: 3px solid white;
	position: relative;
 	border-radius: 5px;
	margin-top: 7%;
	margin-left: 7%;
	padding: 25px;
    width: 500px;
    height: 500px;
    overflow: auto;
    
}


.dialog{
	display: none;
	background-color: #6b6161;
	position:fixed;
	border-radius: 1%;
	top: 3%;
	left: 12%;
	width: 80%;
	height: 93%;
}

.Close{
	float: right;
	margin-right: 20px;
	margin-top: 10px;
	cursor: pointer;
	font-weight: bold;
	color:white;
}

.button-save{
	margin-left: 85%;
	margin-top: 5%;
}

table#t01{
	width: 90%;
}

table#t01 td{
	width: 40%;
}

b{
	margin-left: 9%;

	color: #85e021;
}


::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(255, 152, 0, 0.93); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(255, 152, 0, 0.93); 
}



</style>






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
@if($Report_Color[0] != null)


@for($i = 0; $i< count($Report_Color[0]); $i++)
	
	
<div class="dialog" id="tr{{$i}}">	
	<div class="Close">X</div>
	<table id="t01">
		<tr>
	@for($j = 0; $j < count($Report_Color[0][$i]); $j++)
		
		@if($j == 0)
		<td>
			<b>{{$Report_Color[0][$i][$j][0]}}</b>
			<div class="ex3">
			
				@for($k = 0; $k < count($Report_Color[0][$i][$j][2]); $k++)
					@if($Report_Color[0][$i][$j][2][$k][1] > 0)
						<span class="match1" id="match{{$Report_Color[0][$i][$j][2][$k][1]}}" style="white-space: pre-line; color:{{$Report_Color[1][$Report_Color[0][$i][$j][2][$k][1]]}};"> {{$Report_Color[0][$i][$j][2][$k][0]}}  </span>
					@else
						<span style="white-space: pre-line; color:black;"> {{$Report_Color[0][$i][$j][2][$k][0]}}  </span>
					@endif
				@endfor
			</div>
		</td>
		@endif
		
		@if($j == 1)
		<td>
			<b>{{$Report_Color[0][$i][$j][0]}}</b>
			<div class="ex3 text2">
			
				@for($k = 0; $k < count($Report_Color[0][$i][$j][2]); $k++)
					@if($Report_Color[0][$i][$j][2][$k][1] > 0)
						<span class="match2" id="match{{$Report_Color[0][$i][$j][2][$k][1]}}" style="white-space: pre-line; color:{{$Report_Color[1][$Report_Color[0][$i][$j][2][$k][1]]}};"> {{$Report_Color[0][$i][$j][2][$k][0]}}  </span>
					@else
						<span style="white-space: pre-line; color:black;"> {{$Report_Color[0][$i][$j][2][$k][0]}}  </span>	
					@endif

				@endfor

			</div>
		</td>	
	
		@endif

		


	@endfor
			</tr>
	</table>
	
</div>	
@endfor


<table id="t02">
	<tr>
		<th>Student 1</th>
		<th>Student 2</th>
		<th>Result 1 (Student 1 - Student 2)</th>
		<th>Result 2 (Student 2 - Student 1)</th>
	</tr>

@for($i = 0; $i< count($Report_Color[0]); $i++)
	<tr id="tr{{$i}}" class="rowtable">
	
	@for($j = 0; $j < count($Report_Color[0][$i]); $j++)
	


	<td>{{$Report_Color[0][$i][$j][0]}}</td>  <!-- print student ID -->
	
	@endfor
	
	@for($j = 0; $j < count($Report_Color[0][$i]); $j++)

	@if($Report_Color[0][$i][$j][1] > 95)

	<td style="color:red">{{$Report_Color[0][$i][$j][1]}}%</td>  <!-- print result1 and result 2 -->
	@else
	<td style="color:black">{{$Report_Color[0][$i][$j][1]}}%</td>  <!-- print result1 and result 2 -->
	@endif

	@endfor

	</tr>

@endfor

</table>


<div class="button-save">
	<input type="submit" class="btn btn-success" value="Save Report">
</div>
@else
<table id="t02">
	<tr>
		<th>Student 1</th>
		<th>Student 2</th>
		<th>Result 1 (Student 1 - Student 2)</th>
		<th>Result 2 (Student 2 - Student 1)</th>
	</tr>

	<tr>
		<td></td>
		<td><i style="color:green;">Don't found student exam matches!</i></td>
		<td></td>
		<td></td>
	</tr>


</table>

@endif





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

			
			
	
		        <li id="menu-home" ><a href="index.html"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a style="font-size:12px;" href="{{ url('subject') }}"><i class="fa fa-book"></i><span>Source Code Management</span></a></li>

		        <li id="menu-comunicacao" ><a href="{{ url('compare') }}"><i class="fa fa-balance-scale"></i><span>Compare</span></a></li>

		        
		        <li id="menu-academico" ><a href="{{ url('report') }}"><i class="fa fa-clipboard"></i></i><span>Report</span></a></li>
		        
		       
		     
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
<script>
	var selected;
	$(".rowtable").click(function(){
		selected = this.id;
		$("#"+selected).fadeIn();
	});

	$(".Close").click(function(){
		$("#"+selected).fadeOut();

	});

	$(".match1").click(function(){
		var matchSelect = this.id;
		
	// $('.ex3.text2').animate({
 //    scrollTop: $("#match"+matchSelect).offset().top
 //    }, 300);
 

 	// $('.ex3.text2').scrollTo('#match'+matchSelect,800);

 	$('.ex3.text2').scrollTo(".match2#"+matchSelect,800,{over:{left:-0.1, top:0}});


 	

	});

	$(".match2").click(function(){
		var matchSelect = this.id;
		
	// $('.ex3.text2').animate({
 //    scrollTop: $("#match"+matchSelect).offset().top
 //    }, 300);
 

 	// $('.ex3.text2').scrollTo('#match'+matchSelect,800);

 	$('.ex3').scrollTo(".match1#"+matchSelect,800,{over:{left:-0.1, top:0}});


 	

	});


</script>

</body>
</html>                     