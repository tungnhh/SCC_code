<!DOCTYPE HTML>
<html>
<head>
<title>Source Code checker</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- Custom Theme files --> 
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script>
<!--icons-css-->
<link href="css/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->


</head>
<body>	
<div class="page-container">	
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
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p>Malorum</p>
													<span>User</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
				if(scrollpos >=navoffeset){
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
    <div id="upFile" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">


                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-tv"></i> From Computer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fab fa-google-drive"></i> Google Drive</a>
                        </li>
                </ul>
                <!--Computer-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">File upload form</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Form -->
                        <form action="upload"    method="post"  enctype="multipart/form-data">
                            Select file : <input type="file" name="file[]" id="file" class="form-control" accept=".zip" multiple ><br>
                            <input type="button" class="btn btn-info" value="Upload" id="upload">
                        </form>

                        <!-- Preview-->
                        <div id="message"></div>

                        <script>
                            var form = document.getElementById('upload');
                            var request = new XMLHttpRequest();

                            form.addEventListener('submit', function(e){
                                e.preventDefault();
                                var formdata = new FormData(form);

                                request.open('post', '/upload');
                                request.addEventListener("load", transferComplete);
                                request.send(formdata);

                            });

                            function transferComplete(data){
                                response = JSON.parse(data.currentTarget.response);
                                if(response.success){
                                    document.getElementById('message').innerHTML = "Successfully Uploaded Files!";
                                }
                            }
                        </script>
                    </div>

                </div>
                <!--Computer-->
                </div>

             </div>
    </div>


    </div>
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
		        <li><a href="#"><i class="fa fa-book"></i><span>Subject</span></a></li>

		        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-balance-scale"></i><span>Compare</span></a></li>

		        
		        <li id="menu-academico" ><a href="#"><i class="fa fa-clipboard"></i></i><span>Report</span></a></li>
		        
		       
		     
		      </ul>
		    </div>
	 </div>

    <div class="clearfix"> </div>
    <a  class="btn btn-info btn-lg" data-toggle="modal" data-target="#upFile">
        <div class="add_fixed">
            <div class="add-phone">
                <div class="animated infinite pulse add-ph-circle-fill"></div>
                <div class="animated infinite tada add-ph-img-circle"></div>
            </div>

        </div>
    </a>



</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
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
<!-- mother grid end here-->

<script>
</body>
</html>                     