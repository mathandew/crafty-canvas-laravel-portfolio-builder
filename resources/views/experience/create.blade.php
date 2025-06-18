<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')
  <style>
        /* Ensure Select2 takes full width */
        
    </style>
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
           <h1>Add Experience</h1>
</div>
      </div>

      <div class="container mt-4">
    <form action="{{ route('experience.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="designation" class="form-label">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" required>
        </div>
        <div class="mb-3">
            <label for="organization_name" class="form-label">Organization Name</label>
            <input type="text" class="form-control" id="organization_name" name="organization_name" required>
        </div>
        <div class="mb-3">
    <label for="service_id" class="form-label">Service</label>
    <select class="form-select" id="service_id" name="service_id" required>
        <option value="" selected disabled>Select a service</option>
        @foreach($services as $service)
            <option value="{{ $service->id }}">{{ $service->service_name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="skill_ids" id="dd" class="form-label">Skills</label>
    <select class="form-select" aria-placeholder="Select" id="skill_ids" name="skill_ids[]"  required>
    <option value="" disabled>Select skills</option>
    @foreach($skills as $skill)
            <option value="{{ $skill->id }}">{{ $skill->skill_name }}</option>
        @endforeach
    </select>
</div>



        <button type="submit" class="btn btn-primary">Add Experience</button>
    </form>
</div>

    </div>
    <!-- JavaScript files-->
    
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
<script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
<script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('/admincss/js/charts-home.js')}}"></script>
<script src="{{asset('/admincss/js/front.js')}}"></script>


    <script>
    $(document).ready(function() {
    function initializeSelect2() {
        $('#skill_ids').select2({
            placeholder: 'Select skills',
            allowClear: true
        });
    }

    initializeSelect2();

    $(window).on('resize', function() {
        $('#skill_ids').select2('close'); // Close the dropdown if it's open
        initializeSelect2(); // Reinitialize Select2
    });
});

</script>
  </body>
</html>