	

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="shortcut icon" href="https://cdn2.iconfinder.com/data/icons/mixed-rounded-flat-icon/512/briefcase-128.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Job Seeker Ai Project</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<style type="text/css">
				.back-to-top {
    cursor: pointer;
    position: fixed;
    bottom: 20px;
    right: 20px;
    display:none;
}

			</style>
		</head>
		<body>
			@if(Auth::check())

			@if(Auth::check())
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="/"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="/">Home</a></li>
				          
				         <li><a href="/uploadfile">My Profile</a></li>
				         
				          <li class="menu-has-children"><a href="#"> <div class="pull-left">

				  @if(Session::get('upload')==1)
                       
 <img src="/upload/{{Auth::user()->pic_path}}" class="rounded-circle" width="50px"height="50px"alt="User Image">
                     
                        @endif
                      </div>	</a>
				            <ul>
								
								
									
 			<div class="pull-right">
                         
         	<a href="route('logout')" class="btn btn-info"

        	onclick="event.preventDefault();

          	document.getElementById('logout-form').submit();">  {{__('Logout') }}</a>
          	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>         
          </div>


				
				            </ul>
				          </li>
				          
				        </ul>


				      </nav><!-- #nav-menu-container -->		    		
			    	</div>

				        
			    </div>


			  </header>

			@else
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="/"><img src="https://cdn2.iconfinder.com/data/icons/mixed-rounded-flat-icon/512/briefcase-128.png" alt="" title=""width="60" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          
				          <li><a class="ticker-btn" href="/jobseeker-reg">Signup</a></li>
				          <li><a class="ticker-btn" href="{{ route('login') }}">Login</a></li>

				          	
									<li><a class="ticker-btn" href="/jobowner-reg">+Job Create</a></li>			          				          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
			<!-- start banner Area -->
			@endif
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
			
					
						
						<br><br><br>
								
									

      
<div class="container card">

  <br><br>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">

                       
 <img src="/upload/{{Auth::user()->pic_path}}" class="avatar img-circle img-thumbnail"width="100px;" alt="avatar">
                     
                    
       
          
        <?php
    echo Form::open(array('url' =>'/uploadfile','files'=>'true'));
  
    echo Form::file('image',['class' => 'form-control']);  
    echo "<br>";

    echo Form::submit('Upload Image',['class' => 'btn btn-primary']);
    echo Form::close();

    ?>

      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
    	

    	@if(Session::get('u'))
    	<div class="alert alert-success" role="alert">
  	{{Session::get('u')}}

		</div>
    	@endif

    	{{Session::forget('u')}}

    	@foreach($errors->all() as $error)
      <div class="alert alert-danger" role="alert"id="alert">
 

    *{{$error}}<br>
    

		</div>
 		@endforeach
 <div class="row">
 	<div class="col-md-4">
      <h3>Personal info</h3>
  </div>
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
  	<a href="/jobseekerreport"class="btn btn-primary"><i class="fa fa-download"></i>generate report</a>
  </div>
  </div>
      <form class="form-horizontal" method="post"action="/updateprofile">
      	@csrf
        <div class="form-group">
          <label class="col-lg-3 control-label">Name:</label>
          <div class="col-lg-8">
            <input class="form-control" value="{{Auth::user()->name}}" type="text"name="name"required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">NRC:</label>
          <div class="col-lg-8">
            <input class="form-control" value="{{Auth::user()->nrc}}" type="text"name="nrc"required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" value="{{Auth::user()->email}}" type="email"name="email"required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Phone:</label>
          <div class="col-lg-8">
            <input class="form-control" value="{{Auth::user()->phno}}" type="text"name="phone"required>
          </div>
        </div>
        
       
        <div class="form-group">
          <label class="col-md-3 control-label">Address:</label>
          <div class="col-md-8">
            <input class="form-control" value="{{Auth::user()->address}}" type="text"name="address"required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">DOB:</label>
          <div class="col-md-8">
            <input class="form-control" value="{{Auth::user()->DOB}}" type="Date"name="dob"required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control"id="myInput" value="{{Auth::user()->password}}"type="password"name="password"><input type="checkbox" onclick="myFunction()">show password
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Save Changes" type="submit">
            <span></span>
            <input class="btn btn-danger" type="reset" value="Cancle">
          </div>
        </div>
      </form>

    </div>
  </div>
</div>



      </div>
      
    </div>
  </div>
</div>
</section>

					<br>		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>Top Products</h6>
								<ul class="footer-nav">
									<li><a href="#">Managed Website</a></li>
									<li><a href="#">Manage Reputation</a></li>
									<li><a href="#">Power Tools</a></li>
									<li><a href="#">Marketing Service</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="/newsletter" method="post" class="form-inline">
										@csrf
										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div> 
										
											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn"type="submit">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div> 
										</div>		
										<div class="info"></div>
									</form>
								</div>		
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Instragram Feed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
							
Copyright ©2019 ai project. All rights reserved.

						</p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="https://www.facebook.com/jobnet.com.mm/"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
							
						</div>
						<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fas fa-arrow-up"></i></a>
					</div>
				</div>
			</footer>
		@endif

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			<script type="text/javascript">
  					setTimeout(function(){
 
    				$(".alert").hide("20")
 
    				}, 2300);


	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});

			</script>
			
			

		</body>
	</html>



