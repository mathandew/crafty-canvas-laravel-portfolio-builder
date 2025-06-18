<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
           <h1>Add Skill</h1>
</div>
      </div>

      <div class="container mt-4">
    <form action="{{ route('skills.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="skill_name" class="form-label">Skill Name</label>
            <input type="text" class="form-control" id="skill_name" name="skill_name" required>
        </div>
        <div class="mb-3">
            <label for="skill_level" class="form-label">Skill Level</label>
            <select class="form-select" id="skill_level" name="skill_level" required>
                <option value="" selected disabled>Select skill level</option>
                <option value="basic">Basic</option>
                <option value="intermediate">Intermediate</option>
                <option value="expert">Expert</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Skill</button>
    </form>
</div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
  </body>
</html>