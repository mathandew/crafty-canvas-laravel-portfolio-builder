<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Crafty Canvas -- Simple Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('simple/assets/favicon.ico')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('simple/css/styles.css')}}" rel="stylesheet" />
</head>
@if ($userTemplate->isNotEmpty())
@php
$template = $userTemplate->first();
$pivotData = $template->pivot;
@endphp

<body id="page-top" style="background-color: {{$pivotData->background}}; color:{{$pivotData->color}};">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="logo-container">
                    <img src="{{ asset('simple/assets/img/logo-1.jpeg') }}" alt="Logo" class="logo">
                </div>
            </a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#education">Education</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#skills">Skills</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#experience">Experience</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#downloadcv">Download CV</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5 profilePic" src="{{ asset('storage/' . $user->image) }}" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">{{$user->first_name}} {{$user->last_name}}</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            @if ($pivotData->experience)
            <p class="masthead-subheading font-weight-light mb-0">
                @foreach($services as $service)
                {{$service->service_name}}
                @endforeach
            </p>
            @endif
        </div>
    </header>



    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            @if ($pivotData->projects)
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                @foreach($projects as $project)


                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{$project->id}}">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('project_images/' . $project->image) }}" alt="..." />
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div>No Data Found</div>
            @endif
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <p class="lead">
                    Hello! My name is <strong>{{ $user->first_name }}</strong>, and I proudly hail from the vibrant city of <strong>{{ $user->city }}</strong>.
                    Growing up, my father, <strong>{{ $user->fathers_name }}</strong>, instilled in me the values of hard work and perseverance, which have shaped who I am today.
                </p>

                <p>
                    My address is <strong>{{ $user->address }}</strong>, and I currently reside in <strong>{{ $user->country }}</strong>.
                    I am excited about the future and look forward to contributing positively to my community and beyond.
                </p>
    </section>

    <!-- education section -->
    <section class="page-section" id="education">
        <div class="container">
            <!-- Education Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Education</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Education Section Content-->
            @if ($pivotData->education)
            <div class="row text-center">
                @foreach($educations as $edu)
                <div class="col-lg-12 col-md-6 mb-5">
                    <h4>{{ $edu->title }}</h4>
                    <p><strong>Institution:</strong> {{ $edu->institute_name }} ({{ $edu->passing_year }})</p>
                    <p><strong>Location:</strong> {{ $edu->institute_city }}, {{ $edu->institute_country }}</p>
                    <p><strong>Result:</strong> {{ $edu->result }}</p>
                </div>
                @endforeach
            </div>
            @else
            <p>Education section is disabled.</p>
            @endif
        </div>
    </section>

    <!-- skills section -->

    <section class="page-section bg-primary text-white" id="skills">
        <div class="container">
            <!-- Skills Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Skills</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Skills Section Content-->
            @if ($pivotData->skills)
            <div class="row">
                <ul class="list-unstyled text-center">
                    @forelse($skills as $skill)
                    <li>{{ $skill->skill_name }} - {{ $skill->skill_level }}</li>
                    @empty
                    <li>No skills found.</li>
                    @endforelse
                </ul>
            </div>
            @else
            <div>No Data Found</div>
            @endif
            <div>
            </div>


        </div>
    </section>

    <!-- experience section -->

    <section class="page-section" id="experience">
        <div class="container">
            <!-- Experience Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Experience</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Experience Section Content-->
            @if ($pivotData->experience)
            <div class="row">
                @foreach($experiences as $experience)
                <div class="col-lg-4 col-md-6 mb-5">
                    <h4>{{ $experience->designation }}</h4>
                    <p><strong>Organization:</strong> {{ $experience->organization_name }}</p>
                    <p><strong>Duration:</strong> {{ $experience->duration }}</p>
                </div>
                @endforeach
            </div>
            @else
            <div>No Data Found</div>
            @endif
        </div>
    </section>




    <!-- Contact Section-->
    <section class="page-section bg-primary text-white mb-0" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <h2 class="text-center">{{$user->email}}</h2>
                <h3 class="text-center">{{$user->phone}}</h3>
            </div>
        </div>
    </section>

    <!-- Download CV Section-->
    <section class="page-section mb-0" id="downloadcv">
        <div class="container">
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-primary" href="{{ route('download.pdf') }}">
                    <i class="fas fa-download me-2"></i>
                    Download CV
                </a>
            </div>
            @else
            <p>No template found.</p>
            @endif
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer text-center">

    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Crafty Canvas 2024</small></div>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    @foreach($projects as $project)
    <div class="portfolio-modal modal fade" id="portfolioModal{{$project->id}}" tabindex="-1" aria-labelledby="portfolioModal{{$project->id}}" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{$project->project_name}}</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="{{ asset('projects/' . $project->image) }}" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">{{$project->project_description}}</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('simple/js/scripts.js')}}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>