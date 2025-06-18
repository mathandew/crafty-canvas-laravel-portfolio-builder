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
           <h1>Update Skill</h1>
</div>
      </div>
      <div class="container mt-4">
    <form action="{{ route('skills.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="skill_name" class="form-label">Skill Name</label>
            <input type="text" class="form-control" id="skill_name" name="skill_name" value="{{ $skill->skill_name }}" required>
        </div>
        <div class="mb-3">
            <label for="skill_level" class="form-label">Skill Level</label>
            <select class="form-select" id="skill_level" name="skill_level" required>
                <option value="basic" {{ $skill->skill_level == 'basic' ? 'selected' : '' }}>Basic</option>
                <option value="intermediate" {{ $skill->skill_level == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                <option value="expert" {{ $skill->skill_level == 'expert' ? 'selected' : '' }}>Expert</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Skill</button>
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