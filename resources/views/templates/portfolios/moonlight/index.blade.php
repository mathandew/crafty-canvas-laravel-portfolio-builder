<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Crafty Canvas -- Moonlight Theme</title>
    <!-- 
Moonlight Template 
http://www.templatemo.com/tm-512-moonlight
-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{asset('moonlight/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('moonlight/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('moonlight/css/fontAwesome.css')}}">
    <link rel="stylesheet" href="{{asset('moonlight/css/light-box.css')}}">
    <link rel="stylesheet" href="{{asset('moonlight/css/templatemo-main.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="{{asset('moonlight/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body>

    <div class="sequence">

        <div class="seq-preloader">
            <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator">
                <g fill="#F96D38">
                    <path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z" />
                    <path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z" />
                    <path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z" />
                </g>
            </svg>
        </div>

    </div>


    <nav>
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <div class="mini-logo">
            <img  alt="">
        </div>
        <ul>
            <li><a href="#1"><i class="fa fa-home"></i> <em>Home</em></a></li>
            <li><a href="#2"><i class="fa fa-user"></i> <em>About</em></a></li>
            <li><a href="#3"><i class="fa fa-pencil"></i> <em>Skills</em></a></li>
            <li><a href="#4"><i class="fa fa-image"></i> <em>Work</em></a></li>
            <li><a href="#5"><i class="fa fa-envelope"></i> <em>Experience</em></a></li>
        </ul>
    </nav>

    <div class="slides">
        <div class="slide" id="1">
            <div class="content first-content">
                <div class="container-fluid">
                    <div class="col-md-3">
                        <div class="author-image"><img src="{{ asset('storage/' . $user->image) }}" alt=""></div>
                    </div>
                    <div class="col-md-9">
                        <h2>{{$user->first_name}} {{$user->last_name}}</h2>
                        <p>I provide professional services in
                            @foreach($services as $service)
                            <em>{{$service->service_name}}</em>
                            @endforeach

                            to meet your unique needs.
                        </p>
                        <div class="main-btn">
                            <a href="#2">Read More</a>  
                    </div>
                        <!-- <div class="fb-btn"><a href="https://www.facebook.com/templatemo/" target="_blank">Our FB Page</a></div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="slide" id="2">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
                            <h2>About</h2>
                            <p><span>Name:</span> <span>{{$user->first_name}}</span></p>
                            <p><span>Date of birth:</span> <span>January 01, 1987</span></p>
                            <p><span>Address:</span> <span>{{$user->address}}</span></p>
                            <p><span>Email:</span> <span>{{$user->email}}</span></p>
                            <p><span>Phone:</span> <span>{{$user->phone}}</span></p>
                            <p class="mb-4">
                                <span class="number" data-number="120">{{$count}}</span>
                                <span>Project complete</span>
                            </p>
                            <div class="main-btn">
                                <a class="btn" href="#3">Read More</a>
                                <!-- <a class="btn" href="#" class="">Download CV</a> -->
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                            <img src="img/about_image.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide" id="3">
            <div class="content third-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
                            <h2 class="">Skills</h2>
                            @foreach($skills as $skill)
                                <div class="col-md-12 animate-box">
                                    <div class="">
                                        <p>{{ $skill->skill_name }}</p>
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
                                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{ $progress }}"
                                                aria-valuemin="0" aria-valuemax="100" style="width:{{ $progress }}%">
                                                <span>{{ $progress }}%</span>
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
        <div class="slide" id="4">
            <div class="content fourth-content">
                <div class="container-fluid">
                    <div class="row">
                        @foreach($projects as $project)
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/first_big_item.jpg" data-lightbox="image-1">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <h2>{{$project->project_name}}</h2>
                                                <p>{{$project->project_description}}</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="image">
                                        <img src="{{ asset('project_images/' . $project->image) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="slide" id="5">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="left-content">
                            <h2>Experience</h2>
                            <div class="row">
                            @foreach($experiences as $experience)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-text"><strong>Designation:</strong> {{ $experience->designation }}</p>
                                            <p class="card-text"><strong>Organization:</strong> {{ $experience->organization_name }}</p>
                                            <p class="card-text"><strong>Service:</strong> {{ $experience->service->service_name }}</p>
                                            <p class="card-text"><strong>Duration:</strong> {{ $experience->duration }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                            <img src="img/about_image.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="content">
            <p>Copyright &copy; 2024 Crafty Canvas</p>
        </div>
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{asset("moonlight/js/vendor/jquery-1.11.2.min.js")}}"><\/script>')
    </script>

    <script src="{{asset('moonlight/js/vendor/bootstrap.min.js')}}"></script>

    <script src="{{asset('moonlight/js/datepicker.js')}}"></script>
    <script src="{{asset('moonlight/js/plugins.js')}}"></script>
    <script src="{{asset('moonlight/js/main.js')}}"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {



            // navigation click actions 
            $('.scroll-link').on('click', function(event) {
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function(event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed) {
            var offSet = 0;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({
                scrollTop: targetOffset
            }, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() {}
            };
        }
    </script>
</body>

</html>