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
           <h1>Update Experience</h1>
</div>
      </div>
      <div class="container mt-4">
    <form action="{{ route('experience.update', $experience->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="designation" class="form-label">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" value="{{ $experience->designation }}" required>
        </div>
        <div class="mb-3">
            <label for="organization_name" class="form-label">Organization Name</label>
            <input type="text" class="form-control" id="organization_name" name="organization_name" value="{{ $experience->organization_name }}" required>
        </div>
        <div class="mb-3">
    <label for="service_id" class="form-label">Service</label>
    <select class="form-select" id="service_id" name="service_id" required>
        @foreach($services as $service)
            <option value="{{ $service->id }}" {{ $experience->service_id == $service->id ? 'selected' : '' }}>{{ $service->service_name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="skill_ids" class="form-label">Skills</label>
    <select class="form-select" id="skill_ids" name="skill_ids[]" multiple required>
        @foreach($skills as $skill)
            <option value="{{ $skill->id }}" {{ $experience->skills->contains($skill->id) ? 'selected' : '' }}>{{ $skill->skill_name }}</option>
        @endforeach
    </select>
</div>

        <button type="submit" class="btn btn-primary">Update Experience</button>
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