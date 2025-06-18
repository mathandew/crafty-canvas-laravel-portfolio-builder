<nav id="sidebar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar">
      <a href="{{ route('profile.edit') }}">
      <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="..." class="img-fluid rounded-circle">
</a>
    </div>
    <div class="title">
      <h1 class="h5"><div>{{ Auth::user()->first_name }}</div></h1>
      <p>Web Designer</p>
    </div>
  </div>
  <!-- Sidebar Navidation Menus-->
   <!-- <span class="heading">Main</span> -->
  <ul class="list-unstyled">
    <li class=""><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Home </a></li>
    <li>
      <a href="{{route('templates.index')}}"> <i class="icon-grid"></i>Templete</a>
    </li>

    <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i
          class="icon-windows"></i>Education</a>
      <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
        <li><a href="{{url('education/create')}}">Add Education</a></li>
        <li><a href="{{route('education.index')}}">View Education</a></li>
      </ul>
    </li>
    <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i
          class="icon-windows"></i>Services</a>
      <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
        <li><a href="{{route('services.create')}}">Add Service</a></li>
        <li><a href="{{route('services.index')}}">View Services</a></li>
      </ul>
    </li>
    <li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse"> <i
          class="icon-windows"></i>Skills</a>
      <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
        <li><a href="{{route('skills.create')}}">Add Skill</a></li>
        <li><a href="{{route('skills.index')}}">View Skills</a></li>
      </ul>
    </li>
    <li><a href="#exampledropdownDropdown4" aria-expanded="false" data-toggle="collapse"> <i
          class="icon-windows"></i>Experience</a>
      <ul id="exampledropdownDropdown4" class="collapse list-unstyled ">
        <li><a href="{{route('experience.create')}}">Add Experience</a></li>
        <li><a href="{{route('experience.index')}}">View Experience</a></li>
      </ul>
    </li>
    <li><a href="#exampledropdownDropdown5" aria-expanded="false" data-toggle="collapse"> <i
          class="icon-windows"></i>Project</a>
      <ul id="exampledropdownDropdown5" class="collapse list-unstyled ">
        <li><a href="{{route('projects.create')}}">Add Project</a></li>
        <li><a href="{{route('projects.index')}}">View Project</a></li>
      </ul>
    </li>


  </ul>
</nav>