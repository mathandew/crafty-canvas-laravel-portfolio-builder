<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Crafty Canvas -- Advance Theme</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('advance/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('advance/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('advance/css/bootstrap.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('advance/css/flexslider.css')}}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('advance/fonts/flaticon/font/flaticon.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('advance/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('advance/css/owl.theme.default.min.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('advance/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
				<div class="author-img" style="background-image: url({{asset('storage/' . $user->image)}})"></div>
				<h1 id="colorlib-logo"><a href="">{{$user->first_name}} {{$user->last_name}}</a></h1>
				<span class="position text-danger">Lives in {{$user->country}}</span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="about">About</a></li>
						<li><a href="#" data-nav-section="services">Services</a></li>
						<li><a href="#" data-nav-section="skills">Skills</a></li>
						<li><a href="#" data-nav-section="education">Education</a></li>
						<li><a href="#" data-nav-section="experience">Experience</a></li>
						<li><a href="#" data-nav-section="work">Work</a></li>
						<li><a href="#" data-nav-section="contact">Contact</a></li>
					</ul>
				</div>
			</nav>

			<div class="colorlib-footer">
				<p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright <script>document.write(new Date().getFullYear());</script> All rights reserved. Made with 
<i class="icon-heart" aria-hidden="true"></i> by CraftyCanvas</small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin2"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(images/img_bg_1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
						   					<h1>Hi! <br>I'm {{$user->first_name}}</h1>
						   					<h2></h2>
												<p>
													<a href="{{ route('download.pdf') }}"  class="btn btn-primary btn-learn">Download CV <i class="icon-download4"></i></a>
													<a href="" class="btn btn-share btn-learn" data-toggle="modal" data-target="#shareModal">Share CV <i class="icon-share"></i></a>
												</p>
											    

					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<!-- <li style="background-image: url(images/img_bg_2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>I am <br>a Designer</h1>
												<h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
												<p><a class="btn btn-primary btn-learn">View Portfolio <i class="icon-briefcase3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li> -->
				  	</ul>
			  	</div>
			</section>

			<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta">About Me</span>
										<h2 class="colorlib-heading">Who Am I?</h2>
										<p><strong>Hi I'm {{ $user->first_name }} {{ $user->last_name }}</strong> , and I proudly hail from the vibrant city of <strong>{{ $user->city }}</strong>. 
        Growing up, my father, <strong>{{ $user->fathers_name }}</strong>, instilled in me the values of hard work and perseverance, which have shaped who I am today.
    </div>
								</div>
							</div>
							<div class="row">
								@foreach($services as $service)
								<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-1">
										<span class="icon2"><i class="icon-bulb"></i></span>
										<h3>{{$service->service_name}}</h3>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="hire">
										<h2>I am happy to know you <br>that {{$count}} projects done sucessfully!</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			
			<section class="colorlib-services" data-section="services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">What I do?</span>
							<h2 class="colorlib-heading">Here are some of my expertise</h2>
						</div>
					</div>
					<div class="row row-pt-md">
					@foreach($services as $service)
						<div class="col-md-4 text-center animate-box">
							<div class="services color-2">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3>{{$service->service_name}}</h3>
									<p>Delivering exceptional results through personalized service and expertise.</p>
								</div>
							</div>
						</div>
					@endforeach
					</div>
				</div>
			</section>
			
			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-4 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="{{$services_count}}" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Services</span>
						</div>
						<div class="col-md-4 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="{{$skills_count}}" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Skills</span>
						</div>
						<div class="col-md-4 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="{{$count}}" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Projects</span>
						</div>
					</div>
				</div>
			</div>

			<section class="colorlib-skills" data-section="skills">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Specialty</span>
							<h2 class="colorlib-heading animate-box">My Skills</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<p>Skilled in problem-solving and strategic thinking, I excel at transforming complex challenges into actionable solutions. With a strong foundation in collaboration and communication, I foster productive relationships to drive project success.</p>
						</div>
						@foreach($skills as $skill)
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>{{$skill->skill_name}}</h3>
								<div class="progress">
								@php
                                                // Set progress based on skill level
                                                $progress = 0;
                                                if ($skill->skill_level === 'basic') {
                                                    $progress = 25;
                                                } elseif ($skill->skill_level === 'intermediate') {
                                                    $progress = 50;
                                                } elseif ($skill->skill_level === 'expert') {
                                                    $progress = 80;
                                                }
                                            @endphp
								 	<div class="progress-bar color-{{$skill->id}}" role="progressbar" aria-valuenow="{{ $progress }}"
								  	aria-valuemin="0" aria-valuemax="100" style="width:{{ $progress }}%">
								    <span>{{ $progress }}%</span>
								  	</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</section>

			<section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Education</span>
							<h2 class="colorlib-heading animate-box">Education</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								@foreach($educations as $education)
									<div class="panel panel-default">
										
									    <div class="panel-heading" role="tab" id="heading{{ $education->id }}">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $education->id }}" aria-expanded="true" aria-controls="collapseOne">{{$education->title}}
									            </a>
									        </h4>
									    </div>
									    <div id="collapse{{ $education->id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{ $education->id }}">
									         <div class="panel-body">
									            <div class="row">
										      		<div class="col-md-6">
													  <p class="card-text"><strong>Institute Name:</strong> {{ $education->institute_name }}</p>
                                            <p class="card-text"><strong>Institute City:</strong> {{ $education->institute_city }}</p>
                                            <p class="card-text"><strong>Institute Country:</strong> {{ $education->institute_country }}</p>
										      		</div>
										      		<div class="col-md-6">
										      			<p>Completed my studies from {{ $education->enrolled_year }} to {{ $education->passing_year }}, focusing on core principles and practical applications in my field, resulting in {{$education->result}}</p>
										      		</div>
										      	</div>
									         </div>
									    </div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Experience</span>
							<h2 class="colorlib-heading animate-box">Work Experience</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
				         <div class="timeline-centered">
						 @foreach($experiences as $experience)
					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">

					               <div class="timeline-icon color-{{ $experience->id }}">
					                  <i class="icon-pen2"></i>
					               </div>

					               <div class="timeline-label">
					                  <h2><a href="">{{ $experience->designation }}</a></h2>
					                  <p>Held the position of {{ $experience->designation }} at {{ $experience->organization_name }} for {{ $experience->duration }}, managing {{ $experience->service->service_name }} while ensuring quality outcomes.</p>
					               </div>
					            </div>
					         </article>
						@endforeach
					      </div>
					   </div>
				   </div>
				</div>
			</section>

			<section class="colorlib-work" data-section="work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Work</span>
							<h2 class="colorlib-heading animate-box">Projects</h2>
						</div>
					</div>
					<div class="row">
						@foreach($projects as $project)
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url('{{ asset('project_images/' . $project->image) }}');">
								<div class="desc">
									<div class="con">
										<h3>{{$project->project_name}}</h3>
										<span>{{$project->project_description}}</span>
										<p class="icon">
											<span><a href=""><i class="icon-duration">Duration  </i>{{$project->project_duration}}</a></span>
											<!-- <span><a href="#"><i class="icon-eye"></i> 100</a></span> -->
											<!-- <span><a href="#"><i class="icon-heart"></i> 49</a></span> -->
										</p>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</section>

			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Get in Touch</span>
							<h2 class="colorlib-heading">Contact</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="">{{$user->email}}</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p>{{$user->address}}</p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="">{{$user->phone}}</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

	<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shareModalLabel">Share your CV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <h6>Share on Social Media:</h6>

                <!-- LinkedIn Share -->
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('download.pdf', ['id' => $user->id]) }}" 
                   class="btn btn-linkedin" target="_blank">Share on LinkedIn</a><br>

                <!-- Twitter Share -->
                <a href="https://twitter.com/intent/tweet?url={{ route('download.pdf', ['id' => $user->id]) }}&text=Check%20out%20my%20CV!" 
                   class="btn btn-twitter" target="_blank">Share on Twitter</a><br>

                <!-- Facebook Share -->
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('download.pdf', ['id' => $user->id]) }}" 
                   class="btn btn-facebook" target="_blank">Share on Facebook</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


	<!-- jQuery -->
	<script src="{{asset('advance/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('advance/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('advance/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('advance/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('advance/js/jquery.flexslider-min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{asset('advance/js/owl.carousel.min.js')}}"></script>
	<!-- Counters -->
	<script src="{{asset('advance/js/jquery.countTo.js')}}"></script>
	
	
	<!-- MAIN JS -->
	<script src="{{asset('advance/js/main.js')}}"></script>

	</body>
</html>

