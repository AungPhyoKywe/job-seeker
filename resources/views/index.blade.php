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
				          
				          <li><a class="btn btn-info" href="/jobseeker-reg">Signup</a></li>
				          <li><a class="btn btn-info" href="{{ route('login') }}">Login</a></li>

				          	
									<li><a class="btn btn-info" href="/jobowner-reg">+Job Create</a></li>			          				          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
			  @endif
			
			<section class="banner-area relative" id="home">
			
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
							@if(Session::get('success'))
				<div class="alert alert-success" role="alert">
  					<h4>{{Session::get('success')}}!!</h4>
				</div>
							@endif
							@if(Session::get('failure'))
				<div class="alert alert-danger" role="alert">
  					<h4>{{Session::get('failure')}}!!</h4>
				</div>
							@endif
							<h1 class="text-white">
							The Easiest Way To Get Your <span>Dream Job</span> 				
							</h1>	
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
							<p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p>
						</div>											
					</div>
				</div>
			</section>
			<!-- Button trigger modal -->

			<section class="features-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Albert Einstein</h4>
								<p>
									“A person who never made a mistake never tried anything new.”
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>George Lucas</h4>
								<p>
									“Dreams are extremely important. You can’t do it unless you imagine it.”  

									<br>
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Confucius</h4>
								<p>
									“Choose a job you love, and you will never have to work a day in your life.”
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4>Thomas Jefferson</h4>
								<p>
									“Never put off till tomorrow what you can do today.” 
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>


			
			<!-- End features Area -->
			
			<!-- Start popular-post Area -->
			<section  class="popular-post-area pt-100">
				<div class="container">
					<div class="row align-items-center">
						<div class="active-popular-post-carusel">
							
								<div class="thumb">
									<img class="rounded mx-auto d-block" alt="Responsive image" src="img/job3.jpg"width="50px"height="200px">
									
								</div>
								
							
							
								<div class="thumb">
									<img class="rounded mx-auto d-block" alt="Responsive image" src="img/job4.jpg"width="50px"height="200px">
									
								
							</div>
							
								
							
								<div class="thumb">
									<img class="rounded mx-auto d-block" alt="Responsive image" src="img/job7.jpg"width="50px"height="200px">
									
								
							</div>	
							
																																													
						</div>
					</div>
				</div>	
			</section>

			<section class="feature-cat-area pt-100" id="category">
				<div class="container">
										
					<div class="row">
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o1.png" alt="">
							
								<p>Accounting</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
							
									<img src="img/o2.png" alt="">
								
								<p>Development</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o3.png" alt="">
								
								<p>Technology</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o4.png" alt="">
							
								<p>Media & News</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o5.png" alt="">
								
								<p>Medical</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								
									<img src="img/o6.png" alt="">
								
								<p>Goverment</p>
							</div>			
						</div>																											
					</div>
				</div>	
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
       <input type="file" class="form-control-lg"name="cv_path"accept="application/pdf" required>
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
<section id="joblist"class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul class="cat-list">
								
							</ul>

							@foreach($job as $j)
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="upload/{{$j->company_logo}}"width="150px" alt="">
									
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<h4>{{$j->job_name}}</h4>
											<h6>{{$j->company_name}}</h6>					
										</div>
										<ul class="btns">
											<li><span class="lnr lnr-heart"></span></li>

										</ul>

												
												@if(Auth::check())
									 @if(Auth::user()->role_id==3)
										<ul class="btns">
											<li><a data-toggle="modal"data-id="{{$j->job_id}}"data-target="#exampleModal"href="/apply">Apply</a></li>
										</ul>
										@endif
										@else
										<ul class="btns">
											
											<li><a href="/apply">Apply</a></li>
										</ul>
										@endif
											</a></li>
										</ul>
									</div>
									<p>
										@foreach(explode('-', $j->description) as $fields) 
    								<li>{{$fields}}</li>
									@endforeach
									</p>
									<h5>Job Nature: {{$j->work_type}}</h5>
									<p class="address"><span class="lnr lnr-map"></span> {{$j->location}}</p>
									<p class="address"><span class="lnr lnr-database"></span> @if(Auth::check())
										${{$j->salary}}
										@else
										<a href="/login">Login To View Salary</a>
										@endif</p>

									<i class="fas fa-clock">
										{{$j->created_at}}
									</i>
								</div>
							</div>
							@endforeach
							{{$job->links()}}

						</div>
						<div class="col-lg-4 sidebar">
							<div class="single-slidebar">
								<h4>Jobs by Location</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" ><p>New York</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex"><p>Park Montana</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex"><p>Atlanta</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex"><p>Arizona</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex"><p>Florida</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex"><p>Rocky Beach</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex"><p>Chicago</p><span>17</span></a></li>
								</ul>
							</div>

							<div class="single-slidebar">
								<h4>Top rated job posts</h4>
								<div class="active-relatedjob-carusel">
									<div class="single-rated">
										<img class="img-fluid" src="https://img.washingtonpost.com/pbox.php?url=https://www.washingtonpost.com/blogs/wonkblog/files/2016/03/0320_CreditScores_SS.gif&op=noop" alt="">
										<a href=""><h4>. Henry Ford</h4></a>
										<h6>“Whether you think you can or you think you can’t, you’re right.” </h6>
										
										<h4>.Oliver Wendell</h4>
										<h6>
											“A mind that is stretched by new experiences can never go back to its old dimensions.” 
										</h6>
										<a href="#" class="btns text-uppercase">See More</a>
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="https://media1.giphy.com/media/3oEduOXu3DBfTazzaw/source.gif" alt="">
										<a href=""><h4>.Michael Jordan</h4></a>
										<h6>“I’ve missed more than 9,000 shots in my career. I’ve lost almost 300 games. 26 times, I’ve been trusted to take the game winning shot and missed. I’ve failed over and over and over again in my life. And that is why I succeed.” </h6>
										
										<h4>.Bob Marley</h4>
										<h6>
											“When one door is closed, don’t you know that many more are open.” 
										</h6>
										<a href="#" class="btns text-uppercase">See More</a>
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="https://cdn.dribbble.com/users/542979/screenshots/3897697/office_work.gif" alt="">

										<a href=""><h4>. Author Unknown</h4></a>
										<h6>“Take risks: if you win, you will be happy; if you lose, you will be wise.”</h6>
										
										<h4>.Milton Berle</h4>
										<h6>
											“If opportunity doesn’t knock, then build a door.”
										</h6>
										<a href="#" class="btns text-uppercase">See More</a>
										
									</div>																		
								</div>
							</div>							

							<div class="single-slidebar">
								<h4>Jobs by Category</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" ><p>Technology</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex"><p>Media & News</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex"><p>Goverment</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex"><p>Medical</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex"><p>Restaurants</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex"><p>Developer</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex"><p>Accounting</p><span>17</span></a></li>
								</ul>
							</div>

							<div class="single-slidebar">
								<h4>Carrer Advice Blog</h4>
								<div class="blog-list">
									<div class="single-blog " style="background:#000 url(img/job1.png);">
										<a href=""><h4> <br>
										</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												 <span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>
									<div class="single-blog " style="background:#000 url(img/job2.png);">
										<a href=""><h4>  <br>
										</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
											
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												 <span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>
									<div class="single-blog " style="background:#000 url(https://files.tofugu.com/articles/japan/2017-04-18-non-teaching-jobs-in-japan/level-up.gif);">
										<a href=""><h4>Home Audio Recording <br>
										For Everyone</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												02 Hours ago
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												 <span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>																		
								</div>
							</div>							

						</div>
					</div>
				</div>	
			</section>
			

			<!-- Start callto-action Area -->
			<section class="callto-action-area section-gap" id="join">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
								<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								<a class="primary-btn" href="#">I am a Candidate</a>
								<a class="primary-btn" href="#">Request Free Demo</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->

			<!-- Start download Area -->
			<section class="download-area section-gap" id="app">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 download-left">
							<img class="img-fluid" src="img/d1.png" alt="">
						</div>
						<div class="col-lg-6 download-right">
							<h1>Download the <br>
							Job Listing App Today!</h1>
							<p class="subs">
								It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned.
							</p>
							<div class="d-flex flex-row">
								<div class="buttons">
									<i class="fa fa-apple" aria-hidden="true"></i>
									<div class="desc">
										<a href="#">
											<p>
												<span>Available</span> <br>
												on App Store
											</p>
										</a>
									</div>
								</div>
								<div class="buttons">
									<i class="fa fa-android" aria-hidden="true"></i>
									<div class="desc">
										<a href="#">
											<p>
												<span>Available</span> <br>
												on Play Store
											</p>
										</a>
									</div>
								</div>									
							</div>						
						</div>
					</div>
				</div>	
			</section>
			<!-- End download Area -->
		
			<!-- start footer Area -->		
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
												<button type="submit"class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
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



