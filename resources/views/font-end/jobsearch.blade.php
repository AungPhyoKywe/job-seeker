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

	body {
  margin: 0;
}

.curve-mask {
    width:100%;
    overflow: hidden;
    .curve-up {
        position:relative;
        z-index: 10;
        width: 120%;
        margin-left: -10%;
        margin-right: 10%;
        border-radius: 200vh 200vh 0% 0% / 20vh  20vh 0% 0%;
        -moz-border-radius: 200vh 200vh 0% 0% / 20vh  20vh 0% 0%;
        -webkit-border-radius: 200vh 200vh 0% 0% / 20vh  20vh 0% 0%;
        overflow: hidden;
        -webkit-mask-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC); //fixes overflow:hidden for safari
    }
    .curve-down {
        @extend .curve-up;
        border-radius: 0% 0% 200vh 200vh / 0% 0% 20vh 20vh;
        -moz-border-radius: 0% 0% 200vh 200vh / 0% 0% 20vh 20vh;
        -webkit-border-radius: 0% 0% 200vh 200vh / 0% 0% 20vh 20vh;
        
    }
    .curve-content-wrap{
        width: 83.4%;
        margin: 0 auto;
        padding-bottom: 3em; // gives room for the full curve
        padding-top: 3vw; // gives room for the full curve
    }
}

// Section Padding
.curve-content {
  width: 90%;
  margin: 0 auto;
}

.desc {
  width: 75%;
  margin: 0 auto;
  padding-top: 80px;
  padding-bottom: 80px;
}


// Curves
#curve-1 {
  background: url('https://66.media.tumblr.com/2ac360864a7fc2938e827a93810bf6e3/tumblr_ndiav7B84f1ql3m8no1_1280.png');
  // background settings
  background-size: cover;
  background-position-y: -13vw;
  background-repeat: no-repeat;
  color: white;
}

#curve-2 {
  background-color: rgba(0,0,0,.3);
  background-image: url('https://66.media.tumblr.com/b751fa1b7a9cd321e440744896f9808e/tumblr_nnlhqanRSi1qlo56to1_1280.png');
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  background-blend-mode: multiply;
  color: white;
  padding: 20px 0;
  p {
    font-size: 1.15em;
    font-family: 'Montserrat', sans-serif;
    line-height: 1.75em;
    text-align: center;
  }
}

#curve-3 {
  background-color: #efd7c3;
}


// Typography
@import url('https://fonts.googleapis.com/css?family=Montserrat');
@import url('https://fonts.googleapis.com/css?family=Cardo');
h1, h2, h3, h4, h5, h6 {
  font-family: 'Montserrat', sans-serif;
}
h1 {
  font-size: 40px;
  text-shadow: 0px 2px 10px rgba(0,0,0,0.5);
}

p {
  font-family: 'Cardo', serif;
  line-height: 1.4em;
}

.text-center {
  text-align: center;
}



			</style>
		</head>
		<body>
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
				          <li><a href="#joblist">Jobs List</a></li>
				          <li><a href="#footer">Contact Us</a></li>
				          @if(Auth::user()->role_id==2)
				         <li><a href="/back-end">My Account</a></li>
				        @endif
				        @if(Auth::user()->role_id==3)
				         <li><a href="/uploadfile">My Profile</a></li>
				        @endif
				         
				          <li class="menu-has-children"><a href="#"> <div class="pull-left">

				  		@if(Session::get('upload')==1)
                       
 					<img src="/upload/{{Auth::user()->pic_path}}" class="rounded-circle" width="50px"height="50px"alt="User Image">
                     
                        @endif
                      </div>	
                  </a>
				            
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
				          
				          <li><a class="btn btn-info" href="/jobseeker-reg">Signup</a></li>
				          <li><a class="btn btn-info" href="{{ route('login') }}">Login</a></li>

				          	
									<li><a class="btn btn-info" href="/jobowner-reg">+Job Create</a></li>			          				          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
			  @endif
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row">
						<dir class="col-md-12"></dir>
					</div>							

						</div>
					</div>
					<br><br><br><br><br><br>

					<div class="container">

						<div class="banner-content col-lg-12">
								
							<form method="post"action="/jobsearch" >{{ csrf_field() }}
								<div class="row justify-content-center form-wrap">
									<div class="col-lg-4 form-cols"style="width: 200px;">
										
										<select class="form-control form-control-lg"style="border-radius: 5px;"name="search">

											@foreach($industry as $in)
      											<option><b>

      										{{$in->name}}</b></option>
      										@endforeach
    											</select>


									</div>
									
									<div class="col-lg-4 form-cols">
									    <button type="submit" class="btn btn-info"style="border-radius: 5px;width: 200px;">
									      <span class="lnr lnr-magnifier"></span> Search
									    </button>
									</div>								
								</div>
							</form>	
							
									</div>
								</div>
								

			<section id="joblist" class="post-area ">


				@foreach($job as $j)
				<div class="container">
					<div class="row">
						<div class="col-md-12 post-list ">


							<div class="single-post d-flex flex-row"style="border-radius: 20px;">
								<div class="thumb">
									
									
								</div>
								<div class="details">

									
									<div class="title d-flex flex-row justify-content-between">
									<div class="titles">
									<h4>{{$j->job_name}}</h4>
									<h6>{{$j->company_name}}</h6>				
									</div>

										
									</div>
									

									@foreach(explode('-', $j->description) as $fields) 
    								<li>{{$fields}}</li>
									@endforeach

									<h5>Job Nature : {{$j->work_type}}</h5>
									<p class="address"><span class="lnr lnr-map"></span>Location : {{$j->location}}</p>
									<p class="address"><span class="lnr lnr-database"></span>
										@if(Auth::check())
										${{$j->salary}}
										@else
										<a href="/login">Login To View Salary</a>
										@endif


									</p>
								
									<i class="fas fa-clock">
										{{$j->created_at}}
									</i>

								</div>

								<div class="col-md-4">@if(Auth::check())

									@if(Auth::user()->role_id==3)
										<ul class="btns">
											<li><a data-toggle="modal" data-id="{{$j->job_id}}"data-target="#exampleModal"href="/apply">Apply</a></li>
										</ul>
										@endif
										@else
										<ul class="btns">
											
											<li><a href="/apply">Apply</a></li>
										</ul>
										@endif</div>
								
									
									<div class="col-sm-4">	
								<img src="upload/{{$j->company_logo}}" class="img-thumbnail"width="200px;"height="200px;">
								</div>
							</div>
						</div>
							</div>
							</div>
							</div>
							
							
								</div>
								</div>						
									</div>	
						</div>
					</div>

				</div>

			</div>
			
					@endforeach

			
				</section>
	</section>
				
<!-- Modal -->
<form method="post"action="/cvupload"enctype="multipart/form-data">
	{{ csrf_field() }}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please Upload Your CV*</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<input type="hidden" name="id"id="id">
      <input type="file"accept="application/pdf"class="form-control-lg"name="cv_path"required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send CV</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- Modal -->
			
			
			<!-- Start post Area -->
			
			
			<footer class="footer-area section-gap"id="footer">
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
			<!-- End footer Area -->		

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

$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  
  modal.find('.modal-body #id').val(id)
})



			</script>

		</body>
	</html>



